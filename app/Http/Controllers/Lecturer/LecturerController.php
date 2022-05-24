<?php

namespace App\Http\Controllers\Lecturer;

use App\Models\Student;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LecturerController extends Controller
{
    function create(Request $request){
        //Validate inputs
        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:lecturers,email',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $lecturer = new Lecturer();
        $lecturer->name = $request->name;
        $lecturer->email = $request->email;
        $lecturer->password = Hash::make($request->password);
        $save = $lecturer->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully as lecturer');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
    }

  function check(Request $request){
      //Validate Inputs
      $request->validate([
         'email'=>'required|email|exists:lecturers,email',
         'password'=>'required|min:5|max:30'
      ],[
          'email.exists'=>'This email is not exists in lecturers table'
      ]);

      $creds = $request->only('email','password');

      if( Auth::guard('lecturer')->attempt($creds) ){
          return redirect()->route('lecturer.home');
      }else{
          return redirect()->route('lecturer.login')->with('fail','Incorrect Credentials');
      }
  }

  function logout(){
      Auth::guard('lecturer')->logout();
      return redirect('/');
  }

  public function viewStudent(){
    
    $lecturer = Auth::user()->id;
    $students = Student::with('lecturer')->where('lecturer_id',$lecturer)->get();
    return view('dashboard.lecturer.students', compact('students'));
  }
}
