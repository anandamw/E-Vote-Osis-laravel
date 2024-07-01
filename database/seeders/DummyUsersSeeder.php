<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createDummy = [
            [
                'nama' => 'ananda',
                'kelas_id' => '1',

                'email' => 'ananda@gmail.com',
                'password' => bcrypt('123'),
                "role" => 'admin',
            ],
            [
                'nama' => 'admin',
                'kelas_id' => '1',

                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                "role" => 'admin',
            ],
            [
                'kelas_id' => '2',

                'nama' => 'maulana',
                'email' => 'maulana@gmail.com',
                'password' => bcrypt('123'),
                "role" => 'siswa',
                // "gambar" => 'maulana.jpg',
            ],

        ];
        foreach ($createDummy as $data) {
            User::create($data);
        }
    }
}
