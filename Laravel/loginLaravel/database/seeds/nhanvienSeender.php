<?php

use Illuminate\Database\Seeder;

class nhanvienSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nhanvien= new \App\Nhanvien();
        $nhanvien->tennv='Hanh';
        $nhanvien->gioitinh='Nu';
        $nhanvien->sdt='000000';
        $nhanvien->diachi='1990-09-28';
        $nhanvien->save();

        $nhanvien= new \App\Nhanvien();
        $nhanvien->tennv='Trang';
        $nhanvien->gioitinh='Nu';
        $nhanvien->sdt='00004400';
        $nhanvien->diachi='1967-12-21';
        $nhanvien->save();
    }
}
