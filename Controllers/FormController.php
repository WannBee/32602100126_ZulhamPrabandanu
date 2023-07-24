<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class FormController extends BaseController
{
    public function index()
    {
        return view('form');

    }
    public function processForm()
    {
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matkul = $this->request->getPost('matkul');
        $dosen = $this->request->getPost('dosen');
        $asprak = $this->request->getPost('asprak');
    
        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matkul' => $matkul,
            'dosen' => $dosen,
            'asprak' => $asprak,
        ];
        return view('result',$data);
    }
}