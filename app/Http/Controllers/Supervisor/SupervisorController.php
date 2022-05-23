<?php

namespace App\Http\Controllers\Supervisor;

use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SupervisorController extends Controller
{
    function create(Request $request){
        //Validate inputs
        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:supervisors,email',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $supervisor = new Supervisor();
        $supervisor->name = $request->name;
        $supervisor->email = $request->email;
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
    $supervisor = Supervisor::all();
    $students = Student::with('supervisor')->where('supervisor_id',1)->get();
    return view('dashboard.supervisor.supervisees', compact('students'));
  }

}
