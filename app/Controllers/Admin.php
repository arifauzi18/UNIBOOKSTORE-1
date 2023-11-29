<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;
use App\Models\ModelHome;
use CodeIgniter\Exceptions\AlertError;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
        $this->ModelHome = new ModelHome();
    }   

    public function index()
    {
        $data = [
            'judul' => 'Admin',
            'subjudul' => ' ',
            'menu' => 'admin',
            'submenu' => ' ',
            'page' => 'admin',
            'buku' => $this->ModelHome->AllData(),
            'penerbit' => $this->ModelAdmin->AllData(),
        ];
        return view('v_template', $data);
    }

    public function tambah()
    {
        $data = [
            'Id_buku' => $this->request->getPost('Id_buku'),
            'Kategori' => $this->request->getPost('Kategori'),
            'Nama_buku' => $this->request->getPost('Nama_buku'),
            'Harga' => $this->request->getPost('Harga'),
            'Stok' => $this->request->getPost('Stok'),
            'Penerbit' => $this->request->getPost('Penerbit'),
        ];
        $this->ModelAdmin->Tambah($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('Admin');  
    }

    public function tambahp()
    {
        $data = [
            'Id_penerbit' => $this->request->getPost('Id_penerbit'),
            'Nama' => $this->request->getPost('Nama'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Kota' => $this->request->getPost('Kota'),
            'Telepon' => $this->request->getPost('Telepon'),
        ];
        $this->ModelAdmin->Tambahp($data);
        session()->setFlashdata('pesanp', 'Data Berhasil Ditambahkan');
        return redirect()->to('Admin');  
    }

    public function ubah($Id_buku)
    {
        $data = [
            'Id_buku' => $Id_buku,
            'Kategori' => $this->request->getPost('Kategori'),
            'Nama_buku' => $this->request->getPost('Nama_buku'),
            'Harga' => $this->request->getPost('Harga'),
            'Stok' => $this->request->getPost('Stok'),
            'Penerbit' => $this->request->getPost('Penerbit'),
        ];
        $this->ModelAdmin->ubahdata($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('Admin');
    }

    public function ubahp($Nama)
    {
        $data = [
            'Nama' => $Nama,
            'Id_penerbit' => $this->request->getPost('Id_penerbit'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Kota' => $this->request->getPost('Kota'),
            'Telepon' => $this->request->getPost('Telepon'),
        ];
        $this->ModelAdmin->ubahdatap($data);
        session()->setFlashdata('pesanp', 'Data Berhasil Diubah');
        return redirect()->to('Admin');
    }

    public function hapus($Id_buku)
    {
        $data = [
            'Id_buku' => $Id_buku,
        ];
        $this->ModelAdmin->hapusdata($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('Admin');
    }
    
    public function hapusp($Nama)
    {
        $data = [
            'Nama' => $Nama,
        ];
        $this->ModelAdmin->hapusdatap($data);
        session()->setFlashdata('pesanp', 'Data Berhasil Dihapus');
        return redirect()->to('Admin');
    }

}
