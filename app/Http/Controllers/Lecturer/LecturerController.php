<?php

namespace App\Http\Controllers\Lecturer;

use App\Models\Student;
use App\Models\Lecturer;
use App\Models\Assignment;
use Illuminate\Http\Request;
use App\Exports\LecturerExport;
use App\Imports\LecturersImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class LecturerController extends Controller
{
    function create(Request $request){
        //Validate inputs
        $request->validate([
           'name'=>'required',
           'lecturer_id' => 'required|unique:lecturers',
           'email'=>'required|email|unique:lecturers,email',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $lecturer = new Lecturer();
        $lecturer->name = $request->name;
        $lecturer->lecturer_id = $request->lecturer_id;
        $lecturer->email = $request->email;
        $lecturer->phone = $request->phone;
        $lecturer->office = $request->office;
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
          'email.exists'=>'This email does not exists in Lecturers table'
      ]);

      $creds = $request->only('email','password');

      if( Auth::guard('lecturer')->attempt($creds) ){
          return redirect()->route('lecturer.home');
      }else{
          return redirect()->route('lecturer.login')->with('fail','Incorrect Credentials');
      }
  }

public function editProfile(){
    if(Auth::user()){
        $lecturer = Lecturer::find(Auth::user()->id);

        return view('dashboard.lecturer.editProfile', compact('lecturer'));
        
    }
}

public function updateProfile(Request $request, $id)
{
    $lecturer = lecturer::find($id);
    $lecturer->name = $request->input('name');
    $lecturer->email = $request->input('email');
    $lecturer->phone = $request->input('phone');
    $lecturer->office = $request->input('office');
    $lecturer->update();
    return redirect()->route('lecturer.home')->with('status','Lecturer Updated Successfully');
}

  function logout(){
      Auth::guard('lecturer')->logout();
      return redirect('/');
  }

  public function editLecturer($id)
  {
      $lecturer= Lecturer::find($id);
      return view('dashboard.admin.editLecturer', compact('lecturer'));
  }

  public function updateLecturer(Request $request, $id)
  {
      $lecturer = lecturer::find($id);
      $lecturer->name = $request->input('name');
      $lecturer->email = $request->input('email');
      $lecturer->phone = $request->input('phone');
      $lecturer->office = $request->input('office');
    
      $lecturer->update();
      return redirect()->back()->with('status','Lecturer Updated Successfully');
  }

  public function viewStudent(){
    
    $lecturer = Auth::user()->id;
    $students = Student::with('lecturer')->where('lecturer_id',$lecturer)->get();
    return view('dashboard.lecturer.students', compact('students'));
  }

  public function viewStudentF1(){
    
    $lecturer = Auth::user()->id;
    $students = Student::with('lecturer')->where('lecturer_id',$lecturer)->get();
    return view('dashboard.lecturer.f1', compact('students'));
  }

  public function viewStudentF2(){
    
    $lecturer = Auth::user()->id;
    $students = Student::with('lecturer')->where('lecturer_id',$lecturer)->get();
    return view('dashboard.lecturer.f2', compact('students'));
  }

  public function viewStudentF3(){
    
    $lecturer = Auth::user()->id;
    $students = Student::with('lecturer')->where('lecturer_id',$lecturer)->get();
    return view('dashboard.lecturer.f3', compact('students'));
  }

  public function viewStudentF4(){
    
    $lecturer = Auth::user()->id;
    $students = Student::with('lecturer')->where('lecturer_id',$lecturer)->get();
    return view('dashboard.lecturer.f4', compact('students'));
  }

  public function viewStudentF13(){
    
    $lecturer = Auth::user()->id;
    $students = Student::with('lecturer')->where('lecturer_id',$lecturer)->get();
    return view('dashboard.lecturer.f13', compact('students'));
  }

    public function indexLecturer()
    {
        $lecturers = Lecturer::all();

        return view('importLecturer', compact('lecturers'));
    }

  /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('importLecturer');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new LecturersImport,request()->file('file'));
             
        return redirect()->back()->with('message', 'Data Successfully Imported!');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new LecturerExport, 'lecturers.csv');
    }



  /*
  public function update(Request $request, Assignment $assignment)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'deadline' => 'required',
        ]);

        $assignment->update($request->all());

        return redirect()->route('lecturer.assignments.index')->with('success','Assignment updated successfully');
    }
    */

}
