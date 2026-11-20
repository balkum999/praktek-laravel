<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController
{
    public function luasSegitiga(Request $request)
    {
        // Menangkap data dari form inputan user
        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');
        $luas = null;

        // Jika alas dan tinggi sudah diisi (tombol hitung ditekan), lakukan perhitungan
        if ($alas !== null && $tinggi !== null) {
            $luas = 0.5 * $alas * $tinggi;
        }

        return view('kalkulator_segitiga', [
            'alas' => $alas,
            'tinggi' => $tinggi,
            'luas' => $luas
        ]);
    }
}