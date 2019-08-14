<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $table = 'rides';
    protected $fillable = ['id_pengendara','kota','alasan','darimana',
                            'jam_kerja','nama_lengkap','tanggal_lahir','umur','alamat_domisili',
                            'alamat_email','no_hp','no_ktp','no_sim','tgl_berlaku_sim','no_plat',
                            'tgl_berlaku_plat','pengalaman','medsos','bisa_whatsapp','aktivitas','penghasilan_perbulan'];

    protected $primaryKey ='id';
    public function customer()
    {
        return $this->belongsToMany('App\Customer','ride_customer','id_ride','id_customer');
    }

}
