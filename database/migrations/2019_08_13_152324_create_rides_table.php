<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pengendara');
            $table->string('kota');
            $table->string('alasan');
            $table->string('darimana');
            $table->string('jam_kerja');
            $table->string('nama_lengkap');
            $table->string('tanggal_lahir');
            $table->string('umur');
            $table->string('alamat_domisili');
            $table->string('alamat_email');
            $table->string('no_hp');
            $table->string('no_ktp');
            $table->string('no_sim');
            $table->string('tgl_berlaku_sim');
            $table->string('no_plat');
            $table->string('tgl_berlaku_plat');
            $table->string('pengalaman');
            $table->string('medsos');
            $table->string('bisa_whatsapp');
            $table->string('aktivitas');
            $table->string('penghasilan_perbulan');
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rides');
    }
}
