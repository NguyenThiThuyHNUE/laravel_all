<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Hoadon extends Model
{
    public function khachhangs(){
        return $this->hasMany('App\Khachang');
    }

    public function nhanviens(){
        return $this->hasMany('App\Nhanvien');
    }

}
