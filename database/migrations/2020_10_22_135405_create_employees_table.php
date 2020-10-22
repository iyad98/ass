<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('officeCode')->unsigned();
            $table->integer('reportsTo')->unsigned();
            $table->string('LastName' , 255);
            $table->string('FirstName' , 255);
            $table->string('Extension' , 255);
            $table->string('Email' , 255);
            $table->string('JobTitle' , 100);
            $table->timestamps();

            $table->foreign('officeCode')->references('id')->on('offices')->onDelete('cascade');
            $table->foreign('reportsTo')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
