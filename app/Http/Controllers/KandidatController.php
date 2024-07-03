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
        // Generate a unique token for file naming
        $token = uniqid();

        // Retrieve the uploaded file
        $file = $request->file("foto_kandidat");

        // Generate file name with token and original extension
        $fileimg = $token . '.' . $file->getClientOriginalExtension();

        // Save the uploaded file to a designated directory (if needed)
        $file->move('pendaftar', $fileimg);

        // Prepare data for candidate creation
        $data = [
            "nama_kandidat" => $request->nama_kandidat,
            "calon_kandidat" => $request->calon_kandidat,
            "foto_kandidat" => $fileimg, // Save file name to database
        ];

        // Create a new Kandidat model instance
        Kandidat::create($data);

        // Redirect to the candidates list page
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
