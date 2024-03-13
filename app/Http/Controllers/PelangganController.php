<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelangganController extends Controller
{
    public function indexpelanggan()
    {
        $profile = DB::table('pelanggan')->get();

        return view('pelanggan.index');
    }

    public function tambahpelanggan()
    {
        return view('pelanggan.tambah');

    }

    public function pelanggan(Request $request){

        $request->validate([
            'nama' => 'required|',
            'alamat' => 'required|',
            'jenis_kelamin' => 'required|',
            'no_telephone' => 'required|',
        ]);

       DB::table('pelanggan')-> insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telephone' => $request->no_telephone,
        ]);

        return redirect('/customer'); }
}
