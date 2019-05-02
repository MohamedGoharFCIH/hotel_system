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

class userController extends Controller
{
  public function roomPage(Request $request) {
      if (Auth::guest())
          return redirect('login');
        elseif(Auth::user()->type==1)
          return redirect('home');
      return view('rooms');
  }


  public function servicesPage(Request $request) {
      if (Auth::guest())
          return redirect('login');
      elseif(Auth::user()->type==1)
            return redirect('home');
      return view('services');
  }

  public function welcomePage(Request $request) {
      return view('welcome');
  }


  public function fetchAccount(Request $request)
  {
    $user_id = Auth::user()->id;
    $hist = Reservation::select('*')->where('user_id', '=', $user_id)->get();
    return view('myaccount', compact('hist'));
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

  public function listusers()
  {
    if(Auth::user()->type==0)
        return redirect('index');
    $user = User::select('*')->where('type', '=', 0)->get();
    return view('dashbord-listusers', compact('user'));
  }

  public function Edit(Request $request , $id)
  {
    if(Auth::user()->type==0)
        return redirect('index');
    if ($request->isMethod('post')) {
      $this->validate($request, [
          'name' => 'required|string|min:5|max:15',
          'email' => 'required|string|email|max:255',
          'phone_num' =>'required|string|max:11',
          'address' =>'required|string|min:3',
      ]);
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

  public function listAdmins(Request $request) {
    if(Auth::user()->type==0)
        return redirect('index');
      return view('dashbord-admin');
  }



  public function deleteUser($id)
  {
     if(Auth::user()->type==0)
        return redirect('index');
      $user=User::find($id);
      $user->delete();
      return redirect('listusers-admin');
  }


  public function contactPage(Request $request) {
      if (Auth::guest())
          return redirect('login');
      elseif(Auth::user()->type==1)
          return redirect('home');
      return view('contact');
  }

}
