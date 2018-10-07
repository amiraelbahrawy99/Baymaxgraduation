<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id')->unsigned()->nullable(false);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('medicineName');
            $table->enum('locationNum',['1','2','3','4','5','6']);
            //$table->Integer('durationInMonths');
            //$table->Integer('durationInWeeks');
            $table->Integer('durationInDays');
            $table->Integer('timesNum');
            $table->Integer('numOfDose');
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
        Schema::dropIfExists('medicines');
    }
}
