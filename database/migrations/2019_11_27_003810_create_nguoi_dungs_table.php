<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoiDungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dungs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('name')->nullalbe();

            $table->string('password');
            $table->string('email');
            $table->date('ngay_sinh');
            $table->integer('phone');
            $table->text('dia_chi');
            $table->integer('trang_thai');
            $table->dateTime('create');

            $table->integer('vai_tro')->unsigned();

            $table->foreign('vai_tro')
                    ->references('id')
                    ->on('vai_tros')
                    ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_dungs');
    }
}
