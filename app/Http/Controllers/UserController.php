<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {

        $data = DB::table('users')->join('kelas', 'users.kelas_id', '=', 'kelas.id')->get();

        return view('admin.users.user',  compact('data'));
    }
    public function create()
    {
        $data = [
            "kelass" => Kelas::all(),
            "role" => "siswa"
        ];
        return view('admin.users.user_create',  $data);
    }
    public function create_action(Request $request)
    {
        $data = [
            "nama" => $request->nama,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "kelas_id" => $request->kelas_id,
            "role" => "siswa"
        ];

        User::create($data);
        return redirect('user');
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
