<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'mentors';
    protected $fillable = ['id_mentor','nama_lengkap','no_whatsapp','tanggal_lahir','alamat',
                            'pendidikan','khatam_AlQuran','jml_juz','pengalaman','penjelasan'];
    protected $primaryKey ='id';
    public $timestamps = false;
}
