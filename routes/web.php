<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::view('/dashboardpage','dashboard')->name('dashboardpage');
Route::view('/aboutus','about')->name('aboutus');
Route::view('/services','services')->name('services');
Route::view('/appservices','app')->name('appservices');
Route::view('/webservices','web')->name('webservices');
Route::view('/dataservices','data')->name('dataservices');
Route::view('/graphicservices','graphic')->name('graphicservices'); 
Route::view('/payservices','pay')->name('payservices');
Route::view('/seoservices','seo')->name('seoservices');
Route::view('/socialservices','social')->name('socialservices');
Route::view('/apiservices','api')->name('apiservices');
Route::view('/faqs','faq')->name('faqs');
Route::view('/blogs','blog')->name('blogs');
Route::view('/contacts','contactus')->name('contacts');
Route::view('/digitalmarket','digitalmarketing')->name('digitalmarket');
Route::view('/blogdetail','blogdetails')->name('blogdetail');
Route::view('/blogdetail1','blogdetails1')->name('blogdetail1');
Route::view('/blogdetail2','blogdetails2')->name('blogdetail2');
Route::view('/blogdetail3','blogdetails3')->name('blogdetail3');









