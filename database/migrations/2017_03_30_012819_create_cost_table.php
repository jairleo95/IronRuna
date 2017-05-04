<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost', function (Blueprint $table) {
            $table->increments('idCost');
            $table->integer('idEvent')->unsigned();
            $table->string('name',100);
            $table->double('value',10,2);
            $table->boolean('recordStatus');
            $table->boolean('costType');
            $table->integer('maxQuantity');
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
        Schema::dropIfExists('cost');
    }
}
