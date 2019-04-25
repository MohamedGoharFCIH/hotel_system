<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use App\User;
use Auth;

class manage extends Controller
{
        public function AddFeedback(Request $request)
        {
          if($request->isMethod('post')){
            $feedback = new Feedback();
            $feedback->Subject = $request->input('contact-subject');
            $feedback->message = $request->input('contact-message');
            $feedback->user_id = Auth::User()->id;
            $feedback->message_date = date('Y-m-d H:i:s');
            $feedback->save();
            return redirect('/home');


          }
          return view('contact');

        }
        public function dashbordfeedbacks() {
          $feedbacks = Feedback::all();
          return view('dashbord-feedbacks', compact('feedbacks'));
        }

        public function read(Request $request,$id) {
          $feed = Feedback::find($id);
          $mess = $feed->message;
          return view('viewmessage', compact('mess'));
        }

        public function listusers()
        {
          $user = User::select('*')->where('type', '=', 0)->get();

          return view('listusers', compact('user'));

        }
        public function Editusers(Request $request,$id)
        {
            if($request->isMethod('post')){
                $user=User::find($id);
                // $user->id=$request->input('id');
                $user->name=$request->input('name');
                $user->email=$request->input('email');
                $user->address=$request->input('address');
                $user->phone_num=$request->input('phone_num');
                $user->save();
              return redirect('listusers');
            }else {
              // code...
              $user =User::find($id);
              $arr = array('user' => $user);
              return view("editview",$arr);
            }

        }

}
