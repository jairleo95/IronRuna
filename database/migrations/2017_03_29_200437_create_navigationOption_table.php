<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigationOption', function (Blueprint $table) {
            $table->increments('idNavigationOption');
            $table->integer('idParentOption')->unsigned();
            $table->string('name',50);
            $table->string('url',100);
            $table->string('viewName',50);
            $table->boolean('recordStatus');
                $table->foreign('idParentOption')->references('idNavigationOption')->on('navigationOption');
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
        Schema::dropIfExists('navigationOption');
    }
}
