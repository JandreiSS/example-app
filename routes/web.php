<?php

use MailchimpMarketing\ApiClient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::post('newsletter', function () {
  request()->validate(['email' => 'required|email']);

  $mailchimp = new ApiClient();

  $mailchimp->setConfig([
    'apiKey' => config('services.mailchimp.key'),
    'server' => 'us12'
  ]);

  try {
    $response = $mailchimp->lists->addListMember('a2a1c67f42', [
      'email_address' => request('email'),
      'status' => 'subscribed'
    ]);
  } catch (\Exception $e) {
    throw \Illuminate\Validation\ValidationException::withMessages([
      'email' => 'This email could not be added to our newsletter list.'
    ]);
  }

  return redirect('/')->with('success', 'You are now signed up for our newsletter!');
});

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');