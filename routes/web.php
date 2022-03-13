<?php

use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employee\EmployeeController;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');

Route::auth();

Route::get('desires', "DesiresController@index")->name('desires.index');
Route::get('desires/create', "DesiresController@create")->name('desires.create');
Route::post('desires/create', "DesiresController@store")->name('desires.store');
// ## display 1 item
Route::get('desires/show/{id}', "DesiresController@show")->name('desires.show');
// ## edit page
Route::get('desires/edit/{id}', "DesiresController@edit")->name('desires.edit');
// ## update
Route::post('desires/edit/{id}', "DesiresController@update")->name('desires.update');
// ## Destroy
Route::get('desires/delete/{id}', "DesiresController@destroy")->name('desires.destroy');

/* questions */

Route::get('questions', "QuestionsController@index")->name('questions.index');
Route::get('questions/create', "QuestionsController@create")->name('questions.create');
Route::post('questions/create', "QuestionsController@store")->name('questions.store');
// ## display 1 item
Route::get('questions/show/{id}', "QuestionsController@show")->name('questions.show');
// ## edit page
Route::get('questions/edit/{id}', "QuestionsController@edit")->name('questions.edit');
// ## update
Route::post('questions/edit/{id}', "QuestionsController@update")->name('questions.update');
// ## Destroy
Route::get('questions/delete/{id}', "QuestionsController@destroy")->name('questions.destroy');


Route::get('/programs', 'ProgramsController@index')->name('programs');

Route::view('appliedStudents', 'layouts.appliedStudents')->name('appliedStudents');
Route::get('appliedStudents', 'AppliedDesiresController@index')->name('appliedStudents.index');

/* blog */
Route::view('blog', 'layouts.blog')->name('blog');
Route::get('blog', 'NewsController@index')->name('blog.index');
Route::get('blog/{News}', "NewsController@show")->name('blog.show');
// ## Create
Route::get('blog/create', "NewsController@create")->name('blog.create');
// ## insert
Route::post('blog/create', "NewsController@store")->name('blog.store');
// ## display 1 item
Route::get('blog/show/{id}', "NewsController@show")->name('blog.show');
// ## edit page
Route::get('blog/edit/{id}', "NewsController@edit")->name('blog.edit');
// ## update
Route::post('blog/edit/{id}', "NewsController@update")->name('blog.update');
// ## Destroy
Route::get('blog/delete/{id}', "NewsController@destroy")->name('blog.destroy');



Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
        Route::view('/home', 'dashboard.user.home')->name('home');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        // Route::view('/home', 'dashboard.admin.home')->name('home');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/home', 'Admin\DashboardController@totalAll')->name('home');
        Route::post('/create', [AdminController::class, 'create'])->name('create');
        //view and add admins
        Route::get('/pages/admins', 'Admin\PagesController@totalAdmins')->name('admins');
        Route::view('/pages/createadmin', 'dashboard.admin.pages.createadmin')->name('createadmin');
        //view and add emoloyees
        Route::get('/pages/employees', 'Admin\PagesController@totalEmp')->name('employees');
        Route::view('/pages/createemp', 'dashboard.admin.pages.createemp')->name('createemp');
        //view and add users
        Route::get('/pages/users', 'Admin\PagesController@totalAll')->name('users');
        Route::view('/pages/createuser', 'dashboard.admin.pages.createuser')->name('createuser');

        // update
        Route::post('/update', 'Admin\AdminController@update')->name('update');
        Route::post('/empUpdate', 'Admin\AdminController@empUpdate')->name('empUpdate');
        Route::post('/userdUpdate', 'Admin\AdminController@userdUpdate')->name('userdUpdate');
        // delete
        Route::get('/delete/{id}', "Admin\AdminController@destroy")->name('destroy');
        Route::get('/destroyEmployee/delete/{id}', "Admin\AdminController@destroyEmployee")->name('destroyEmployee');
        Route::get('/destroyUser/delete/{id}', "Admin\AdminController@destroyUser")->name('destroyUser');
    });
});


Route::prefix('employee')->name('employee.')->group(function () {

    Route::middleware(['guest:employee', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.employee.login')->name('login');
        Route::view('/register', 'dashboard.employee.register')->name('register');
        Route::post('/create', [EmployeeController::class, 'create'])->name('create');
        Route::post('/check', [EmployeeController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:employee', 'PreventBackHistory'])->group(function () {
        Route::get('/home', 'Employee\DashboardController@index')->name('home');
        //Route::get('/home', 'Employee\DashboardController@index')->name('index');
        Route::post('/logout', [EmployeeController::class, 'logout'])->name('logout');
    });

    Route::get('/registered-students', 'Employee\DashboardController@registered')->name('registered');
    Route::get('/registered-students/approve/{id}', "Employee\DashboardController@approve")->name('approve');
    Route::get('/registered-students/reject/{id}', "Employee\DashboardController@reject")->name('reject');
});
