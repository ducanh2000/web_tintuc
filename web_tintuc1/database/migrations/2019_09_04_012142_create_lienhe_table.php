<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLienheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienhe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('phone');
            $table->char('email');
            $table->text('content');
            $table->bigInteger('id_khachhang')->unsigned()->nullable();
            $table->foreign('id_khachhang')
                  ->references('id')
                  ->on('khachhang')
                  ->onDelete('set null');
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
        Schema::dropIfExists('lienhe');
    }
}
