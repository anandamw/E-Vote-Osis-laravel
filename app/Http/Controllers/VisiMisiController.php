<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Kandidat;
use App\Models\Visimisi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visimisi = Visimisi::joinKandidats()->get();
        return view('admin.visi-misi.visi-misi', compact('visimisi'));
    }

    // Menampilkan form untuk membuat suara baru
    public function create()
    {
        $kandidats = Kandidat::all();
        return view('admin.visi-misi.visi-misi_create ', compact('kandidats'));
    }

    // Menyimpan suara baru
    public function create_action(Request $request)
    {
        $data = [
            "kandidats_id" => $request->kandidats_id,
            "misi" => $request->misi,
            "misi" => $request->misi,
        ];

        VisiMisi::create($data);

        return redirect('/visi-misi')->with('success', 'Suara berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengupdate suara
    public function update($id)
    {
        $data = DB::table('visi_misi')->where('id', $id)->first();

        // $suara = Suara::findOrFail($id);
        // $users = User::all();
        // $kelas = Kelas::all();
        $kandidats = Kandidat::all();

        return view('admin.visi-misi.visi-misi_update', compact('data', 'kandidats'));
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

        $suara = VisiMisi::findOrFail($id);
        $suara->update($request->all());

        return redirect('/visi-misi')->with('success', 'Suara berhasil diupdate!');
    }

    // Menghapus suara
    public function delete($id)
    {
        $suara = VisiMisi::findOrFail($id);
        $suara->delete();

        return redirect('/visi-misi')->with('success', 'Suara berhasil dihapus!');
    }
}
