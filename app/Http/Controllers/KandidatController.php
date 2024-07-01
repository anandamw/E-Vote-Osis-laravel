<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kandidat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class KandidatController extends Controller
{
    public function index()
    {
        $data = [
            "kandidats" => Kandidat::all()

        ];

        return view('admin.kandidats.kandidat', $data);
    }
    public function create()
    {

        // $data = [
        //     ""
        // ];

        return view('admin.kandidats.kandidat_create');
    }
    public function create_action(Request $request)
    {

        $data = [
            "nama_kandidat" => $request->nama_kandidat,
            "calon_kandidat" => $request->calon_kandidat,
            "foto_kandidat" => $request->foto_kandidat,
        ];

        Kandidat::create($data);
        return redirect('/kandidat');
    }
    public function update($id)
    {
        $data = Kandidat::where('id', $id)->first();
        return view('admin.kandidats.kandidat_update', compact('data'));
    }
    public function update_action(Request $request, $id)
    {

        $data = [
            "nama_kandidat" => $request->nama_kandidat,
            "calon_kandidat" => $request->calon_kandidat,
            "foto_kandidat" => $request->foto_kandidat,
        ];
        Kandidat::where('id', $id)->update($data);
        return redirect('/kandidat');
    }
    public function delete($id)
    {
        Kandidat::where('id', $id)->delete();
        return redirect('/kandidat');
    }
}
