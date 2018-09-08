<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->increments('id_warga');
            $table->integer('id_kepalakeluarga');
            // $table->integer('id_kelurahan')->unique();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->integer('id_hubungan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('id_kawin');
            $table->integer('id_agama');
            $table->integer('id_lembaga');
            $table->integer('id_wni');
            $table->integer('id_suku');
            $table->integer('id_pendidikan');
            $table->integer('id_bacatulis');
            $table->integer('id_matapencarian');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('akta_lahir');
            $table->integer('id_ektp');
            $table->integer('id_kb');
            $table->integer('id_kemiskinan');
            $table->integer('id_rumah');
            $table->integer('id_pbb');
            $table->integer('id_penghasilan');
            $table->integer('id_lahan');
            $table->integer('id_sumberair');
            $table->integer('id_bantuan');
            $table->integer('id_berobat');
            $table->integer('id_penerangan');
            $table->integer('id_memasak');
            $table->string('ternak');
            $table->string('kendaraan');
            $table->string('kelainan');
            $table->string('usaha');
            $table->integer('id_bangunan');
            $table->integer('tanggungan');
            $table->integer('id_penduduk');
            $table->integer('id_user');
            $table->enum('isactive', ['Y', 'N']);
            $table->softDeletes();
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
        Schema::drop('warga');
    }
}
