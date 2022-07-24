<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
     /*
     public function supervisorNotifyApproval($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          $lecturerEmail =  $student->lecturer->email;
          $receiver = [$email,$lecturerEmail];
          

          $body = "<strong>$supervisor</strong> have check <strong>$student_id  $name</strong>'s assignment and satisfy with the work! The assignment are ready to be evaluate. ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($receiver) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to( $receiver, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     public function supervisorNotifyDisapproval($id){

          $student = Student::find($id);
          $id = $student->id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          

          $body = "<strong>$supervisor</strong> have check your assignment and feel you need to update your work! Please update your work and resubmit.  ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }
     */

     public function studentNotification(){

          $student = Student::find(Auth::user()->id);
          $id = $student->student_id;
          $name = $student->name;
          $email = $student->supervisor->email;
          $assignment = $student->chapter1_url;
          

          $body = "Your supervisee, <b>$name</b> with Student ID <b>$id</b> have submitted assignment! You can review the assignment on myFYP Management System Website!";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     // Chapter 1
     public function supervisorApproveC1($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          $lecturerEmail =  $student->lecturer->email;
          $receiver = [$email,$lecturerEmail];
          

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 1</b> and satisfy with the work! The assignment are ready to be evaluate. ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($receiver) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to( $receiver, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     public function supervisorDisapproveC1($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 1</b> and feel it requires some fixing! Please update the assignment and resubmit.  ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     // Chapter 2
     public function supervisorApproveC2($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          $lecturerEmail =  $student->lecturer->email;
          $receiver = [$email,$lecturerEmail];
          

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 2</b> and satisfy with the work! The assignment are ready to be evaluate. ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($receiver) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to( $receiver, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     public function supervisorDisapproveC2($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 2</b> and feel it requires some fixing! Please update the assignment and resubmit.  ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     // Chapter 3
     public function supervisorApproveC3($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          $lecturerEmail =  $student->lecturer->email;
          $receiver = [$email,$lecturerEmail];
          

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 3</b> and satisfy with the work! The assignment are ready to be evaluate. ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($receiver) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to( $receiver, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     public function supervisorDisapproveC3($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 3</b> and feel it requires some fixing! Please update the assignment and resubmit.  ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     // Chapter 4
     public function supervisorApproveC4($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          $lecturerEmail =  $student->lecturer->email;
          $receiver = [$email,$lecturerEmail];
          

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 4</b> and satisfy with the work! The assignment are ready to be evaluate. ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($receiver) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to( $receiver, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     public function supervisorDisapproveC4($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 4</b> and feel it requires some fixing! Please update the assignment and resubmit.  ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     // Chapter 5
     public function supervisorApproveC5($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          $lecturerEmail =  $student->lecturer->email;
          $receiver = [$email,$lecturerEmail];
          

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 5</b> and satisfy with the work! The assignment are ready to be evaluate. ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($receiver) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to( $receiver, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }

     public function supervisorDisapproveC5($id){

          $student = Student::find($id);
          $name = $student->name;
          $student_id = $student->student_id;
          $email = $student->email;
          $supervisor = $student->supervisor->name;

          $body = "<b>$supervisor</b> have check <b>$student_id  $name</b>'s <b>Chapter 5</b> and feel it requires some fixing! Please update the assignment and resubmit.  ";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('myfypmanagement2022@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return redirect()->back()->with('success','Email notification send successfully!');
     }
}
