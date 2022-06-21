<?php

use App\Exports\StudentExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Lecturer\LecturerController;
use App\Http\Controllers\Supervisor\SupervisorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from myFYP Management',
        'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('syukriishak622@gmail.com')->send(new \App\Mail\TestMail($details));
   
    dd("Email is Sent.");
});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.home')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::get('importStudent', [StudentController::class, 'importExportView']);
        Route::get('importStudent', [StudentController::class, 'index']);
        Route::get('export', [StudentController::class, 'export'])->name('export');
        Route::post('import', [StudentController::class, 'import'])->name('import');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});

Route::prefix('student')->name('student.')->group(function(){

    Route::middleware(['guest:student','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.student.login')->name('login');
         Route::view('/register','dashboard.student.register')->name('register');
         Route::post('/create',[StudentController::class,'create'])->name('create');
         Route::post('/check',[StudentController::class,'check'])->name('check');
    });

    Route::middleware(['auth:student','PreventBackHistory'])->group(function(){
         Route::get('/edit',[StudentController::class,'editURL'])->name('edit');
         Route::put('/update/{id}', [StudentController::class, 'updateURL']);
         Route::view('/home','dashboard.student.home')->name('home');
         Route::view('/forms','dashboard.student.forms')->name('forms');
         Route::view('/forms/f1','dashboard.student.f1')->name('f1');
         Route::view('/supervisor','dashboard.student.supervisor')->name('supervisor');
         //Route::view('/assignments','dashboard.student.assignments')->name('assignments');
         Route::get('assignments',[AssignmentController::class, 'indexStudent']);
         Route::post('logout',[StudentController::class,'logout'])->name('logout');
    });

});

Route::prefix('supervisor')->name('supervisor.')->group(function(){

    Route::middleware(['guest:supervisor','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.supervisor.login')->name('login');
         Route::view('/register','dashboard.supervisor.register')->name('register');
         Route::post('/create',[SupervisorController::class,'create'])->name('create');
         Route::post('/check',[SupervisorController::class,'check'])->name('check');
    });

    Route::middleware(['auth:supervisor','PreventBackHistory'])->group(function(){
         Route::view('/home','dashboard.supervisor.home')->name('home');
         Route::get('/supervisees',[SupervisorController::class,'view']);
         Route::get('/edit-supervisee/{id}', [StudentController::class, 'editSupervisee']);
         Route::put('/update-supervisee/{id}', [StudentController::class, 'updateSupervisee']);
         Route::get('/form',[SupervisorController::class,'form']);
         Route::view('/progress','dashboard.supervisor.progress')->name('progress');
         Route::view('/forms','dashboard.supervisor.forms')->name('forms');
         Route::post('logout',[SupervisorController::class,'logout'])->name('logout');
    });

});

Route::prefix('lecturer')->name('lecturer.')->group(function(){

    Route::middleware(['guest:lecturer','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.lecturer.login')->name('login');
         Route::view('/register','dashboard.lecturer.register')->name('register');
         Route::post('/create',[LecturerController::class,'create'])->name('create');
         Route::post('/check',[LecturerController::class,'check'])->name('check');
    });

    Route::middleware(['auth:lecturer','PreventBackHistory'])->group(function(){
         Route::resource('assignments', AssignmentController::class);
         Route::view('/home','dashboard.lecturer.home')->name('home');
         Route::get('/students',[LecturerController::class,'viewStudent']);
         Route::get('/edit-student/{id}', [StudentController::class, 'edit']);
         Route::put('/update-student/{id}', [StudentController::class, 'update']);
         Route::view('/forms','dashboard.lecturer.forms')->name('forms');
         Route::get('/forms/f1',[LecturerController::class,'viewStudentF1']);
         Route::get('/f1-assessment/{id}', [StudentController::class, 'editF1']);
         Route::put('/update-f1/{id}', [StudentController::class, 'updateF1']);
         Route::get('/forms/f2',[LecturerController::class,'viewStudentF2']);
         Route::get('/f2-assessment/{id}', [StudentController::class, 'editF2']);
         Route::put('/update-f2/{id}', [StudentController::class, 'updateF2']);
         Route::get('/forms/f3',[LecturerController::class,'viewStudentF3']);
         Route::get('/f3-assessment/{id}', [StudentController::class, 'editF3']);
         Route::put('/update-f3/{id}', [StudentController::class, 'updateF3']);
         Route::get('/forms/f4',[LecturerController::class,'viewStudentF4']);
         Route::get('/f4-assessment/{id}', [StudentController::class, 'editF4']);
         Route::put('/update-f4/{id}', [StudentController::class, 'updateF4']);
         Route::get('/forms/f13',[LecturerController::class,'viewStudentF13']);
         Route::get('/f13-assessment/{id}', [StudentController::class, 'editF13']);
         Route::put('/update-f13/{id}', [StudentController::class, 'updateF13']);
         Route::post('logout',[LecturerController::class,'logout'])->name('logout');
    });

});



