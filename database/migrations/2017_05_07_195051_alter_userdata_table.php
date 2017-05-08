<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userData', function (Blueprint $table) {
            //
 /*aditional data*/
   $table->integer('idCategory')->unsigned();
   $table->integer('idTeam')->unsigned(); 
            $table->string('phone',20);
          
            $table->string('observation',300);
            $table->string('emergencyPhone',20); 

                 

                  $table->foreign('idCategory')->references('idCategory')->on('category');
               $table->foreign('idTeam')->references('idTeam')->on('team');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userData', function (Blueprint $table) {
            //
        });
    }
}
