<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('idEvent');
            $table->integer('idEventType')->unsigned();
            $table->string('tittle',200);
            $table->string('shortTittle',50);
            $table->date('initDate');
            $table->date('finishDate');
            $table->string('emailContact',100);
            $table->string('phoneContact',100);
            $table->string('description',500);
            $table->integer('quota');
            $table->string('aditionalData',300);
            $table->date('postEvent');
            $table->boolean('recordStatus');
            $table->char('eventStatus',1);
            $table->foreign('idEventType')->references('idEventType')->on('eventType');
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
        Schema::dropIfExists('event');
    }
}
