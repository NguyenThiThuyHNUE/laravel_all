<?php

use Illuminate\Database\Seeder;

class hangSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hang= new \App\Hang();
        $hang->tenhang='Ao phong';
        $hang->gianhap='220';
        $hang->ngaynhap='2019-11-2';
        $hang->giaban='300';
        $hang->save();

        $hang= new \App\Hang();
        $hang->tenhang='Quan bo';
        $hang->gianhap='120';
        $hang->ngaynhap='2019-09-21';
        $hang->giaban='200';
        $hang->save();
    }
}
