<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDataPayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userDataPay', function (Blueprint $table) {
            $table->integer('idUserData')->unsigned();
            $table->integer('idPay')->unsigned();
            $table->integer('idCost')->unsigned();
            $table->boolean('payByCurrentUserStatus');
            $table->boolean('recordStatus');
            
            $table->foreign('idUserData')->references('idUserData')->on('userData');
            $table->foreign('idPay')->references('idPay')->on('pay');
            $table->foreign('idCost')->references('idCost')->on('cost');
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
        Schema::dropIfExists('userDataPay');
    }
}
