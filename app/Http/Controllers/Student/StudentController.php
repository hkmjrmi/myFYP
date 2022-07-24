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
    public function indexStudent()
    {
        $students = Student::all();

        return view('import', compact('students'));
    }

    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'student_id' =>'required|unique:students',
             'lecturer_id' =>'required',
             'supervisor_id' =>'required',
             'project' => 'required',
             'email'=>'required|email|unique:students,email',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $student = new student();
          $student->name = $request->name;
          $student->student_id = $request->student_id;
          $student->lecturer_id = $request->lecturer_id;
          $student->supervisor_id = $request->supervisor_id;
          $student->project = $request->project;
          $student->email = $request->email;
          $student->password = Hash::make($request->password);
          $save = $student->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as student!');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:students,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is doest not exists in Students table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('student')->attempt($creds) ){
            return redirect()->route('student.home');
        }else{
            return redirect()->route('student.login')->with('fail','Incorrect Credentials');
        }
    }

    public function editProfile(){
        if(Auth::user()){
            $student = Student::find(Auth::user()->id);

            return view('dashboard.student.editProfile', compact('student'));
            
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $student = Student::find($id);
        $student->project = $request->input('project');
        $student->update();
        return redirect()->route('student.home')->with('status','Student Updated Successfully');
    }

    public function editURL(){
        if(Auth::user()){
            $student = Student::find(Auth::user()->id);

            return view('dashboard.student.upload', compact('student'));
            
        }
    }

    public function updateURL(Request $request, $id)
    {
        $student = Student::find($id);
        $student->chapter1_url = $request->input('chapter1_url');
        $student->chapter2_url = $request->input('chapter2_url');
        $student->chapter3_url = $request->input('chapter3_url');
        $student->chapter4_url = $request->input('chapter4_url');
        $student->chapter5_url = $request->input('chapter5_url');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
        // return redirect()->route('student.assignments')->with('status','Assignment Uploaded Successfully');
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
    
    public function editStudent($id)
    {
        $student = Student::find($id);
        return view('dashboard.admin.editStudent', compact('student'));
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->student_id= $request->input('student_id');
        $student->email = $request->input('email');
        $student->project = $request->input('project');
        $student->lecturer_id = $request->input('lecturer_id');
        $student->supervisor_id = $request->input('supervisor_id');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }

    public function editSupervisee($id)
    {
        $student = Student::find($id);
        return view('dashboard.supervisor.edit-student', compact('student'));
    }

    public function progress($id)
    {
        $student = Student::find($id);
        return view('dashboard.supervisor.progress', compact('student'));
    }
    
    public function updateSupervisee(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->project = $request->input('project');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
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

    // Form F1
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
        return redirect()->back()->with('status','Student Graded Successfully!');
    }

    // Form F2
    public function editF2($id)
    {
        $student = Student::find($id);
        return view('dashboard.lecturer.f2-assessment', compact('student'));
    }

    public function updateF2(Request $request, $id)
    {
        $student = Student::find($id);
        $student->f2 = $request->input('f2');
        $student->update();
        return redirect()->route('lecturer.f2list')->with('status','Student Graded Successfully!');
    }

    // Form F3
    public function editF3($id)
    {
        $student = Student::find($id);
        return view('dashboard.lecturer.f3-assessment', compact('student'));
    }

    public function updateF3(Request $request, $id)
    {
        $student = Student::find($id);
        $student->f3 = $request->input('f3');
        $student->update();
        return redirect()->route('lecturer.f3list')->with('status','Student Graded Successfully!');
    }

    // Form F4
    public function editF4($id)
    {
        $student = Student::find($id);
        return view('dashboard.lecturer.f4-assessment', compact('student'));
    }

    public function updateF4(Request $request, $id)
    {
        $student = Student::find($id);
        $student->f4 = $request->input('f4');
        $student->update();
        return redirect()->route('lecturer.f4list')->with('status','Student Graded Successfully!');
    }

    // Form F13
    public function editF13($id)
    {
        $student = Student::find($id);
        return view('dashboard.lecturer.f13-assessment', compact('student'));
    }

    public function updateF13(Request $request, $id)
    {
        $student = Student::find($id);
        $student->f13 = $request->input('f13');
        $student->update();
        return redirect()->route('lecturer.f13list')->with('status','Student Graded Successfully!');
    }


}
