<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = ['id_message','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','alamat_ktp','alamat_tinggal','no_ktp','pendidikan','hp_android','no_whatsapp','keahlian','status','pengalaman','darimana','alasan','jam_kerja'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
