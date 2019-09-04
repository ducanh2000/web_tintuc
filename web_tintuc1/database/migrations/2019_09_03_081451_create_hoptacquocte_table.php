<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoptacquocteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoptacquocte', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img');
            $table->datetime('datetime');
            $table->string('title');
            $table->text('summay');

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
        Schema::dropIfExists('hoptacquocte');
    }
}
