<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kandidat extends Model
{
    use HasFactory;

    protected $table = 'kandidats';
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function suaras()
    {
        return $this->hasMany(Suara::class);
    }
}
