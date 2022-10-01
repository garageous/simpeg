<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BagianModel;
use App\Models\StrukturModel;

class StrukturController extends BaseController
{
    protected $StrukturModel;
    protected $BagianModel;
    
    public function __construct()
    {
        $this->StrukturModel = new StrukturModel();
        $this->BagianModel = new BagianModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Struktur Organisasi',
            'subtitle' => 'Tambah Struktur Organisasi',
            'validation' => \Config\Services::validation(),
        ];
        return view('managerHRD/v_struktur', $data);
    }

    public function store()
    {
        if (!$this->validate([
            "nama_so" => [
                "label" => "nama_so",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong"
                ]
            ],
            "jumlah_bagian" => [
                "label" => "jumlah_bagian",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong"
                ]
            ]
        ])) {
            return redirect()->to(base_url('/struktur'))->withInput();
        }

        $this->StrukturModel->save([
            'nama_so' => $this->request->getVar('nama_so'),
            'jumlah_bagian' => $this->request->getVar('jumlah_bagian')
        ]);

        $id_so = $this->StrukturModel->insertID();
        $this->BagianModel->save([
            'nama_bagian' => $this->request->getVar('nama_bagian'),
            'id_so' => $id_so
        ]);

        session()->setFlashdata('flash', 'disimpan');
        return redirect()->to(base_url('/HRD/dashboard'));
    }

    // public function formtambah_data()
    // {
    //     if ($this->request->isAJAX()) {
            
    //     }
    //     $tambah_struktur = $this->request->getVar('nama_bagian');

    //     $count_data = count($tambah_struktur);
        
    //     for ($i=0; $i < $count_data; $i++) { 
    //         $this->BagianModel->save([
    //             'nama_bagian' => $tambah_struktur[$i],
    //         ]);
    //     }
    // }
}
