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
    elseif(Auth::user()->type==0)
        return redirect('index');
    return view('admin');
});

Route::get('/rooms', function () {
    if (Auth::guest())
        return redirect('login');
      elseif(Auth::user()->type==1)
        return redirect('home');
    return view('rooms');
});

Route::get('/services', function () {
    if (Auth::guest())
        return redirect('login');
    elseif(Auth::user()->type==1)
          return redirect('home');
    return view('services');
});

Route::get('/booking', function () {
    if (Auth::guest())
        return redirect('login');
    elseif(Auth::user()->type==1)
        return redirect('home');
    return view('booking');
});

Route::get('/contact', function () {
    if (Auth::guest())
        return redirect('login');
    elseif(Auth::user()->type==1)
        return redirect('home');
    return view('contact');
});



Route::get('/login.html', function () {
    return view('auth/login');
});

Route::get('/sign-up', function () {
    return view('auth/register');
});
/*
Route::get('/bill', function () {

    return view('bill');
});
*/


Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// end page routing

// start admin list usr
Route::get('/listusers-admin', 'manage@listusers')->middleware('auth');
// end admin list users

// start feedbacks part
Route::get('addfeedback', 'manage@AddFeedback')->middleware('auth');
Route::post('addfeedback', 'manage@AddFeedback')->middleware('auth');
Route::get('feedbacks-admin', 'manage@dashbordfeedbacks')->middleware('auth');
// end feedbacks part
// start Validate

// eidt user
Route::get('editview/{id}', "manage@Edit")->middleware('auth');
Route::post('editview/{id}', "manage@Edit")->middleware('auth');
// end Validate

// Akher 7agaa

// delete users

Route::get('listusers-admin/{id}', function($id)
{
   if(Auth::user()->type==0)
      return redirect('index');
    $user=User::find($id);
    $user->delete();
    return redirect('listusers');
})->middleware('auth');
// read message
Route::get('/readMessage/{id}', 'manage@read')->middleware('auth');


Route::post('reserveroom', 'manage@ReserveRoom')->middleware('auth');

// start admin view rooms
Route::get('/rooms-admin', 'manage@listrooms')->middleware('auth');

Route::get('manage-room/{id}/{option}', 'manage@ManageRoom');

// end admin view rooms

// start admin add admin
Route::get('/addadmin-admin', function () {
  if(Auth::user()->type==0)
      return redirect('index');
    return view('dashbord-admin');
})->middleware('auth');
Route::post('addadmin', 'manage@AddAdmin')->middleware('auth');
// end admin add admin


// start myaccount

/*
Route::get('/myaccount.html', function(){
  return view('myaccount');

});
*/
Route::get('/myaccount.html', 'manage@fetchAccount')->middleware('auth');;


Route::post('edit-myaccount', 'manage@editAccount')->middleware('auth');;
Route::get('/cancelbook/{id}', 'manage@cancelBook')->middleware('auth');;
//end my account
