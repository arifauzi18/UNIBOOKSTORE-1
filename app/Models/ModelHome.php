<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
    protected $table            = 'tbl_buku';
    protected $primaryKey       = 'Id_buku';
    protected $allowedFields    = ['Kategori', 'Nama_buku', 'Harga', 'Stock', 'Penerbit'];

    public function AllData()
    {
        return $this->findAll();
    }

//     public function Tambah($data)
//     {
//         $this->db->table('tbl_produk')->insert($data);
//     }

//     public function ubahdata($data)
//     {
//         $this->db->table('tbl_produk')->where('id_produk', $data['id_produk'])->update($data);
//     }

//     public function hapusdata($data)
//     {
//         $this->db->table('tbl_produk')->where('id_produk', $data['id_produk'])->delete($data);
//     }

}