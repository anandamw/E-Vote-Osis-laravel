<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visimisi extends Model
{
    use HasFactory;

    protected $table = ["visi_misi"];


    public static function joinKandidats()
    {

        return DB::table('visi_misi')->join('kandidats', 'visi_misi.kandidats_id', '=', 'kandidats.id');
    }
}
