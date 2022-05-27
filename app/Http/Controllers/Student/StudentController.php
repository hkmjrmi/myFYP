<?php

namespace App\Http\Controllers\Student;

use App\Models\Student;
use Illuminate\Http\Request;

use App\Exports\StudentExport;
use App\Http\Controllers\Controller;
use App\Imports\StudentImport;
use App\Models\Lecturer;
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
             'student_id' =>'required|unique:students',
             'email'=>'required|email|unique:students,email',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $student = new student();
          $student->name = $request->name;
          $student->student_id = $request->student_id;
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
        return Excel::download(new StudentExport, 'students.csv');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new StudentImport,request()->file('file'));
             
        return redirect()->back()->with('message', 'Data Successfully Imported!');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('dashboard.lecturer.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->project = $request->input('project');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }

    public function editF1($id)
    {
        $student = Student::find($id);
        return view('dashboard.lecturer.f1-assessment', compact('student'));
    }

    public function updateF1(Request $request, $id)
    {
        $student = Student::find($id);
        $student->f2 = $request->input('f2');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }

}
