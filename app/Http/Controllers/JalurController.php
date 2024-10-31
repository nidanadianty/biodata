<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use App\Models\Biodata;
use Illuminate\Http\Request;

class JalurController extends Controller
{
    public function index()
    {
        return view('controller');
    }
    public function menampilkanDataModel()
    {
        $dataSekolah = Jalur::$sekolah;
        $dataKelas = Jalur::$kelas;
        return view('modeljalur', compact('dataSekolah','dataKelas'));
    }
    public function menampilkanBiodata()
    {
        $nama = Biodata::$nama;
        $kelas = Biodata::$kelas;
        $sekolah = Biodata::$sekolah;
        $alamat = Biodata::$alamat;
        $hobi = Biodata::$hobi;
        $email = Biodata::$email;
        $besti = Biodata::$besti;
        return view('biodata', compact('nama','kelas','sekolah','alamat','hobi','email','besti'));
    }

}
