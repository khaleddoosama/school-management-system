<?php

use App\Http\Controllers\Classrooms\ClassroomController;
use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('selection');


Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {

    Route::get('/login/{type}', 'LoginController@loginForm')->middleware('guest')->name('login.show');

    Route::post('/login', 'LoginController@login')->name('login');

    Route::get('/logout/{type}', 'LoginController@logout')->name('logout');

});

 //==============================Translate all pages============================
    Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function() {
        //==============================dashboard============================
        //Route::get('/', 'App\Http\Controllers\HomeController@index')->name('dashboard');
        Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');

        //==============================Grades============================
        Route::group(['namespace' => 'App\Http\Controllers\Grades'], function () {
            Route::resource('Grades', 'GradeController');
        });

        //==============================Classrooms============================
        Route::group(['namespace' => 'App\Http\Controllers\Classrooms'], function () {
            Route::resource('Classrooms', 'ClassroomController');

            Route::post('delete_all' ,'ClassroomController@delete_all') ->name('delete_all');

            Route::post('Filter_Classes' ,'ClassroomController@Filter_Classes') ->name('Filter_Classes');

        });

        //==============================Sections============================
        Route::group(['namespace' => 'App\Http\Controllers\Sections'], function () {

            Route::resource('Sections', 'SectionController');

            Route::get('/classes/{id}', 'SectionController@getclasses');
        });


        //==============================Parents============================
        Route::view('add_parent', 'livewire.show_Form')->name('add_parent');

        //==============================Teachers============================
        Route::group(['namespace' => 'App\Http\Controllers\Teachers'], function () {

            Route::resource('Teachers', 'TeacherController');

        });
        //==============================Students============================
        Route::group(['namespace' => 'App\Http\Controllers\Students'], function () {

            Route::resource('Students', 'StudentController');
            Route::get('indirect_admin', 'OnlineClasseController@indirectCreate')->name('indirect.create');
            Route::post('indirect_admin', 'OnlineClasseController@storeIndirect')->name('indirect.store');
            Route::resource('online_classes', 'OnlineClasseController');
            Route::resource('Promotion', 'PromotionController');
            Route::resource('Graduated', 'GraduatedController');
            Route::resource('Fees', 'FeesController');
            Route::resource('Fees_Invoices', 'FeesInvoicesController');
            Route::resource('receipt_students', 'ReceiptStudentsController');
            Route::resource('ProcessingFee', 'ProcessingFeeController');
            Route::resource('Payment_students', 'PaymentController');
            Route::resource('Attendance', 'AttendanceController');

            Route::get('download_file/{filename}', 'LibraryController@downloadAttachment')->name('downloadAttachment');
            Route::resource('library', 'LibraryController');



            Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
            Route::get('Download_attachment/{studentsname}/{filename}', 'StudentController@Download_attachment')->name('Download_attachment');
            Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
        });

        //==============================Subjects============================
        Route::group(['namespace' => 'App\Http\Controllers\Subjects'], function () {
            Route::resource('subjects', 'SubjectController');
        });

        //==============================Quizzes============================
        Route::group(['namespace' => 'App\Http\Controllers\Quizzes'], function () {
            Route::resource('Quizzes', 'QuizzController');
        });

        //==============================questions============================
        Route::group(['namespace' => 'App\Http\Controllers\Questions'], function () {
            Route::resource('Questions', 'QuestionController');
        });

        //==============================Setting============================
        Route::resource('settings', 'App\Http\Controllers\SettingController');

    });
