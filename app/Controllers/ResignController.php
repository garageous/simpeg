<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ResignController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Resign Karyawan',
            'subtitle' => 'Resign Karyawan'
        ];
        return view('staffHRD/v_lihatResign', $data);
    }
}
