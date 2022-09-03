<?php

namespace App\Models;

use CodeIgniter\Model;

class Cuti extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cuti';
    protected $primaryKey       = 'id_cuti';
    protected $allowedFields    = ['mulai_cuti', 'akhir_cuti', 'keterangan_cuti', 'created_at',];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

}
