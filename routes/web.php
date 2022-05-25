<?php

use App\Exports\StudentExport;
use Illuminate\Support\Facades\Auth;
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
         Route::view('/class','dashboard.lecturer.class')->name('class');
         //Route::view('/assignments','dashboard.lecturer.assignments')->name('assignments');
         Route::view('/forms','dashboard.lecturer.forms')->name('forms');
         Route::post('logout',[LecturerController::class,'logout'])->name('logout');
    });

});



