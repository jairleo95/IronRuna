<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userData', function (Blueprint $table) {
            $table->increments('idUserData');
            $table->integer('idRole')->unsigned();
            $table->string('userName',50)->unique();
            $table->string('userPassword',200);
            $table->string('fullName',50);
            $table->string('lastName',50);
            $table->string('gender',1);
            $table->string('documentType',1);
            $table->string('documentNumber',10);
            $table->string('cellphone',20);
            $table->date('birthdate');
            $table->date('expirationDate');
            $table->boolean('confirmationStatus');
            $table->boolean('recordStatus');
            $table->string('confirmationToken',100);

           $table->rememberToken();
            $table->timestamps();
            $table->foreign('idRole')->references('idRole')->on('role');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userData');
    }
}
