<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleNavigationOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roleNavigationOption', function (Blueprint $table) {
            $table->integer('idRole')->unsigned();
            $table->integer('idNavigationOption')->unsigned();
            $table->integer('orderNumber');
            $table->boolean('recordStatus');
            $table->foreign('idRole')->references('idRole')->on('role');
            $table->foreign('idNavigationOption')->references('idNavigationOption')->on('navigationOption');
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
        Schema::dropIfExists('roleNavigationOption');
    }
}
