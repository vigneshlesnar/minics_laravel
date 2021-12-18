<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
      $user = User::where(['email'=>$req->email])->first();
      // return $user;
      if(!$user || !Hash::check($req->password,$user->password)){
        return 'Email or Password is incorrect';
      }
      else {
        $req->session()->put('user',$user);
        return redirect('/products');
      }
    }
}
