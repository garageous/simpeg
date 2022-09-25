<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'karyawan';
    protected $primaryKey       = 'id_karyawan';
    protected $allowedFields    = ['username', 'password', 'nama_karyawan', 'nomor_karyawan', 'nama_panggilan', 'foto','nik_karyawan', 'posisi', 'departemen', 'unit_kerja', 'status_karyawan', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'kewarganegaraan', 'agama', 'goldar', 'provKtp_kr', 'kotaKtp_kr' ,'kecKtp_kr', 'kelKtp_kr', 'alamatKtp_kr', 'prov_kr', 'kota_kr', 'kec_kr', 'kel_kr', 'alamat_kr', 'email', 'no_telp', 'status_pernikahan', 'anak_ke', 'bersaudara', 'nama_ayah', 'jk_ayah', 'dob_ayah', 'pend_ayah', 'job_ayah', 'nama_ibu', 'jk_ibu', 'dob_ibu', 'pend_ibu', 'job_ibu', 'nama_saudara', 'jk_saudara', 'dob_saudara', 'pend_saudara', 'job_saudara', 'nama_pasangan', 'jk_pasangan', 'dob_pasangan', 'pend_pasangan', 'job_pasangan', 'nama_anak', 'jk_anak', 'dob_anak', 'pend_anak', 'job_anak', 'jenjang', 'nama_sekolah', 'jurusan', 'gpa', 'thn_masuk', 'thn_lulus', 'jenis_kursus', 'thn_kursus', 'durasi_kursus', 'ijazah_kursus', 'bahasa', 'tertulis', 'lisan', 'baca', 'nama_perusahaan', 'bidang_usaha', 'email_perusahaan', 'telp_perusahaan', 'prov_perusahaan', 'kota_perusahaan', 'kec_perusahaan', 'kel_perusahaan', 'alamat_perusahaan', 'dari_lastjob', 'sampai_lastjob', 'jabatan_lastjob', 'gaji_lastjob', 'tunjangan_lastjob', 'bonus_lastjob', 'insentif_lastjob', 'benefit_lastjob', 'jobdesk_lastjob', 'resign_lastjob'];

    // Dates
    protected $useTimestamps = true;
    
    public function getKaryawan($id_karyawan = false)
    {
        if ($id_karyawan == false) {
            return $this->findAll();
        }

        return $this->where(['id_karyawan' => $id_karyawan])->first();
    }
}
