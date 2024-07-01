<?php

namespace Database\Seeders;

use App\Models\Kandidat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createData = [
            [
                'nama_kandidat' =>  "Kandidat 1",
                'calon_kandidat' =>  "Nanda & Elisa",

                'foto_kandidat' => 'kandidat.jpg',
            ],
            [
                'nama_kandidat' =>  "Kandidat 2",
                'calon_kandidat' =>  "Yanto & Yanti",

                'foto_kandidat' => 'kandidat.jpg',
            ],

        ];
        foreach ($createData as $data) {
            Kandidat::create($data);
        }
    }
}
