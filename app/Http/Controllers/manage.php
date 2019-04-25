<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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

        public function AddAdmin(Request $request)
        {
            $new = new User();
            $new->name = $request['name'];
            $new->email = $request['email'];
            $new->phone_num = $request['phone_num'];
            $new->address = $request['address'];
            $new->password = Hash::make($request['address']);
            $new->type = $request['type'];
            $new->save();
            return redirect('/addadmin-admin');
        }
        
        
        public function dashbordfeedbacks() {
          $feedbacks = Feedback::all();
          return view('dashbord-feedbacks', compact('feedbacks'));
        }

        public function listusers()
        {
          $user = User::select('*')->get();
         
          return view('dashbord-listusers', compact('user'));

        }


}
