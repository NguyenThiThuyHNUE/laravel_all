<?php

use Illuminate\Database\Seeder;

class hoadonSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hoadon= new \App\Hoadon();
        $hoadon->ngaygiaodich='2019-10-19';
        $hoadon->tongtien='220';
        $hoadon->makhach_id='1';
        $hoadon->mannv_id='1';
        $hoadon->save();

    }
}
