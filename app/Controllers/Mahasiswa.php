<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }
    public function index()
    {
        $data = [
            'tittle' => 'Daftar Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->getMahasiswa()
        ];


        return view('mahasiswa/index', $data);
    }

    public function detail($id)
    {
        $mahasiswa = $this->mahasiswaModel->getMahasiswa($id);
        dd($mahasiswa);
    }
}
