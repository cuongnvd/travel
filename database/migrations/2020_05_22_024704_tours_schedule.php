<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ToursSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours_schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->foreignId('types_of_tour_id')->references('id')->on('types_of_tour');
            $table->string('name_of_tour');
            $table->decimal('cost');
            $table->date('the_start_day');
            $table->date('the_end_day');
            $table->integer('day_of_number');
            $table->integer('number_of_night');
            $table->integer('seats_of_number');
            $table->string('content');
            $table->string('images');
            $table->string('type_in_out');
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
        Schema::dropIfExists('tours_schedule');
    }
}
