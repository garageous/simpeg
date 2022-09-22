<?php

namespace App\Controllers;
use App\Models\CutiModel;

class Home extends BaseController
{
    protected $CutiModel;
    public function __construct()
    {
        $this->CutiModel = new CutiModel();
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

    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('v_login', $data);
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
        $data = [
            'title' => 'SIMPEG',
            'subtitle' => 'Dashboard'
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
}
