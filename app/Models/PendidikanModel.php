<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table            = 'pendidikan';
    protected $primaryKey       = 'id_pend';
    protected $allowedFields    = ['jenjang', 'nama_sekolah', 'jurusan', 'gpa', 'thn_masuk', 'thn_lulus', 'id_karyawan'];
}
