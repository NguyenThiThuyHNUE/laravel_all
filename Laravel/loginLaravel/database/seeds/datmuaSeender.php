<?php

use Illuminate\Database\Seeder;

class datmuaSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hoadon=\App\Hoadon::find(1);
        $hoadon->hangs()->attach(1);
        $hoadon->hangs()->attach(2);

        $hoadon=\App\Hoadon::find(2);
        $hoadon->hangs()->attach(1);
    }
}
