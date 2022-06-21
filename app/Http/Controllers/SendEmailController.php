<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
     public function supervisorNotification($id){

          $student = Student::find($id);
          $email = $student->email;
          $supervisor = $student->supervisor->name;
          

          $body = "$supervisor have check your assignment!";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('myfypmanagement@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return back();
     }

     public function studentNotification(){

          $student = Student::find(Auth::user()->id);
          $id = $student->student_id;
          $name = $student->name;
          $email = $student->supervisor->email;
          $assignment = $student->chapter1_url;
          

          $body = "Your supervisee, $name with Student ID $id  have submitted assignment! You can review the assignment on myFYP Management System Website!";

          Mail::send('emails.TestMail', ['body'=>$body], function ($message) use($email) {
              $message->from('myfypmanagement@gmail.com', 'MyFYP Management System');
              $message->to($email, '');
              $message->subject('myFYP Management Notification');
              
          });

          return back();
     }
}
