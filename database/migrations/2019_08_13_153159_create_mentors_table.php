<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_mentor');
            $table->string('nama_lengkap');
            $table->string('no_whatsapp');
            $table->string('tanggal_lahir');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('khatam_AlQuran');
            $table->string('jml_juz');
            $table->string('pengalaman');
            $table->string('penjelasan');
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
        Schema::dropIfExists('mentors');
    }
}
