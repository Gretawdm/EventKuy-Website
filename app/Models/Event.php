<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $table = 'detail_event_tabel';

    protected $fillable = [
        'poster',
        'nama_event',
        'deskripsi_event',
        'contact_person',
        'event_organizer',
        'event_owner',
        'tanggal_event',
        'no_rek',
        'nama_rekening',
        'alamat_event',
        'tanggal_pendaftaran_booth_tenant',
        'booth',
        'denah'
    ];

    protected $dates = ['tanggal_event', 'tanggal_pendaftaran_booth_tenant'];

}