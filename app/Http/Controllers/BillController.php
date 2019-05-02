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

class BillController extends Controller
{
  public function createBill()
  {
    $bill = new Bill();
    $bill->user_id = Auth::User()->id;
    $bill->bill_date = date('Y-m-d');
    $bill->save();
  }
}
