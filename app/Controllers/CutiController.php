<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CutiModel;
use DateTime;

class CutiController extends BaseController
{
    protected $CutiModel;
    public function __construct()
    {
        $this->CutiModel = new CutiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Cuti Karyawan',
            'subtitle' => 'Form Permohonan Cuti',
            'validation' => \Config\Services::validation(),
        ];
        return view('karyawan/v_cuti', $data);
    }

    public function permohonan()
    {
        $valid = $this->validate([
            "mulai_cuti" => [
                "label" => "mulai_cuti",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong"
                ]
            ],
            "akhir_cuti" => [
                "label" => "akhir_cuti",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong"
                ]
            ],
            "jenis_cuti" => [
                "label" => "jenis_cuti",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong"
                ]
            ],
            "keterangan_cuti" => [
                "label" => "keterangan_cuti",
                "rules" => "required",
                "errors" => [
                    "required" => "{field} harus diisi!"
                ]
            ]
        ]);

        // Hitung Durasi Cuti
        $date1 = new DateTime($this->request->getVar('mulai_cuti'));
        $date2 = new DateTime($this->request->getVar('akhir_cuti'));
        $durasi_cuti = date_diff($date1, $date2)->format("%a");

        if ($valid) {
            $data = [
                'mulai_cuti' => $this->request->getVar('mulai_cuti'),
                'akhir_cuti' => $this->request->getVar('akhir_cuti'),
                'jenis_cuti' => $this->request->getVar('jenis_cuti'),
                'durasi_cuti' => $durasi_cuti,
                'keterangan_cuti' => $this->request->getVar('keterangan_cuti'),
            ];
            $CutiModel = model("CutiModel");
            $CutiModel->insert($data);
            return redirect()->to(base_url('/dashboard'));
        }        
        else {
            return redirect()->to(base_url('/cuti'))->withInput()->with('validation', $this->validator);
        }
    }

    public function lihatCuti()
    {
        $cuti = $this->CutiModel->findAll();
        $data = [
            'title' => 'Cuti Karyawan',
            'subtitle' => 'Home',
            'tabelCuti' => $cuti
        ];
        return view('staffHRD/v_lihatCuti', $data);
    }

    public function detailCuti($id)
    {
        $cuti = $this->CutiModel->where('id_cuti', $id)->first();
        $data = [
            'title' => 'Cuti Karyawan',
            'subtitle' => 'Detail Cuti',
            'tabelCuti' => $cuti
        ];
        return view('staffHRD/v_detailCuti', $data);
    }
    
    public function approveCuti()
    {
        $cuti = $this->CutiModel->findAll();
        $data = [
            'title' => 'Cuti Karyawan',
            'subtitle' => 'Home',
            'tabelCuti' => $cuti
        ];
        return view('gm/v_approveCuti', $data);
    }
}
