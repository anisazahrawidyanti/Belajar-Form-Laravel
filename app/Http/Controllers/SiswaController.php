<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    // public function index(){
    //     return"Berhasil Memproses Data"; 
    // }
    // public function insertSiswa(){
    //     $result=DB::insert("INSERT INTO siswas(nipd,nama,tempat_lahir,tanggal_lahir,kelas,jurusan) VALUES ('12233','Budi','Depok','12-12-12','XII RPL 1','RPL') ");
    // }
    public function index(){
        return view('siswa.index');
    }
    public function proses_simpan(Request $request){
        // dump($request);
        //validasi
        $validateData = $request->validate([
            'nis'           => 'required|size:10',
            'nama_siswa'    => 'required|min:3|max:60',
            'tempat_lahir'  => 'required', 
            'tanggal_lahir' => 'required',
            'jurusan'       => 'required',
            'nomor_hp'      => 'required',
        ],[
            'nis.required' => 'NIS Siswa Wajib di isi dan harus 10 Karakter',
            'nama_siswa.required' => 'Nama Siswa Wajib di isi',
            'tempat_lahir.required' => 'Tempat Lahir Siswa Wajib di isi',
            'tanggal_lahir.required' => 'Tanggal Lahir Siswa Wajib di isi',
            'jurusan.required' => 'Jurusan Siswa Wajib di isi',
            'nomor_hp.required' => 'Nomor HP Wajib di isi'
            ]
    );
    }
}
