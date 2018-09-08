<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateTableKepalakeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepalakeluarga', function (Blueprint $table) {
             $table->integer('id_warga')->unsigned()->primary('id_warga');
            $table->integer('id_kelurahan');
            $table->string('nokk')->unique();
            $table->string('alamat');
            $table->string('lingkungan');
            $table->integer('id_user');
            $table->enum('isactive', ['Y', 'N']);
            
            $table->timestamps();

            // $table->foreign('id_warga')
            //       ->references('id_warga')->on('warga')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kepalakeluarga');
    }
}
