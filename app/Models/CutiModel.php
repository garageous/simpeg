<?php

namespace App\Models;

use CodeIgniter\Model;

class CutiModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'cuti';
    protected $primaryKey       = 'id_cuti';
    protected $allowedFields    = ['mulai_cuti', 'akhir_cuti', 'jenis_cuti', 'durasi_cuti', 'status_cuti', 'keterangan_cuti', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'date';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

}
