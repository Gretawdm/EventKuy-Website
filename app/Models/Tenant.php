<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $primaryKey = 'id_order';
    protected $table = 'orders';

    protected $fillable = [
        'status_order',
        'nomor_booth',
        'harga_bayar',
        'img_bukti_transfer',
        'tgl_order',
        'tgl_diterima',
        'tgl_ditolak',
        'tgl_verifikasi',
        'id',
        'id_booth'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function booth()
    {
        return $this->belongsTo(Booth::class, 'id_booth');
    }

}