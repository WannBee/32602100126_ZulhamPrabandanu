<?php
namespace App\Controller;

use App\Controller\BaseController;

class TugasBab1 extends BaseController
{
    public function tugas()
    {
        return view('form');

    }
    public function submitForm()
    {
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matkul = $this->request->getPost('matkul');
        $dosen = $this->request->getPost('dosen');
        $asprak = $this->request->getPost('asprak');
    
        $data =[
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matkul' => $matkul,
            'dosen' => $dosen,
            'asprak' => $asprak,
        ];
        return view($data);
    }
}