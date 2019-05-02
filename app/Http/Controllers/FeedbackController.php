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
class FeedbackController extends Controller
{

  public function AddFeedback(Request $request)
  {
    if(Auth::user()->type==1)
        return redirect('home');
    if($request->isMethod('post')){

      $this->validate($request, [
        'contact-subject' => 'required|max:25',
        'contact-message' => 'required|min:15',
  ]);
      $feedback = new Feedback();
      $feedback->Subject = $request->input('contact-subject');
      $feedback->message = $request->input('contact-message');
      $feedback->user_id = Auth::User()->id;
      $feedback->message_date = date('Y-m-d H:i:s');
      $feedback->save();
      return redirect('/contact');
    }
    return view('contact');
  }

  public function dashbordfeedbacks() {
    if(Auth::user()->type==0)
        return redirect('home');
    $feedbacks = Feedback::all();
    return view('dashbord-feedbacks', compact('feedbacks'));
  }




  public function read($id)
    {
      if(Auth::user()->type==0)
          return redirect('index');
      $feed = Feedback::find($id);
      $mess=$feed->message;
      return view('readMessage', compact('mess'));
    }




}
