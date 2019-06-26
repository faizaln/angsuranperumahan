<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $table = 'angsuran';
    protected $fillable = ['pelanggan_id','tgl_angsuran','besar_angsuran'];

    public function pelanggan()
    {
        return $this->belongsTO(Pelanggan::class);
    }
}
