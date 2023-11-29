<?php

namespace App\Controllers;

use App\Models\ModelHome;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelHome = new ModelHome();
    }

    public function index()
    {
        $data = [
            'judul' => 'Home',
            'subjudul' => '',
            'menu' => 'home',
            'submenu' => '',
            'page' => 'v_home',
            'buku' => $this->ModelHome->AllData(),
        ];
        return view('v_template', $data);
    }
    public function CariBuku()
    {
        $detail = [
            'cari' => $_POST['cari'],
        ];
        $this->Modelhome->cari($detail);
        $data = [
            'judul' => 'Home',
            'subjudul' => ' ',
            'menu' => 'home',
            'submenu' => ' ',
            'page' => 'v_home',
            'buku' => $this->Modelhome->cari($detail),
        ];
        return view('v_template', $data);
    }
}