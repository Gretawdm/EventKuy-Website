<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailEventTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_event_tabel')->insert([ 
            'poster' => 'poster.png',
            'nama_event' => 'ColdPlay',
            'ktp' => 'ktp.jpg',
            'deskripsi_event' => 'lorem ipsum dolor sit amet.',
            'contact_person' => '0812345671717',
            'event_organizer' => 'Event_WD',
            'event_owner' => 'Samari',
            'tanggal_event' => '2030-05-13',
            'no_rek' => '1897658904',
            'nama_rekening' => 'eVENT wDY',
            'alamat_event' => 'Bumi',
            'tanggal_pendaftaran_booth_tenant' => '2030-05-12',
            'booth' => 'A dan B',
            'denah' => 'poster.png'
        ]);
    }
}