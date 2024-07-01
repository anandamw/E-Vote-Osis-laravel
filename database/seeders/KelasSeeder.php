<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = [
            ['nama_kelas' => 'X-IPA-A'],
            ['nama_kelas' => 'X-IPA-B'],
            ['nama_kelas' => 'X-IPA-C'],
            ['nama_kelas' => 'X-IPS-A'],
            ['nama_kelas' => 'X-IPS-B'],
            ['nama_kelas' => 'X-IPS-C'],
            ['nama_kelas' => 'X-Bahasa-A'],
            ['nama_kelas' => 'X-Bahasa-B'],
            ['nama_kelas' => 'X-Bahasa-C'],
            ['nama_kelas' => 'X-Agama-A'],
            ['nama_kelas' => 'X-Agama-B'],
            ['nama_kelas' => 'X-Agama-C'],
            ['nama_kelas' => 'XI-IPA-A'],
            ['nama_kelas' => 'XI-IPA-B'],
            ['nama_kelas' => 'XI-IPA-C'],
            ['nama_kelas' => 'XI-IPS-A'],
            ['nama_kelas' => 'XI-IPS-B'],
            ['nama_kelas' => 'XI-IPS-C'],
            ['nama_kelas' => 'XI-Bahasa-A'],
            ['nama_kelas' => 'XI-Bahasa-B'],
            ['nama_kelas' => 'XI-Bahasa-C'],
            ['nama_kelas' => 'XI-Agama-A'],
            ['nama_kelas' => 'XI-Agama-B'],
            ['nama_kelas' => 'XI-Agama-C'],
            ['nama_kelas' => 'XII-IPA-A'],
            ['nama_kelas' => 'XII-IPA-B'],
            ['nama_kelas' => 'XII-IPA-C'],
            ['nama_kelas' => 'XII-IPS-A'],
            ['nama_kelas' => 'XII-IPS-B'],
            ['nama_kelas' => 'XII-IPS-C'],
            ['nama_kelas' => 'XII-Bahasa-A'],
            ['nama_kelas' => 'XII-Bahasa-B'],
            ['nama_kelas' => 'XII-Bahasa-C'],
            ['nama_kelas' => 'XII-Agama-A'],
            ['nama_kelas' => 'XII-Agama-B'],
            ['nama_kelas' => 'XII-Agama-C'],
        ];

        DB::table('kelas')->insert($jurusan);
    }
}
