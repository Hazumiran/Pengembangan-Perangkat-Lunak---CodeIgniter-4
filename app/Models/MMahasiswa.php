<?php

namespace App\Models;

use CodeIgniter\Model;

class MMahasiswa extends Model
{
    protected $table = 'mahasiswa';
    // protected $primaryKey = 'NIM';
    // protected $allowedFields = ['NIM', 'Nama', 'Umur'];

    function Simpan($data)
    {
        $NIM =  $data['NIM'];
        $Nama = $data['Nama'];
        $Umur = $data['Umur'];
        $query = $this->db->query("INSERT INTO mahasiswa (NIM,Nama,Umur) VALUES('$NIM', '$Nama', '$Umur')");
        return $query;
    }
    function Ambil()
    {
        $query = $this->db->query("SELECT * FROM mahasiswa");
        return $query->getResult();
    }
    function Detail($NIM)
    {
        $query = $this->db->query("SELECT * FROM mahasiswa WHERE NIM='$NIM'");
        return $query->getResultArray();
    }

    public function pencarian($cari)
    {
        $mahasiswa = $this->db->query("SELECT * FROM mahasiswa WHERE Nama LIKE '%$cari%'");
        return $mahasiswa->getResult();
    }

    public function hapus($NIM)
    {
        $query = $this->db->query("DELETE FROM mahasiswa WHERE NIM='$NIM'");
        return $query;
    }
    public function updated($data)
    {
        $NIM =  $data['NIM'];
        $Nama = $data['Nama'];
        $Umur = $data['Umur'];
        $query = $this->db->query("UPDATE mahasiswa SET Nama='$Nama', Umur='$Umur' WHERE NIM='$NIM'");
        return $query;
    }

    public function edit($NIM)
    {
        $query = $this->db->query("SELECT * FROM mahasiswa WHERE NIM='$NIM'");
        return $query->getResultArray();
    }
}




    // protected $DBGroup          = 'default';
    // protected $table            = 'mahasiswa';
    // protected $primaryKey       = 'NIM';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    // protected $returnType       = 'object';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    // protected $allowedFields    = ['NIM', 'Nama', 'Umur'];

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
