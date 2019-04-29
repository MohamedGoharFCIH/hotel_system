<?php

namespace App\Http\Controllers;

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

class manage extends Controller
{
        public function AddFeedback(Request $request)
        {
          if(Auth::user()->type==0)
              return redirect('index');
          if($request->isMethod('post')){
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


        public function AddAdmin(Request $request)
        {
            if(Auth::user()->type==0)
              return redirect('index');
            $new = new User();
            $new->name = $request['name'];
            $new->email = $request['email'];
            $new->phone_num = $request['phone_num'];
            $new->address = $request['address'];
            $new->password = Hash::make($request['password']);
            $new->type = $request['type'];
            $new->save();
            return redirect('/addadmin-admin');
        }


        public function dashbordfeedbacks() {
          if(Auth::user()->type==0)
              return redirect('home');
          $feedbacks = Feedback::all();
          return view('dashbord-feedbacks', compact('feedbacks'));
        }

        public function listusers()
        {
          if(Auth::user()->type==0)
              return redirect('index');
          $user = User::select('*')->get();

          return view('dashbord-listusers', compact('user'));
        }


        public function ReserveRoom(Request $request)
        {
          if(Auth::user()->type==1)
              return redirect('home');
          if($request->isMethod('post')){

            $reservation = new Reservation();
            $num_ppl = $request->input('book-adults-checker');
            $reservation->num_ppl = (int)$num_ppl;
            $num_ppl = (int)$num_ppl;
            $reservation->num_rooms = DB::table('rooms')
                    ->where('room_available', '=', 1)
                    ->Where('num_people', $num_ppl)
                    ->value('room_num');

            if($reservation->num_rooms == null){
              if($num_ppl == 1){
                echo "NO Single Rooms Avaliable ";

              }
              elseif($num_ppl == 2){
                echo "NO Double Rooms Avaliable ";
              }
              else{
                echo "NO Trible Rooms Avaliable ";
              }

            }
            else
            {
              Room::where('room_num', $reservation->num_rooms)->update(array('room_available'=>2));


              $reservation->user_id = Auth::User()->id;


              $reservation->service_type =   $request['serve-full'];
              $reservation->payment_method = $request['payment_method'];





              if($request['book-checkin'] >= date('Y-m-d')){
                if (date($request['book-checkout']) > date($request['book-checkin']))
                {

                $reservation->check_in =$request['book-checkin'];
                $reservation->check_out =$request['book-checkout'];
                $days = strtotime($reservation->check_in) - strtotime($reservation->check_out);
                $days = abs(round($days / 86400));
                //echo $days;
                if($num_ppl == 1)
                {
                  $reservation->total_price = 150 * $days;
                }
                elseif($num_ppl ==2){
                  $reservation->total_price = 225 * $days;
                }
                else{
                  $reservation->total_price = 300 * $days;
                }



                $reservation->save();
                $this->createBill();
                return view('bill', compact('reservation'));

              }
              else {

                #DB::table('Rooms')->where('room_num', $finished)->update(array('room_available'=>0));
                echo "Error Check The Validity of Check in & out Date.....";
              }
          }
            else {

              #DB::table('Rooms')->where('room_num', $finished)->update(array('room_available'=>0));
              echo "Error Check The Validity of Check in & out Date.....";
            }

          }
        }

      }

        public function createBill()
        {
          $bill = new Bill();
          $bill->user_id = Auth::User()->id;
          $bill->bill_date = date('Y-m-d');
          $bill->save();


        }
        public function read($id)
          {
            if(Auth::user()->type==0)
                return redirect('index');
            $feed = Feedback::find($id);
            $mess=$feed->message;
            return view('readMessage', compact('mess'));
          }


          public function Edit(Request $request , $id)
          {
            if(Auth::user()->type==0)
                return redirect('index');
            if ($request->isMethod('post')) {
              $user=User::find($id);
              $user->name=$request->input('name');
              $user->email=$request->input('email');
              $user->address=$request->input('address');
              $user->phone_num=$request->input('phone_num');
              $user->save();
                return redirect("listusers-admin");
            }else {
             $user=User::find($id);
              $arr = array('user' => $user);
              return view('editview',$arr);

          }
        }
        public function editAccount(Request $request)
        {
          $id = Auth::user()->id;
          $user=User::find($id);
          $user->name =  $request->input('edit-name');
          $user->email = $request->input('edit-email');
          if(!empty($request['edit-password']))
            $user->password = Hash::make($request['edit-password']);

          else
            $user->password = Auth::user()->password;

          $user->address = $request->input('edit-address');
          $user->phone_num = $request->input('edit-phone_num');

          $save = $user->save();
          if($save)
          {
            echo " Data Edited Successfully .... you will redirect after 3 second";
            header( "refresh:3 ;url =myaccount.html" );
          }
          else {
            echo " Error in  Edit Data Try again !.... you will redirect after 3 second ";
            header( "refresh:3 ;url =myaccount.html" );
          }

        }



        public function fetchAccount(Request $request)
        {
          $user_id = Auth::user()->id;
          $hist = Reservation::select('*')->where('user_id', '=', $user_id)->get();
          return view('myaccount', compact('hist'));
        }


        public function cancelBook($id)
        {
          if(Auth::user()->type==1)
              return redirect('home');
           $room_num = DB::table('reservations')->where('id', $id)->value('num_rooms');
           $a = Reservation::where('id', $id)->update(array('payment_method'=>'canceled'));
           $b = Room::where('room_num', $room_num)->update(array('room_available'=>1));
           if($a && $b){
             echo " canceled Successfully.... you will redirect after 3 second ";
             header( "refresh:3 ;url=/myaccount.html");
         }
        }




}
