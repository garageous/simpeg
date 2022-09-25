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
        // $valid = $this->validate([
        //     "nama_so" => [
        //         "label" => "nama_so",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong"
        //         ]
        //     ],
        //     "jumlah_bagian" => [
        //         "label" => "jumlah_bagian",
        //         "rules" => "required|numeric",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong",
        //             "numeric" => "Tidak valid"
        //         ]
        //     ],
        // ]);

        // if ($valid) {
        //     $dataBagian =[
        //         'nama_bagian' => $this->request->getVar('nama_bagian')
        //     ];
        //     $BagianModel = model("BagianModel");
        //     $BagianModel->insert($dataBagian);

        //     $id_bagian = $this->BagianModel->insertID();
        //     $dataStruktur = [
        //         'nama_so' => $this->request->getVar('nama_so'),
        //         'jumlah_bagian' => $this->request->getVar('jumlah_bagian'),
        //         'id_bagian' => $id_bagian,
        //     ];
        //     $StrukturModel = model("StrukturModel");
        //     $StrukturModel->insert($dataStruktur);

        //     return redirect()->to(base_url('/HRD/dashboard'));
        // }        
        // else {
        //     return redirect()->to(base_url('/struktur'))->withInput()->with('validation', $this->validator);
        // }

        // if (!$this->validate([
        //     "nama_so" => [
        //         "label" => "nama_so",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong"
        //         ]
        //     ],
        //     "jumlah_bagian" => [
        //         "label" => "jumlah_bagian",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong"
        //         ]
        //     ]
        // ])) {
        //     return redirect()->to(base_url('/struktur'))->withInput();
        // }

        // $this->BagianModel->save([
        //     'nama_bagian' => $this->request->getVar('nama_bagian')
        // ]);

        // $id_bagian = $this->BagianModel->insertID();
        // $this->StrukturModel->save([
        //     'nama_so' => $this->request->getVar('nama_so'),
        //     'jumlah_bagian' => $this->request->getVar('jumlah_bagian'),
        //     'id_bagian' => $id_bagian
        // ]);


        $dataBagian = ['nama_bagian' => $this->request->getVar('nama_bagian')];
        $this->BagianModel->insert($dataBagian);

        $id_bagian = $this->BagianModel->insertID();
        $dataStruktur = [
            'nama_so' => $this->request->getVar('nama_so'),
            'jumlah_bagian' => $this->request->getVar('jumlah_bagian'),
            'id_bagian' => $id_bagian
        ];
        $this->StrukturModel->insert($dataStruktur);

        return redirect()->to(base_url('/HRD/dashboard'));
    }
}
