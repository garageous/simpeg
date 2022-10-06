<?php

namespace App\Controllers;
use App\Models\CutiModel;
use App\Models\KaryawanModel;

class Home extends BaseController
{
    protected $CutiModel;
    public function __construct()
    {
        $this->CutiModel = new CutiModel();
        $this->KaryawanModel = new KaryawanModel();
    }

    public function oretan()
    {
        $data = [
            'title' => 'SIMPEG',
            'subtitle' => 'Dashboard',
            // 'tabelCuti' => $cuti
        ];
        return view('otak-atik', $data);
    }
    
    public function index()
    {
        $cuti = $this->CutiModel->findAll();
        $data = [
            'title' => 'SIMPEG',
            'subtitle' => 'Dashboard',
            'tabelCuti' => $cuti
        ];
        return view('karyawan/v_dashboard', $data);
    }

    public function staff()
    {
        $karyawan = $this->KaryawanModel->findAll();
        $data = [
            'title' => 'SIMPEG',
            'subtitle' => 'Dashboard',
            'tabelKaryawan' => $karyawan
        ];
        return view('staffHRD/v_dashboardStaff', $data);
    }

    public function gm()
    {
        $data = [
            'title' => 'SIMPEG',
            'subtitle' => 'Dashboard'
        ];
        return view('gm/v_dashboardGM', $data);
    }

    public function hrd()
    {
        $karyawan = $this->KaryawanModel->findAll();
        $data = [
            'title' => 'SIMPEG',
            'subtitle' => 'Dashboard',
            'tabelKaryawan' => $karyawan
        ];
        return view('managerHRD/v_dashboardHRD', $data);
    }
}
