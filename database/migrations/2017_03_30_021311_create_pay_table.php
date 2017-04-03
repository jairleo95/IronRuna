<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay', function (Blueprint $table) {
            $table->increments('idPay');
            $table->integer('idPayAccess')->unsigned();
            $table->double('totalCost',10,2);
            $table->boolean('payStatatus');
            $table->boolean('recordStatus');
            $table->foreign('idPayAccess')->references('idPayAccess')->on('payAccess');
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
        Schema::dropIfExists('pay');
    }
}
