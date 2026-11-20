<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller {

    public function index()
    {
        // Parsing data list mahasiswa sesuai soal
        $data_mahasiswa = [
            ['nama' => 'Anton', 'alamat' => 'Surabaya', 'gender' => 'L'],
            ['nama' => 'Budi', 'alamat' => 'Kediri', 'gender' => 'L'],
            ['nama' => 'Ani', 'alamat' => 'Malang', 'gender' => 'P'],
            ['nama' => 'Sinta', 'alamat' => 'Surabaya', 'gender' => 'P'],
        ];

        return view('mahasiswa', ['mahasiswa' => $data_mahasiswa]);
    }
}