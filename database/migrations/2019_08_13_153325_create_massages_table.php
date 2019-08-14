<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMassagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_message');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat_ktp');
            $table->string('alamat_tinggal');
            $table->string('no_ktp');
            $table->string('pendidikan');
            $table->string('hp_android');
            $table->string('no_whatsapp');
            $table->string('keahlian');
            $table->string('status');
            $table->string('pengalaman');
            $table->string('darimana');
            $table->string('alasan');
            $table->string('jam_kerja');
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
        Schema::dropIfExists('massages');
    }
}
