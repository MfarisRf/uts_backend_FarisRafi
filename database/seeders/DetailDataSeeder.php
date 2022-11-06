<?php

namespace Database\Seeders;

use App\Models\Detail_data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail_data::factory()->create([
            'id_user'=>1,
            'alamat'=>'Nusukan',
            'tempat_lahir'=>'Karang Dadi',
            'tanggal_lahir'=>"2002-10-10",
            'id_agama'=>1,
            'foto_ktp'=>'modul3_3.jpg',
            'umur'=>20
        ]);
    }
}
