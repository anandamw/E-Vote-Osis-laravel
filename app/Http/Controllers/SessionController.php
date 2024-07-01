<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {

        return view('auth.login');
    }
    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ], [
            'email.required' => 'email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {

            $role = Auth::user()->role;
            switch ($role) {
                case 'admin':
                    return redirect('/dashboard');
                    break;
                case 'siswa':
                    return redirect('/dashboard');
                    break;
                default:
                    return redirect('/login')->withErrors('Role Tidak Valid')->withInput();
            }
        } else {
            return redirect('/login')->withErrors('email atau Password Salah')->withInput();
        }
    }

    public function register()
    {
        $data = kelas::all();
        return view('auth.register', compact('data'));
    }
    public function register_action(Request $request)
    {
        // ddd($request->all());



        // $token = uniqid();

        $data = [
            "nama" => $request->nama,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "kelas_id" => $request->kelas_id,
            "role" => "siswa",
        ];

        User::create($data);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
