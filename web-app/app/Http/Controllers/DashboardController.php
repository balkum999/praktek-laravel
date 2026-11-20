<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DashboardController extends Controller{

    public function dash() {
        $data['judul']='Laman Home';
        $data['isi']='Lorem ipsum dolor sit amet';
        return view('dashboard',$data);
    }

    public function gallery(){
        $data['judul']='Laman Gallery';
        return view('gallery',$data);
    }
}