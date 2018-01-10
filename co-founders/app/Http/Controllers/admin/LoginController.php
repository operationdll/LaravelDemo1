<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function index(){
        return View('admin.login');
    }

    public function login(){
        $input = Input::all();
        $client = DB::table('clients')->where([
            ['username', '=', $input['username']],
            ['password', '=', $input['password']],
        ])->first();
        if($client!=null){
            session(['client' => $client]);
        }
        return View('welcome')->with('client',$client);
    }

    public function register(){
        $input = Input::all();
        DB::table('clients')->insert([
            'username'=>$input['username'],
            'email'=>$input['email'],
            'password'=>$input['password'],
        ]);
        echo '<script type="text/javascript">';
        echo 'alert("Registration success!");';
        echo '</script>';
        return View('welcome');
    }

    public function signout(){
        session(['client' => null]);
        return View('welcome');
    }

    //forgot password
    public function password(){
        if(Input::all()){
            echo 'change password then send email';
        }else{
            return View('admin.password');
        }
    }

}
