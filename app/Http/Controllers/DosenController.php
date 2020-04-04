<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        
        //return "Halo ini adalah method index, dalam controller Dosen ";
        //return view('biodata');
        $nama = "Asroni";
        //return view('biodata', ['nama' => $nama]);

        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
 
    	return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);
    

    }
}


