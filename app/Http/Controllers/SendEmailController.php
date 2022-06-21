<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
     public function sendEmail($id){

          $student = Student::find($id);
          Mail::to($student->email)->send(new TestMail());
          return back();
     }
}
