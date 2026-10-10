<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');


    $data = [
        'title' => 'hi students how are you?',
        'content' => 'this is a test email',
        'test' => 'Hello World',
    ];


    Mail::send('emails.test',$data,function($message){
        $message->to('omar.o201880@gmail.com','omar')->subject('hello students');
    });


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
