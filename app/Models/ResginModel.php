<?php

namespace App\Models;

use CodeIgniter\Model;

class ResginModel extends Model
{
    protected $table            = 'resgin';
    protected $primaryKey       = 'id_resgin';
    protected $allowedFields    = ['alasan', 'ket_resign', 'tgl_resign', 'ttd_karyawan', 'tgl_ttd_resign', 'pesan', 'status_resign', 'id_karyawan'];

    // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
}
