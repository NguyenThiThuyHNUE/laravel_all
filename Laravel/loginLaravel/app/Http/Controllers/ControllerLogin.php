<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLogin extends Controller
{
    public function login(){
        return view('login');
    }

    public function CheckLogin(Request $request){
        if($request->name == 'admin' && $request->pass == 'admin' ){
            return view('chaomung');
        }else{
            return view('loi');
        }
    }
}
