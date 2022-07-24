<?php

namespace App\Http\Controllers\Supervisor;

use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use App\Exports\SupervisorExport;
use App\Imports\SupervisorImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class SupervisorController extends Controller
{
    function create(Request $request){
        //Validate inputs
        $request->validate([
           'name'=>'required',
           'supervisor_id' =>'required|unique:supervisors',
           'email'=>'required|email|unique:supervisors,email',
           'phone'=>'required',
           'office' => 'required',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $supervisor = new Supervisor();
        $supervisor->name = $request->name;
        $supervisor->supervisor_id = $request->supervisor_id;
        $supervisor->email = $request->email;
        $supervisor->phone = $request->phone;
        $supervisor->office = $request->office;
        $supervisor->password = Hash::make($request->password);
        $save = $supervisor->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully as supervisor');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
    }

  function check(Request $request){
      //Validate Inputs
      $request->validate([
         'email'=>'required|email|exists:supervisors,email',
         'password'=>'required|min:5|max:30'
        ],
        [
          'email.exists'=>'This email is not exists in supervisors table'
        ]);

      $creds = $request->only('email','password');

      if( Auth::guard('supervisor')->attempt($creds) )
        {
          return redirect()->route('supervisor.home');
        }else{
          return redirect()->route('supervisor.login')->with('fail','Incorrect Credentials');
        }
  }

  function logout(){
      Auth::guard('supervisor')->logout();
      return redirect('/');
  }

  public function view(){

    $supervisor = Auth::user()->id;
    $students = Student::with('supervisor')->where('supervisor_id',$supervisor)->get();
    return view('dashboard.supervisor.supervisees', compact('students'));
  }

  public function progress(){

    $supervisor = Auth::user()->id;
    $students = Student::with('supervisor')->where('supervisor_id',$supervisor)->get();
    return view('dashboard.supervisor.progress', compact('students'));
  }

  public function form(){
    $supervisor = Auth::user()->id;
    $students = Student::with('supervisor')->where('supervisor_id',$supervisor)->get();
    return view('dashboard.supervisor.form', compact('students'));
  }

  public function index()
  {
    $supervisors = Supervisor::all();

    return view('importSupervisor', compact('supervisors'));
  }

  /**
  * @return \Illuminate\Support\Collection
  */
  public function importExportView()
  {
    return view('importSupervisor');
  }

  /**
  * @return \Illuminate\Support\Collection
  */
  public function import() 
  {
    Excel::import(new SupervisorImport,request()->file('file'));  
    return redirect()->back()->with('message', 'Data Successfully Imported!');
  }

  /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new SupervisorExport, 'supervisors.csv');
    }

}
