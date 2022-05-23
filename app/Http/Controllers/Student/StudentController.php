<?php

namespace App\Http\Controllers\Student;

use App\Models\Student;
use Illuminate\Http\Request;

use App\Exports\StudentExport;
use App\Http\Controllers\Controller;
use App\Imports\StudentImport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('import', compact('students'));
    }

    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:students,email',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $student = new student();
          $student->name = $request->name;
          $student->email = $request->email;
          $student->password = Hash::make($request->password);
          $save = $student->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as student');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:students,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in students table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('student')->attempt($creds) ){
            return redirect()->route('student.home');
        }else{
            return redirect()->route('student.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('student')->logout();
        return redirect('/');
    }

    public function importExportView()
    {
       return view('import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new StudentExport, 'users.xlsx');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new StudentImport,request()->file('file'));
             
        return redirect()->back()->with('message', 'Data Successfully Imported!');
    }
}
