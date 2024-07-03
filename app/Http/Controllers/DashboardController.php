<?php

namespace App\Http\Controllers;

use App\Models\Suara;
use App\Models\Kandidat;
use App\Models\Visimisi;
use App\Models\Pemilihan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

        // $validatedData = $request->validate([
        //     'nama' => 'required|string|uniqid|max:255',
        //     'kelas_id' => 'required|integer',
        //     'kandidat_id' => 'required|integer',
        //     'tanggal' => 'required|date',
        // ]);

        // Suara::create($validatedData);

        // return redirect()->back()->with('success', 'Vote berhasil ditambahkan!');
        // Validasi input
        $validatedData = $request->validate([
            'nama' => [
                'required',
                'string',
                'max:255',
                Rule::unique('suara')->where(function ($query) use ($request) {
                    return $query->where('kelas_id', $request->kelas_id);
                })
            ],
            'kelas_id' => 'required|integer',
            'kandidat_id' => 'required|integer',
            'tanggal' => 'required|date',
        ], [
            'nama.unique' => 'Nama sudah pernah digunakan untuk kelas ini.',
        ]);

        // Simpan data ke dalam tabel 'suaras'
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
