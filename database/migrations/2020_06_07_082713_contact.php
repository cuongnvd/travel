<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('contact', function (Blueprint $table) {
         $table->bigIncrements('id');   
            $table->timestamps();
            
            $table->string('name');
              $table->string('email');
            $table->integer('phone_number');
            $table->string('title');
          
            $table->integer('content');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('contact');
    }
}
