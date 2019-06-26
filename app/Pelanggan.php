<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = ['nama','no_telp','alamat','jenis_angsuran','uang_muka','harga','tipe'];

    public function angsuran()
    {
        return $this->hasMany(Angsuran::class);
    }
}
