<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payAccess', function (Blueprint $table) {
            $table->increments('idPayAccess');
            $table->integer('idPaymentsCustomUrl')->unsigned();
            $table->string('apiKey',32);
            $table->string('apiLogin');
            $table->string('merchantId');
            $table->char('lenguage');
            $table->boolean('isTest');
            $table->boolean('recordStatus');
            $table->foreign('idPaymentsCustomUrl')->references('idNavigationOption')->on('navigationOption');
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
        Schema::dropIfExists('payAccess');
    }
}
