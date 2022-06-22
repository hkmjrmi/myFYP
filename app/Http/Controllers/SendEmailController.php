<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
     public function supervisorNotifyApproval($id){

          $student = Student::find($id);
          $id = $student->id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          

          $body = "$supervisor have check your assignment and satisfy with your work! Your assignment are ready to be evaluate. ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('m.hakimjurimi@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     public function supervisorNotifyDisapproval($id){

          $student = Student::find($id);
          $id = $student->id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          

          $body = "$supervisor have check your assignment and feel you need to update your work! Please update your work and resubmit.  ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('m.hakimjurimi@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     public function studentNotification(){

          $student = Student::find(Auth::user()->id);
          $id = $student->student_id;
          $name = $student->name;
          $email = $student->supervisor->email;
          $assignment = $student->chapter1_url;
          

          $body = "Your supervisee, $name with Student ID $id  have submitted assignment! You can review the assignment on myFYP Management System Website!";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('m.hakimjurimi@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }
}
