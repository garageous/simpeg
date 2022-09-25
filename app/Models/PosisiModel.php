<?php

namespace App\Models;

use CodeIgniter\Model;

class PosisiModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'posisi';
    protected $primaryKey       = 'id_posisi';
    protected $allowedFields    = ['nama_posisi', 'aktif_sejak'];
}
