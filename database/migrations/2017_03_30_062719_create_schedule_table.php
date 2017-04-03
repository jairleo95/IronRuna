<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('idSchedule');
            $table->integer('idEvent')->unsigned();
            $table->date('initDate');
            $table->date('finishDate');
            $table->string('description',300);
            $table->boolean('recordStatus');
            $table->foreign('idEvent')->references('idEvent')->on('event');
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
        Schema::dropIfExists('schedule');
    }
}
