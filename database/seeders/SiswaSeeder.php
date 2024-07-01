<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['nama' => 'Siswa 1', 'kelas_id' => 1, 'users_id' => 1],
            ['nama' => 'Siswa 2', 'kelas_id' => 1, 'users_id' => 2],
            ['nama' => 'Siswa 3', 'kelas_id' => 2, 'users_id' => 2],
            ['nama' => 'Siswa 4', 'kelas_id' => 2, 'users_id' => 2],
        ];

        DB::table('siswa')->insert($siswa);
    }
}
