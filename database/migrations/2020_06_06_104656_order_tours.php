<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tours', function (Blueprint $table) {
         $table->bigIncrements('id');   
            $table->timestamps();
            
            $table->string('names');
            $table->integer('phone_number');
            $table->string('address');
            $table->string('email');
            $table->integer('seats_of_number');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_tours');
    }
}
