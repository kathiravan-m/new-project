<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Jobs\SendEmailJob;

class UserController extends Controller
{ 
  public function __construct(User $user)
  {
      $this->user=$user;
  }
    public function index()
    {
        return view('register');
    }
    public function indexLogin()
    {
        return view('login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }

  public function insertUser(Request $request){
    
    $request->validate([
    'name' =>'required',
    'email'=>'required | email |unique:users',
    'password'=>'required | max:10 | min:6',
    'confirmpassword'=>'required | same:password',
    'phonenumber' =>'required | max:10',
    ]);
    $data= $this->user->create([
        'name'=>$request->name,
        'email' => $request->email,
        'password' => $request->password,
        'confirmpassword' => $request->confirmpassword,
        'phonenumber' => $request->phonenumber,
    ]);
        $detail = $this->user->where('email', $request->email)->first();
        dispatch(new SendEmailJob($detail));
    return redirect('/dashboard');
  }

  public function insertLoginUser(Request $request){
        $request->validate([
            'email' => 'required ',
            'password' => 'required',
        ]);
        $login = $this->user->where('email', $request->email)->where('password', $request->password)->first();
        if (isset($login)) {
            Session::put('user_id', $login->id);
            return redirect('dashboard')->with('success', 'Logined successfully');
        } else {
            return back()->with('error', 'invalid user');
        }
    }

  
}
