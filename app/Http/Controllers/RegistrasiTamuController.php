<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegistrasiTamuController extends Controller
{
    public function index()
    {
        return view('registrasitamu');
    }

    public function store(Request $request)
    {
        DB::table('tamu')->insert([
            'id_card' => $request->idcard,
            'nama' => $request->nama,
            'keperluan' => $request->keperluan,
            'alamat' => $request->alamat
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/registrasi-tamu');
    }

    public function show_tamu()
    {
        $tamu = DB::table('tamu')->get();

        return view('datatamu', ['tamu' => $tamu]);
    }

}
