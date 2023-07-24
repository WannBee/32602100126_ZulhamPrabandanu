<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db_kampus;
    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }
    public function index()
    {
        $all = $this->MahasiswaModel->getData();

        $data = [
            'mahasiswa' => $all
        ];

        return view('crud/view', $data);
    }

    public function tambah()
    {
        // if (isset($_POST['nim'])) {

        //     $nim = $_POST['nim'];
            

        //     $upload = [
        //         'nim' => $nim,
        //     ];

        //     $this->MahasiswaModel->insert($upload);

        //     return redirect()->to(base_url('/crud'));
        // } else {
            return view('crud/upload');
        }
    public function insert(){
        $data = [
            'nim'=> $this->request->getVar('nim'),
            'nama'=> $this->request->getVar('nama'),
            'prodi'=> $this->request->getVar('prodi'),
            'universitas'=> $this->request->getVar('universitas'),
            'no_hp'=> $this->request->getVar('no_hp'),
           
        ];

        $this->MahasiswaModel->insert($data);

        return redirect()->to('/crud');
    }

    public function edit($nim)
    {
        $data = [
            'edit'=>$this->MahasiswaModel->getData($nim)
        ];
        // $nim = $id;
        // $a = $this->MahasiswaModel->find($nim);
        // $data = [
        //     'edit' => $a
        // ];
        return view('crud/edit',$data);
    }
    public function update($oldNim)
    {
        $data=[
            'nim'=>$this->request->getVar('nim'),
            'nama'=>$this->request->getVar('nama'),
            'prodi'=>$this->request->getVar('prodi'),
            'universitas'=>$this->request->getVar('univeristas'),
            'no_hp'=>$this->request->getVar('no_hp'),
        ];
        // $nim = $_POST['nim'];
        // $prodi = $_POST['prodi'];
        // $universitas = $_POST['universitas'];
        // $newNim = $_POST['newNim'];
        // $newProdi = $_POST['newProdi'];
        // $newUniversitas = $_POST['newUniversitas'];
        // $this->MahasiswaModel->where('nim', $nim, 'prodi', $prodi, 'universitas', $universitas)
        //     ->set('nim', $newNim)
        //     ->set('prodi', $newProdi)
        //     ->set('universitas', $newUniversitas)
        //     ->update();
        $this->MahasiswaModel->update($oldNim, $data);

        return redirect()->to('/crud');
    }
    public function hapus($id)
    {
        $nim = $id;
        $this->MahasiswaModel->delete($nim);
        return redirect()->to("/crud");
    }
}
