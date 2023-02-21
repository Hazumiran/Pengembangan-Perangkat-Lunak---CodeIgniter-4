<?php

namespace App\Controllers;

use App\Models\MMahasiswa;

class C_Mahasiswa extends BaseController
{
    protected $mahasiswa;
    function __construct()
    {
        $this->mahasiswa = new MMahasiswa();
    }
    public function index()
    {

        // $data['mahasiswa'] = $this->mahasiswa->findAll();
        $mahasiswa = new MMahasiswa();
        $data['mahasiswa'] = $mahasiswa->Ambil();
        return view('Mahasiswa/P_Mahasiswa', $data);
        // echo "Welcome back, " . session()->getFlashdata('pesan');
    }
    function delete($NIM)
    {
        // dd($NIM);
        $mahasiswa = new MMahasiswa();
        $this->mahasiswa->hapus($NIM);
        return redirect()->to(base_url('Mahasiswa'));
    }
    function detail($NIM)
    {
        $mahasiswa = new MMahasiswa();
        $data['mahasiswa'] = $mahasiswa->Detail($NIM);
        return view('Mahasiswa/P_Detail', $data);
    }

    function create()
    {
        return view('Mahasiswa/P_Create');
    }

    function saved()
    {
        $data = [
            'NIM' => $this->request->getPost('NIM'),
            'Nama' => $this->request->getPost('Nama'),
            'Umur' => $this->request->getPost('Umur'),
        ];
        $this->mahasiswa->Simpan($data);
        return redirect()->to(base_url('Mahasiswa'));
    }
    // function update($NIM)
    // {
    //     $data['mahasiswa'] = $this->mahasiswa->where('NIM', $NIM)->first();
    //     return view('Mahasiswa/P_Update', $data);
    // }
    function updated()
    {
        $data = [
            'NIM' => $this->request->getPost('NIM'),
            'Nama' => $this->request->getPost('Nama'),
            'Umur' => $this->request->getPost('Umur'),
        ];

        $this->mahasiswa->updated($data);
        return redirect()->to(base_url('Mahasiswa'));
    }
    function search()
    {

        $model = new MMahasiswa();
        $cari = $this->request->getVar('cari');

        if ($cari) {
            $mahasiswa = $this->mahasiswa->pencarian($cari);
        } else {
            $mahasiswa =  $this->mahasiswa->getDatabase();
        }
        return view('Mahasiswa/P_Mahasiswa', compact('mahasiswa'));
    }
    function Edit($NIM)
    {
        $mahasiswa = new MMahasiswa();
        $data['mahasiswa'] = $mahasiswa->edit($NIM);
        return view('Mahasiswa/P_Edit', $data);
    }
}
