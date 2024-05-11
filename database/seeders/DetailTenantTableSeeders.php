<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTenantTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tenant_tabel')->insert([ 
            'nama_booth' => 'Banana Crispy',
            'nama_pemilik' => 'Taryam',
            'foto' =>'poster.png',
            'no_telp' => '081545672345',
            'ktp' => 'ktp.jpg',
            'booth' => 'booth a',
            'harga_booth' => '200.000',
            'bukti_transfer' => 'poster.png',
        ]);
    }
}