<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkademikController extends Controller
 {
    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function proses(Request $request)
    {
        $nama = $request->nama;
        $jenis_kelamin = $request->jenis_kelamin;
        $agama = $request->agama;
        $alamat = $request->alamat;
        $telepon = $request->telepon;
        $hobi = $request->hobi;
        $jurusan = $request->jurusan;
        $bidang_minat = $request->bidang_minat;
        $pilih_file = $request->pilih_file;
        return 'Nama: '.$nama.', Jenis kelamin: '.$jenis_kelamin.',Agama: '.$agama.', Alamat: '.$alamat.', Telepon: '.$telepon.', Hobi: '.$hobi.', Jurusan: '.$jurusan.', Bidang Minat: '.$bidang_minat.', Foto: '.$pilih_file;
    }
}