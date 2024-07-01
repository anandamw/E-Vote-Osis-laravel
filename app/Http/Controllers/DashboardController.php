<?php

namespace App\Http\Controllers;

use App\Models\Suara;
use App\Models\Kandidat;
use App\Models\Pemilihan;
use App\Models\Visimisi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Kandidat::all();
        $kandidats = Kandidat::withCount('suaras')->get();


        $review = [
            "suara" => Visimisi::joinKandidats()->get()
        ];
        return view('admin.dashboard', compact('data', 'kandidats'), $review);
    }
    public function vote()
    {
        return response()->json();
    }
    public function vote_action(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
            'kandidat_id' => 'required|integer',
            'tanggal' => 'required|date',
        ]);

        Suara::create($validatedData);

        return redirect()->back()->with('success', 'Vote berhasil ditambahkan!');
    }
    public function update()
    {
    }
    public function update_action(Request $request)
    {
    }
    public function delete()
    {
    }
}
