<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
   protected $table = 'data_tabel';

    protected $fillable = [
        'pegawai_nama',
        'pegawai_jabatan',
        'pegawai_umur',
        'pegawai_alamat',
        
    ];
}