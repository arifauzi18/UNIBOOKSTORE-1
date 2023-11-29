<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    protected $table            = 'tbl_penerbit';
    protected $primaryKey       = 'Id_penerbit';
    protected $allowedFields    = ['Nama', 'Alamat', 'Kota', 'Telepon'];
    
    public function AllData()
    {
        return $this->orderBy('Id_penerbit', "asc")->findAll();
    }
    
    public function Tambah($data)
    {
        $this->db->table('tbl_buku')->insert($data);
    }

    public function Tambahp($data)
    {
        $this->db->table('tbl_penerbit')->insert($data);
    }

    public function ubahdata($data)
    {
        $this->db->table('tbl_buku')->where('Id_buku', $data['Id_buku'])->update($data);
    }
    
    public function ubahdatap($data)
    {
        $this->db->table('tbl_penerbit')->where('Nama', $data['Nama'])->update($data);
    }

    public function hapusdata($data)
    {
        $this->db->table('tbl_buku')->where('Id_buku', $data['Id_buku'])->delete($data);
    }

    public function hapusdatap($data)
    {
        $this->db->table('tbl_penerbit')->where('Nama', $data['Nama'])->delete($data);
    }
}