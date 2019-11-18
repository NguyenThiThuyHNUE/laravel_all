<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    public function hoadon(){
        return $this->belongsTo("App\Hoadon");
    }
}
