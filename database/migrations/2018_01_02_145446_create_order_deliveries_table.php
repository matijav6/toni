<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_deliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('buyer')->nullable();
            $table->text('address')->nullable();
            $table->integer('order_id')->unsigned();

            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_deliveries');
    }
}
