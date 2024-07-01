<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visiMisi = [
            ['kandidats_id' => 1, 'visi' => 'Visi Kandidat 1', 'misi' => 'Misi Kandidat 1'],
            ['kandidats_id' => 2, 'visi' => 'Visi Kandidat 2', 'misi' => 'Misi Kandidat 2'],
            ['kandidats_id' => 1, 'visi' => 'Visi Kandidat 3', 'misi' => 'Misi Kandidat 3'],
            ['kandidats_id' => 2, 'visi' => 'Visi Kandidat 4', 'misi' => 'Misi Kandidat 4'],
        ];

        DB::table('visi_misi')->insert($visiMisi);
    }
}
