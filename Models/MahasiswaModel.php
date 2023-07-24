<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'tb_mahasiswa';
    protected $primarykey = "nim";

    protected $allowedFields = [
        'nim',
        'nama',
        'prodi',
        'universitas',
        'no_hp'
    ];
public function getData($nim = false){
    if($nim == false){
        return $this->findall();
    }
    return $this->where(['nim => $nim'])->first();
    
}

}