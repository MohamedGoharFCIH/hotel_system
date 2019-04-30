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
use App\User;
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// start admin middleware

Route::get('/admin', 'HomeController@admin')->middleware('admin');

//end admin middleware


// start page routing
Route::get('/index', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    if (Auth::guest())
        return redirect('login');
    return view('admin');
});

Route::get('/rooms', function () {
    if (Auth::guest())
        return redirect('login');
    return view('rooms');
});

Route::get('/services', function () {
    if (Auth::guest())
        return redirect('login');
    return view('services');
});

Route::get('/booking', function () {
    if (Auth::guest())
        return redirect('login');
    return view('booking');
});

Route::get('/contact', function () {
    if (Auth::guest())
        return redirect('login');
    return view('contact');
});



Route::get('/login.html', function () {
    return view('auth/login');
});

Route::get('/sign-up', function () {
    return view('auth/register');
});

Route::get('/bill', function () {
    return view('bill');
});

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// end page routing

// start admin list usr
Route::get('/listusers-admin', 'manage@listusers');
// end admin list users

// start feedbacks part
Route::get('addfeedback', 'manage@AddFeedback');
Route::post('addfeedback', 'manage@AddFeedback');
Route::get('feedbacks-admin', 'manage@dashbordfeedbacks');
// end feedbacks part

// edit user
Route::get('editview/{id}', "manage@Edit");
Route::post('editview/{id}', "manage@Edit");


// delete users

Route::get('listusers-admin/{id}', function($id)
{
    $user=User::find($id);
    $user->delete();
    return redirect('listusers');
});
// read message
Route::get('/readMessage/{id}', 'manage@read');


Route::post('reserveroom', 'manage@ReserveRoom');

// start view rooms admin
Route::get('/rooms-admin', 'manage@listrooms');

Route::get('manage-room/{id}/{option}', 'manage@ManageRoom');

// end admin view rooms

// start admin add admin
Route::get('/addadmin-admin', function () {
    return view('dashbord-admin');
});
Route::post('addadmin', 'manage@AddAdmin');
// end admin add admin
