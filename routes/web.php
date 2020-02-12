<?php

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

use Illuminate\Support\Facades\Route;

//GENERATE PDF FILE

Route::get('pdf_form', 'PdfController@pdfForm')->name('pdfForm');
Route::post('pdf_download', 'PdfController@pdfDownload')->name('pdf');
Route::get('pdf_download', 'PdffController@index')->name('pdff');


//CAPTCHA
Route::get('captcha-form', 'CaptchaController@captchaForm');
Route::post('store-captcha-form', 'CaptchaController@storeCaptchaForm');

Route::get('', function () {
    return view('student.edit');
});


//CRUD
Route::get('students/index' ,'StudentController@index')->name('index');

Route::post('students/store' ,'StudentController@store')->name('store');
Route::get('students/create' ,'StudentController@create')->name('create');
Route::get('students/show/{id}' ,'StudentController@show')->name('show');
Route::get('students/delete/{id}' ,'StudentController@destroy')->name('delete');
Route::post('students/update/{id}' ,'StudentController@update')->name('update');
Route::get('students/edit/{id}' ,'StudentController@edit')->name('edit');

