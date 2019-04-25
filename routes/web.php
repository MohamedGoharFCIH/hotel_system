<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create  something great!
|
*/
use App\User;
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// start admin middleware

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');


//end admin middleware


Route::get('/index', function () {
    return view('welcome');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::get('/login.html', function () {
    return view('auth/login');
});

Route::get('/sign-up', function () {
    return view('auth/register');
});


// list usr
Route::get('/listusers', 'manage@listusers');

Route::get('/listusers/{id}', function($id){
  $user=User::find($id);
  $user->delete();
  return redirect("listusers");
});
Route::get('/viewmessage/{id}', 'manage@read');

// start feedbacks part
Route::get('addfeedback', 'manage@AddFeedback');
Route::post('addfeedback', 'manage@AddFeedback');
Route::get('dashbordfeedbacks', 'manage@dashbordfeedbacks');
// end feedbacks part

//start edit User
Route::get('/editview/{id}', 'manage@Editusers');
Route::post('/editview/{id}', 'manage@Editusers');
//start edit User
