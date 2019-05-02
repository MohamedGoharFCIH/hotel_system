<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Feedback;
use App\User;
use App\Reservation;
use App\Room;
use App\Bill;
use DB;
use Auth;
use Validator;

class roomController extends Controller
{
  public function booking(Request $request) {
      if (Auth::guest())
          return redirect('login');
      elseif(Auth::user()->type==1)
          return redirect('home');
      return view('booking');
  }



  public function ManageRoom($id, $option)
  {
      $room = Room::find($id);
      $room->room_available = $option;
      Reservation::where('num_rooms', $room->room_num)->update(array('payment_method'=>'canceled by admin'));
      $room->save();
      return redirect('rooms-admin');
  }


   public function listrooms(){
    if(Auth::user()->type==0)
        return redirect('index');
      $room = Room::select('*')->get();
      return view('dashbord-rooms', compact('room'));
  }





}
