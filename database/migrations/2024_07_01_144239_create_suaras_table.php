<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('suara', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama');
        //     $table->foreignId('kelas_id');
        //     $table->foreignId('kandidat_id');
        //     $table->date('tanggal');
        //     $table->timestamps();
        // });
        Schema::create('suara', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('kelas_id');
            $table->integer('kandidat_id');
            $table->date('tanggal');
            
            // Menambahkan konstrain unik untuk kolom 'nama' dan 'kelas_id'
            $table->unique(['nama', 'kelas_id']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suara');
    }
};
