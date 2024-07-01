<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suara = [
            ['nama' => "nanda545", 'kelas_id' => 1, 'kandidat_id' => 1, 'tanggal' => Carbon::now()->toDateString()],
            ['nama' => "nanda343", 'kelas_id' => 1, 'kandidat_id' => 2, 'tanggal' => Carbon::now()->toDateString()],
            ['nama' => "nanda988", 'kelas_id' => 2, 'kandidat_id' => 1, 'tanggal' => Carbon::now()->toDateString()],
            ['nama' => "nanda66", 'kelas_id' => 2, 'kandidat_id' => 2, 'tanggal' => Carbon::now()->toDateString()],
        ];

        DB::table('suara')->insert($suara);
    }
}
