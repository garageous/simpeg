<?php

namespace App\Models;

use CodeIgniter\Model;

class JobExModel extends Model
{
    protected $table            = 'jobex';
    protected $allowedFields    = ['nama_perusahaan', 'bidang_usaha', 'email_perusahaan', 'telp_perusahaan', 'prov_perusahaan', 'kota_perusahaan', 'kec_perusahaan', 'kel_perusahaan', 'alamat_perusahaan', 'dari_lastjob', 'sampai_lastjob', 'jabatan_lastjob', 'gaji_lastjob', 'tunjangan_lastjob', 'bonus_lastjob', 'insentif_lastjob', 'benefit_lastjob', 'jobdesk_lastjob', 'resign_lastjob', 'id_karyawan'];
}
