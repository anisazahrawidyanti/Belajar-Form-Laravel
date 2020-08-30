<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function cekKoneksi(){
        $guru = new Guru;
        dump($guru);
    }
    public function simpanguru(){
        $guru = new guru;
        $guru->nik="12345";
        $guru->nama="Riri";
        $guru->tanggal_lahir="2003-09-14";
        $guru->alamat="rawa kalong";
        $guru->save();
        dump($guru);
    }
    public function all()
    {
        $result = Guru::all();
        dump($result);
    }
    public function cari_guru()
    {
        $guru = Guru::find(1);
        // return view('tampil_guru',['gurus' => [$guru]]);
        dump($guru);
    }
    public function update_guru()
    {
        $guru = Guru::find(1);
        $guru->nik = '3221';
        $guru->nama = 'Ani';
        $guru->tanggal_lahir='2020-06-16';
        $guru->alamat="perkapuran";
        $guru->save();

        dump($guru);
    }
    public function delete_guru()
    {
        $guru = Guru::find(2);
        $guru->delete();

        dump($guru);
    }
}
