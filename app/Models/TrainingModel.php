<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainingModel extends Model
{
    protected $table            = 'training';
    protected $primaryKey       = 'id_training';
    protected $allowedFields    = ['nama_pelatihan','institusi', 'durasi_training','mulai_training', 'akhir_training', 'biaya_training', 'akomodasi', 'biaya_akomodasi', 'pesan', 'status_training', 'id_karyawan'];

    // Dates
    protected $useTimestamps = true;
}
