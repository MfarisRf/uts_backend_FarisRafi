<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agama::factory()->create([
            'nama_agama' => 'Islam',
        ]);
        Agama::factory()->create([
            'nama_agama' => 'Kristen',
        ]);
        Agama::factory()->create([
            'nama_agama' => 'Hindu',
        ]);
    }
}
