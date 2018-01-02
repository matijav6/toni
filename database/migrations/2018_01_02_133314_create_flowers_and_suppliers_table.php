<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlowersAndSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flowers_and_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('flower_id')->unsigned();
            $table->integer('supplier_id')->unsigned();

            $table->foreign('flower_id')->references('id')->on('flowers')->onUpdate('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onUpdate('cascade');;
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flowers_and_suppliers');
    }
}
