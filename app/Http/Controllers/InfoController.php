<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InfoController extends Controller
{
    public function dosen(): View
{
    $namaDosen = "Rudi Kurniawan, S.Kom., M.T.";
    $matkul = "Pemrograman Web Lanjut";

    $mahasiswa = ["Anggih Az-zahroh", "Khusnah Qurrotul A'eni", "Najmah Nur Azizah", "Shifa Tri Fadilah", "Shiva Aulia Azahra", "Idelia Dennisa Salsabil"];

    $tahun = "2025/2026";

    return view('info_dosen', [
        'nama' => $namaDosen,
        'mata_kuliah' => $matkul,
        'list_mhs' => $mahasiswa,
        'tahun' => $tahun
    ]);
}

   
    public function detailMahasiswa($nama, $nim): View
{
    return view('detail_mahasiswa', [
        'nama_mhs' => $nama,
        'nim_mhs' => $nim
    ]);
}
    public function kampus()
{
    return "Saya kuliah di STMIK IKMI Cirebon";
}
}