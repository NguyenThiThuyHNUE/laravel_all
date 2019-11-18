<?php

namespace App\Http\Controllers;

use App\Hoadon;
use Illuminate\Http\Request;

class HoadonController extends Controller
{
    public function getAll(){
        $hoadons = Hoadon::all();
        return view('hoadon.listhoadon',compact('hoadons'));
    }
}
