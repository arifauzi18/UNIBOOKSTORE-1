<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengadaan extends Model
{
    protected $table = 'tbl_buku';
    protected $primaryKey = 'Id_buku';
    protected $allowedFields = ['Kategori', 'Nama_buku', 'Harga', 'Stok', 'Penerbit'];

    // public function AllData()
    // {
    //     return $this->findAll();
    // }

    public function AllData($stok = 10)
    {
        return $this->db->table('tbl_buku')->where('Stok <', '10')->orderBy('Stok', "asc")->get()->getResultArray();
    }


}
