<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->foreignId('countries_id')->references('id')->on('countries');
            $table->string('customers');
            $table->date('day_of_birth');
            $table->integer('sex');
            $table->integer('identity_card');
            $table->string('bank_account');
            $table->string('bank');
            $table->string('address');
            $table->string('phone_number');
            $table->string('note');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('customers');
    }
}
