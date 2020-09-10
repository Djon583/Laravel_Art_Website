<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('pages/index');
})->name('index');;

Route::get('/catalog', function () {
  return view('pages/catalog');
})->name('catalog');
Route::get('/catalog1', function () {
  return view('pages/catalog1');
})->name('catalog1');
Route::get('/catalog2', function () {
  return view('pages/catalog2');
})->name('catalog2');
Route::get('/catalog3', function () {
  return view('pages/catalog3');
})->name('catalog3');


Route::get('/about', function () {
  return view('pages/about');
})->name('about');
Route::get('/news', function () {
  return view('pages/news');
})->name('news');
Route::get('/contact', function () {
  return view('pages/contact');
})->name('contact');
Route::get('/dashboard', function () {
  return view('user/dashboard');
})->name('user.dashboard');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
