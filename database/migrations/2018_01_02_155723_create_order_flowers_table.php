<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_flowers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('flower_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->integer('quantity')->nullable();
            $table->integer('order_id')->unsigned();

            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('flower_id')->references('id')->on('flowers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_flowers');
    }
}
