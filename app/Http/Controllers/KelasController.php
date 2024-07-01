<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.kelas.kelas', compact('kelas'));
    }
    public function create()
    {
        return view('admin.kelas.kelas_create');
    }
    public function create_action(Request $request)
    {

        $data = [
            "nama_kelas" => $request->nama_kelas
        ];

        Kelas::create($data);
        return redirect('/kelas');
    }
    public function update($id)
    {

        $data = Kelas::where('id', $id)->first();
        return view('admin.kelas.kelas_update', compact('data'));
    }
    public function update_action(Request $request, $id)
    {
        $data = [
            "nama_kelas" => $request->nama_kelas
        ];

        Kelas::where('id', $id)->update($data);
        return redirect('/kelas');
    }
    public function delete($id)
    {
        $data = Kelas::where('id', $id)->delete();
        return redirect('/kelas');
    }
}
