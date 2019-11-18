<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hangs', function (Blueprint $table) {
            $table->bigIncrements('tenphong');
            $table->string('dokho');
            $table->string('theloai');
            $table->date('ngaychoi');
            $table->string('cachoi');
            $table->string('soluong');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hangs');
    }
}
