<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\LecturesController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\RequestsController;


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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/lectures', function () {
    return view("lectures.index");
});
Route::get('/videos', function () {
    return view("videos.index");
});
Route::get('/materials', function () {
    return view("materials.index");
});
Route::get('/requests', function () {
    return view("requests.index");
});

Route::get('/lectures/{id}', [LecturesController::class, 'show']);
Route::get('/videos/{id}', [VideosController::class, 'show']);
Route::get('materials/{id}', [MaterialsController::class, 'show']);

Route::get('/video/create', [VideosController::class, 'create'])->name("videos.create");
Route::post('/videos', [VideosController::class, 'store'])->name("videos.store");


Route::get('/material/create', [MaterialsController::class, 'create'])->name("materials.create");
Route::post('/materials', [MaterialsController::class, 'store'])->name("materials.store");


Route::get('/request/create', [RequestsController::class, 'create'])->name("requests.create");
Route::post('/requests', [RequestsController::class, 'store'])->name("requests.store");



Route::get('lecture/create', [LecturesController::class, 'create'])->name('lectures.create');
Route::get('lectures/{lecture}/edit', [LecturesController::class, 'edit']);
Route::post('lecture', [LecturesController::class, 'store'])->name("lectures.store");
Route::put('lectures/{lecture}', [LecturesController::class, 'update'])->name("lectures.update");
Route::delete('lectures/{lecture}', [LecturesController::class, 'destroy'])->name("lectures.delete");

// [resources, lectures(post), video ] [user -  staff || student ] [notifications]
// need for [index, edit,] - staff n show [all]

// pages 
// layout - header and footer [notifications  - fetched via an api] - l8r not necessary
// about, contact us, sign up, log in,
// start learning - Lectures, videos, resources(Materials)
// student options - submit lecture request, edit details, logout, Lecture Reuests
// staff dashboard - ....

// Design of backend
// the models are - video, material, lectures
// video - title, description, url, lectureId, userId, belongsTo = none | category
// material -  file, name, description, lectureId, userId, belongsTo = none | category
// lecture - title, ?summary, content, material[ids, ...], video [id, ...], userId, belongsTo = none | category
// comment - lectureId, content, userId, timeStamp [requires a socket - real time], parentCommentId
// request - topic, description, userId, belongsTo
// notification - content, type = response to request, whom_it_concerns = all | userId | dept(not clear yet), read
// user - auth
// staff - primary key is userId, noOfcontibutions, other details
// student - primary key is userId , personal details
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// TO DO 
// seed data for LVM
// build out view with 
// implement controllers for LVM
// GO over ui n ensure it all behaves as should
// input content
// build staff v
// review
// upload heroku
// make pwa {not priority}
// test platform
// get feedback from people
// submit CDS n office

//To Do
// header - logo auth n all
// pages - 
// index - design n vontent
// options - on auth make request and all

// Update there seems to be no staff version anymore

// TO DO
// fill in content - copy, videos (2), lectures, material
// 