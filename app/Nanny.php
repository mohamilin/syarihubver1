<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nanny extends Model
{
    protected $table = 'nannies';
    protected $fillable = ['id_nanny','nama_lengkap','tempat_lahir','tanggal_lahir','no_ktp','no_whatsapp','alamat_ktp','alamat_domisili','pendidikan','khatam_AlQuran',
                            'hobi','jml_anak','pengalaman','penjelasan1','penjelasan2','penjelasan3','foto_ktp','foto_diri','foto_ijazah'];
    protected $primaryKey = 'id';
    public function getfoto_ktp()
    {
        if($this->foto_ktp){
            return asset('img/default.jpg');
        }

        return asset('/public/img'.$this->foto_ktp);
    }
}
