<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class EventController extends Controller
{
    public function index(){
       return view("/login");
    }
    public function login(Request $request){
        $login = $request["login"];
        $password = $request["password"];
        $password = md5($password);
        $result = User::select('name')->where('name',$login)->where('password',$password)->get();
        if($result->count() > 0){
            setcookie("auth",true, time()+4600, "/");
            return redirect('/');
        }else{
            return redirect('/login')->with('message', "you don't are bina");
        }

    }
    public function logout(){
        unset($_COOKIE['auth']);
        setcookie('auth', false, -1, '/');
        return redirect('/');
    }
    public function about(){
        return view("/about");
    }
}
