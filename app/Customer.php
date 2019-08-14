<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['nama_lengkap','no_telp','alamat','avatar'];
    protected $primaryKey = 'id';
    public function ride()
    {
        return $this->belongsToMany('App\Hobi','ride_customer','id_customer','id_ride')->whitTimeStamps();
    }
}
