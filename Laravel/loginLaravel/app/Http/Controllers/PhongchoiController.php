<?php

namespace App\Http\Controllers;

use App\Hang;
use Illuminate\Http\Request;

class PhongchoiController extends Controller
{
    public function getAll(){
        $phongchois = Hang::all();
        return view('phongchoi.listphongchoi',compact('phongchois'));
    }
}
