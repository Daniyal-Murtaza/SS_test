<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
    


Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', PostController::class);
Route::get('send-mail', [MailController::class, 'index']);

Route::get('/send', function(){
    Mail::to('daniyalmurtaza77@gmail.com')->send(new Email());
    return "Email Send";
});
