<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FUser_name');
            $table->string('LUser_name');
            //$table->string('name');
            $table->string('User_Email')->unique();
            $table->string('User_Mobile');
            $table->string('User_Password');
            $table->integer('User_Age')->unsigned();
            $table->text('User_Address');
            $table->boolean('is_doctor')->nullable();
            $table->unsignedInteger('doctor_type_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('doctor_type_id')
                ->references('id')
                ->on('doctor_types')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
