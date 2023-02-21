<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index()
    {
        return view('Helloworld/index');
    }
    public function Mahasiswa_Home()
    {
        // echo "Hello World";
        return view('Mahasiswa/P_Mahasiswa');
    }
}
