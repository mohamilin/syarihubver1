<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNanniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nannies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_nanny');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('no_ktp');
            $table->string('no_whatsapp');
            $table->string('alamat_ktp');
            $table->string('alamat_domisili');
            $table->string('pendidikan');
            $table->string('khatam_AlQuran');
            $table->string('hobi');
            $table->string('jml_anak');
            $table->string('pengalaman');
            $table->string('penjelasan1');
            $table->string('penjelasan2');
            $table->string('penjelasan3');
            $table->string('foto_ktp');
            $table->string('foto_diri');
            $table->string('foto_ijazah');
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
        Schema::dropIfExists('nannies');
    }
}
