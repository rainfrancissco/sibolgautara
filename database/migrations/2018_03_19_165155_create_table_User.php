<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblUser', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('username', 10) -> unique();
            $table->string('password', 50);
            $table->string('fullname', 20);
            $table->string('nohp', 12);
            $table->enum('status', ['A', 'B']); // A=SuperAdmin B=Admin
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
        Schema::drop('tblUser');
    }
}
