<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create so0mething great!
|
*/

use App\User;

//start guest routes

Route::get('/', 'UserController@welcomePage');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'UserController@welcomePage');

Route::get('/login.html', 'Auth\LoginController@loginPage');

Route::get('/sign-up', 'Auth\RegisterController@RegisterPage');


//end guest routes


//start client routes

Route::get('/rooms', 'UserController@roomPage');

Route::get('/services', 'UserController@servicesPage');


Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/myaccount.html', 'UserController@fetchAccount')->middleware('auth');

Route::post('edit-myaccount', 'UserController@editAccount')->middleware('auth');

Route::get('/listusers-admin', 'UserController@listusers')->middleware('auth');


// eidt user
Route::get('editview/{id}', "UserController@Edit")->middleware('auth');
Route::post('editview/{id}', "UserController@Edit")->middleware('auth');

// delete users

Route::get('listusers/{id}','UserController@deleteUser')->middleware('auth');

Route::get('/addadmin-admin','UserController@listAdmins')->middleware('auth');

Route::post('addadmin', 'UserController@AddAdmin')->middleware('auth');

Route::get('/contact','userController@contactPage');
// end user routing




// start rooms and reservation Routes

Route::post('reserveroom', 'ReservationController@ReserveRoom')->middleware('auth');

Route::get('/rooms-admin', 'RoomController@listrooms')->middleware('auth');

Route::get('manage-room/{id}/{option}', 'RoomController@ManageRoom');

Route::get('/cancelbook/{id}', 'ReservationController@cancelBook')->middleware('auth');

Route::get('/booking', 'RoomController@booking');

// end rooms and reservation Routes


// start feedbacks Routes

Route::get('addfeedback', 'FeedbackController@AddFeedback')->middleware('auth');
Route::post('addfeedback', 'FeedbackController@AddFeedback')->middleware('auth');
Route::get('feedbacks-admin', 'FeedbackController@dashbordfeedbacks')->middleware('auth');

Route::get('/readMessage/{id}', 'FeedbackController@read')->middleware('auth');

// end feedbacks routes
