<?php

namespace App\Controllers;

use App\Models\ModelHome;
use App\Models\ModelPengadaan;

class Pengadaan extends BaseController
{
    public function __construct()
    {
        $this->ModelPengadaan = new ModelPengadaan();
        $this->ModelHome = new ModelHome();
    }   
    
    public function index()
    {
        $data = [
            'judul' => 'Pengadaan ',
            'subjudul' => 'Pengadaan Buku',
            'menu' => 'pengadaan',
            'submenu' => ' ',
            'page' => 'pengadaan',
            'buku' => $this->ModelPengadaan->AllData(),
        ];
        return view('v_template', $data);
    }
}
