<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hang extends Model
{
    public function hoadons(){
        return $this->belongsToMany('App\Hoadon','App\Datmua');
    }
}
