<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        echo 'Ini adalah halaman program karir';
    }

    public function magang(){
        echo 'Ini adalah halaman program magang';
    }

    public function kunjungan(){
        echo 'Ini adalah halaman program kunjungan-industri';
    }
}
