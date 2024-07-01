<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $data = [
            "siswas" => DB::table('siswa')->join('kelas', 'siswa.kelas_id', '=', 'kelas.id')
                ->join('users', 'siswa.users_id', '=', 'users.id')->get()
        ];

        return view('admin.siswa.siswa', $data);
    }
    public function create()
    {
        $data = [
            "siswas" => Siswa::all(),
            "kelas" => Kelas::all(),
            "users" => User::all(),
        ];

        return view('admin.siswa.siswa_create', $data);
    }
    public function create_action(Request $request)
    {
    }
    public function update($id)
    {
        $data = [
            "siswas" => Siswa::where('id', $id)->first(),
            "kelas" => Kelas::all(),
            "users" => User::all(),
        ];

        return view('admin.siswa.siswa_update', $data);
    }
    public function update_action(Request $request, $id)
    {
        $data = [
            "siswas" => Siswa::where('id', $id)->first(),
            "kelas" => Kelas::all(),
            "users" => User::all(),
        ];

        Siswa::where('id', $id)->update($data);
        return redirect('siswa');
    }
    public function delete($id)
    {
        Siswa::where('id', $id)->delete();
    }
}
