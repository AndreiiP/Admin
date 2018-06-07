<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            //создание поля для связывания с таблицей user
            $table->integer('hotel_id')->unsigned()->default(1);
            //создание внешнего ключа для поля 'user_id', который связан с полем id таблицы 'users'
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->string('price',150)->default('1');
            $table->string('type',150);
            $table->string('room',150);
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
        Schema::dropIfExists('rooms');
    }
}
