<?php

use Illuminate\Database\Seeder;

class khachhangSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $khachhang= new \App\Khachang();
        $khachhang->tenkhach='Phuong';
        $khachhang->diachi='Ha Noi';
        $khachhang->sdt='012234';
        $khachhang->ngaysinh='1998-11-20';
        $khachhang->save();

        $khachhang= new \App\Khachang();
        $khachhang->tenkhach='Nam';
        $khachhang->diachi='Ha Tay';
        $khachhang->sdt='07777';
        $khachhang->ngaysinh='1998-1-28';
        $khachhang->save();
    }
}
