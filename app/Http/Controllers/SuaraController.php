<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Suara;
use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class SuaraController extends Controller
{
    public function index()
    {
        $suara =
        DB::table('suara')
        ->join('kelas', 'suara.kelas_id', '=', 'kelas.id')
        ->join('kandidats', 'suara.kandidat_id', '=', 'kandidats.id')->get();
        // ->join('users', 'suara.users_id', '=', 'users.id');

        return view('admin.suara.suara', compact('suara'));
    }

    // Menampilkan form untuk membuat suara baru
    public function create()
    {
        $users = User::all();
        $kelas = Kelas::all();
        $kandidats = Kandidat::all();
        return view('admin.suara.suara', compact('users', 'kelas', 'kandidats'));
    }

    // Menyimpan suara baru
    public function create_action(Request $request)
    {
        $request->validate([
            'users_id' => 'required|exists:users,id',
            'kelas_id' => 'required|exists:kelas,id',
            'kandidat_id' => 'required|exists:kandidats,id',
            'tanggal' => 'required|date',
        ]);

        Suara::create($request->all());

        return redirect('/suara')->with('success', 'Suara berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengupdate suara
    public function update($id)
    {
        $suara = Suara::findOrFail($id);
        $users = User::all();
        $kelas = Kelas::all();
        $kandidats = Kandidat::all();
        return view('admin.suara.suara_update', compact('suara', 'users', 'kelas', 'kandidats'));
    }

    // Menyimpan perubahan suara
    public function update_action(Request $request, $id)
    {
        $request->validate([
            'users_id' => 'required|exists:users,id',
            'kelas_id' => 'required|exists:kelas,id',
            'kandidat_id' => 'required|exists:kandidats,id',
            'tanggal' => 'required|date',
        ]);

        $suara = Suara::findOrFail($id);
        $suara->update($request->all());

        return redirect('/suara')->with('success', 'Suara berhasil diupdate!');
    }

    // Menghapus suara
    public function destroy($id)
    {
        $suara = Suara::findOrFail($id);
        $suara->delete();

        return redirect('/suara')->with('success', 'Suara berhasil dihapus!');
    }
}
