<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KaryawanModel;
use App\Models\WilayahModel;

class AkunController extends BaseController
{
    // protected $WilayahModel;
    protected $KaryawanModel;
    public function __construct()
    {
        // $this->WilayahModel = new WilayahModel();
        $this->KaryawanModel = new KaryawanModel();
    }

    public function staff()
    {
        // $wilayah = $this->WilayahModel->findAll();
        $data = [
            'title' => 'Pendaftaran Karyawan',
            'subtitle' => 'Pendaftaran Karyawan',
            'validation' => \Config\Services::validation(),
            // 'wilayah' => $wilayah
        ];
        return view('staffHRD/v_pendaftaran', $data);
    }

    public function store()
    {
        // Cara 1
        // if (!$this->validate([
        //     "nama_karyawan" => [
        //         "label" => "nama_karyawan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "nama_panggilan" => [
        //         "label" => "nama_panggilan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "foto" => [
        //         "label" => "foto",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "{field} belum diupload!"
        //         ]
        //     ],
        //     "nik_karyawan" => [
        //         "label" => "nik_karyawan",
        //         "rules" => "required|numeric",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid"
        //         ]
        //     ],
        //     "posisi" => [
        //         "label" => "posisi",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "departemen" => [
        //         "label" => "departemen",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "status_karyawan" => [
        //         "label" => "status_karyawan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "tempat_lahir" => [
        //         "label" => "tempat_lahir",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "tgl_lahir" => [
        //         "label" => "tgl_lahir",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jenis_kelamin" => [
        //         "label" => "jenis_kelamin",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kewarganegaraan" => [
        //         "label" => "kewarganegaraan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "agama" => [
        //         "label" => "agama",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "goldar" => [
        //         "label" => "goldar",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "provKtp_kr" => [
        //         "label" => "provKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kotaKtp_kr" => [
        //         "label" => "kotaKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kecKtp_kr" => [
        //         "label" => "kecKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kelKtp_kr" => [
        //         "label" => "kelKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "alamatKtp_kr" => [
        //         "label" => "alamatKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "prov_kr" => [
        //         "label" => "prov_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kota_kr" => [
        //         "label" => "kota_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kec_kr" => [
        //         "label" => "kec_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kel_kr" => [
        //         "label" => "kel_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "alamat_kr" => [
        //         "label" => "alamat_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "email" => [
        //         "label" => "email",
        //         "rules" => "required|valid_email",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "no_telp" => [
        //         "label" => "no_telp",
        //         "rules" => "required|numeric",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid"
        //         ]
        //     ],
        //     "status_pernikahan" => [
        //         "label" => "status_pernikahan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "anak_ke" => [
        //         "label" => "anak_ke",
        //         "rules" => "required|numeric|greater_than[0]",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid",
        //             "greater_than[0]" => "Invalid"
        //         ]
        //     ],
        //     "bersaudara" => [
        //         "label" => "bersaudara",
        //         "rules" => "required|numeric|greater_than[0]",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid",
        //             "greater_than[0]" => "Invalid"
        //         ]
        //     ],
        //     "nama_ayah" => [
        //         "label" => "nama_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jk_ayah" => [
        //         "label" => "jk_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "dob_ayah" => [
        //         "label" => "dob_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "pend_ayah" => [
        //         "label" => "pend_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "job_ayah" => [
        //         "label" => "job_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "nama_ibu" => [
        //         "label" => "nama_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jk_ibu" => [
        //         "label" => "jk_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "dob_ibu" => [
        //         "label" => "dob_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "pend_ibu" => [
        //         "label" => "pend_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "job_ibu" => [
        //         "label" => "job_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "nama_saudara" => [
        //         "label" => "nama_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jk_saudara" => [
        //         "label" => "jk_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "dob_saudara" => [
        //         "label" => "dob_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "pend_saudara" => [
        //         "label" => "pend_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "job_saudara" => [
        //         "label" => "job_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jenjang" => [
        //         "label" => "jenjang",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "nama_sekolah" => [
        //         "label" => "nama_sekolah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jurusan" => [
        //         "label" => "jurusan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "gpa" => [
        //         "label" => "gpa",
        //         "rules" => "required|decimal|greater_than[0]",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "thn_masuk" => [
        //         "label" => "thn_masuk",
        //         "rules" => "required|numeric",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "thn_lulus" => [
        //         "label" => "thn_lulus",
        //         "rules" => "required|numeric",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid"
        //         ]
        //     ],
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to(base_url('/staff/pendaftaran'))->withInput()->with('validation', $validation);
        // }

        $username =  strstr($this->request->getVar('email'), '@', true) . $this->request->getVar('id_karyawan');
        $password = $username . '_1234';
        
        // $this->KaryawanModel->save([
        //     'id_karyawan' => $this->request->getVar('id_karyawan'),
        //     'nama_karyawan' => $this->request->getVar('nama_karyawan'),
        //     'nama_panggilan' => $this->request->getVar('nama_panggilan'),
        //     'foto' => $this->request->getVar('foto'),
        //     'nik_karyawan' => $this->request->getVar('nik_karyawan'),
        //     'posisi' => $this->request->getVar('posisi'),
        //     'departemen' => $this->request->getVar('departemen'),
        //     'status_karyawan' => $this->request->getVar('status_karyawan'),
        //     'tempat_lahir' => $this->request->getVar('tempat_lahir'),
        //     'tgl_lahir' => $this->request->getVar('tgl_lahir'),
        //     'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        //     'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
        //     'agama' => $this->request->getVar('agama'),
        //     'goldar' => $this->request->getVar('goldar'),
        //     'provKtp_kr' => $this->request->getVar('provKtp_kr'),
        //     'kotaKtp_kr' => $this->request->getVar('kotaKtp_kr'),
        //     'kecKtp_kr' => $this->request->getVar('kecKtp_kr'),
        //     'kelKtp_kr' => $this->request->getVar('kelKtp_kr'),
        //     'alamatKtp_kr' => $this->request->getVar('alamatKtp_kr'),
        //     'prov_kr' => $this->request->getVar('prov_kr'),
        //     'kota_kr' => $this->request->getVar('kota_kr'),
        //     'kec_kr' => $this->request->getVar('kec_kr'),
        //     'kel_kr' => $this->request->getVar('kel_kr'),
        //     'alamat_kr' => $this->request->getVar('alamat_kr'),
        //     'email' => $this->request->getVar('email'),
        //     'no_telp' => $this->request->getVar('no_telp'),
        //     'status_pernikahan' => $this->request->getVar('status_pernikahan'),
        //     'anak_ke' => $this->request->getVar('anak_ke'),
        //     'bersaudara' => $this->request->getVar('bersaudara'),
        //     'nama_ayah' => $this->request->getVar('nama_ayah'),
        //     'jk_ayah' => $this->request->getVar('jk_ayah'),
        //     'dob_ayah' => $this->request->getVar('dob_ayah'),
        //     'pend_ayah' => $this->request->getVar('pend_ayah'),
        //     'job_ayah' => $this->request->getVar('job_ayah'),
        //     'nama_ibu' => $this->request->getVar('nama_ibu'),
        //     'jk_ibu' => $this->request->getVar('jk_ibu'),
        //     'dob_ibu' => $this->request->getVar('dob_ibu'),
        //     'pend_ibu' => $this->request->getVar('pend_ibu'),
        //     'job_ibu' => $this->request->getVar('job_ibu'),
        //     'nama_saudara' => $this->request->getVar('nama_saudara'),
        //     'jk_saudara' => $this->request->getVar('jk_saudara'),
        //     'dob_saudara' => $this->request->getVar('dob_saudara'),
        //     'pend_saudara' => $this->request->getVar('pend_saudara'),
        //     'job_saudara' => $this->request->getVar('job_saudara'),
        //     'nama_pasangan' => $this->request->getVar('nama_pasangan'),
        //     'jk_pasangan' => $this->request->getVar('jk_pasangan'),
        //     'dob_pasangan' => $this->request->getVar('dob_pasangan'),
        //     'pend_pasangan' => $this->request->getVar('pend_pasangan'),
        //     'job_pasangan' => $this->request->getVar('job_pasangan'),
        //     'nama_anak' => $this->request->getVar('nama_anak'),
        //     'jk_anak' => $this->request->getVar('jk_anak'),
        //     'dob_anak' => $this->request->getVar('dob_anak'),
        //     'pend_anak' => $this->request->getVar('pend_anak'),
        //     'job_anak' => $this->request->getVar('job_anak'),
        //     'jenjang' => $this->request->getVar('jenjang'),
        //     'nama_sekolah' => $this->request->getVar('nama_sekolah'),
        //     'jurusan' => $this->request->getVar('jurusan'),
        //     'gpa' => $this->request->getVar('gpa'),
        //     'thn_masuk' => $this->request->getVar('thn_masuk'),
        //     'thn_lulus' => $this->request->getVar('thn_lulus'),
        //     'jenis_kursus' => $this->request->getVar('jenis_kursus'),
        //     'thn_kursus' => $this->request->getVar('thn_kursus'),
        //     'durasi_kursus' => $this->request->getVar('durasi_kursus'),
        //     'ijazah_kursus' => $this->request->getVar('ijazah_kursus'),
        //     'bahasa' => $this->request->getVar('bahasa'),
        //     'tertulis' => $this->request->getVar('tertulis'),
        //     'lisan' => $this->request->getVar('lisan'),
        //     'baca' => $this->request->getVar('baca'),
        //     'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
        //     'bidang_usaha' => $this->request->getVar('bidang_usaha'),
        //     'email_perusahaan' => $this->request->getVar('email_perusahaan'),
        //     'telp_perusahaan' => $this->request->getVar('telp_perusahaan'),
        //     'prov_perusahaan' => $this->request->getVar('prov_perusahaan'),
        //     'kota_perusahaan' => $this->request->getVar('kota_perusahaan'),
        //     'kec_perusahaan' => $this->request->getVar('kec_perusahaan'),
        //     'kel_perusahaan' => $this->request->getVar('kel_perusahaan'),
        //     'alamat_perusahaan' => $this->request->getVar('alamat_perusahaan'),
        //     'dari_lastjob' => $this->request->getVar('dari_lastjob'),
        //     'sampai_lastjob' => $this->request->getVar('sampai_lastjob'),
        //     'jabatan_lastjob' => $this->request->getVar('jabatan_lastjob'),
        //     'gaji_lastjob' => $this->request->getVar('gaji_lastjob'),
        //     'tunjangan_lastjob' => $this->request->getVar('tunjangan_lastjob'),
        //     'bonus_lastjob' => $this->request->getVar('bonus_lastjob'),
        //     'insentif_lastjob' => $this->request->getVar('insentif_lastjob'),
        //     'benefit_lastjob' => $this->request->getVar('benefit_lastjob'),
        //     'jobdesk_lastjob' => $this->request->getVar('jobdesk_lastjob'),
        //     'resign_lastjob' => $this->request->getVar('resign_lastjob'),
        //     'username' => $username,
        //     'password' => $password
        // ]);

        // return redirect()->to(base_url('/staff/dashboard'));

        // Cara 2
        // $valid = $this->validate([
        //     "nama_karyawan" => [
        //         "label" => "nama_karyawan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "nama_panggilan" => [
        //         "label" => "nama_panggilan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "foto" => [
        //         "label" => "foto",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "{field} belum diupload!"
        //         ]
        //     ],
        //     "nik_karyawan" => [
        //         "label" => "nik_karyawan",
        //         "rules" => "required|numeric",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid"
        //         ]
        //     ],
        //     "posisi" => [
        //         "label" => "posisi",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "departemen" => [
        //         "label" => "departemen",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "status_karyawan" => [
        //         "label" => "status_karyawan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "tempat_lahir" => [
        //         "label" => "tempat_lahir",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "tgl_lahir" => [
        //         "label" => "tgl_lahir",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jenis_kelamin" => [
        //         "label" => "jenis_kelamin",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kewarganegaraan" => [
        //         "label" => "kewarganegaraan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "agama" => [
        //         "label" => "agama",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "goldar" => [
        //         "label" => "goldar",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "provKtp_kr" => [
        //         "label" => "provKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kotaKtp_kr" => [
        //         "label" => "kotaKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kecKtp_kr" => [
        //         "label" => "kecKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kelKtp_kr" => [
        //         "label" => "kelKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "alamatKtp_kr" => [
        //         "label" => "alamatKtp_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "prov_kr" => [
        //         "label" => "prov_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kota_kr" => [
        //         "label" => "kota_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kec_kr" => [
        //         "label" => "kec_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "kel_kr" => [
        //         "label" => "kel_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "alamat_kr" => [
        //         "label" => "alamat_kr",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "email" => [
        //         "label" => "email",
        //         "rules" => "required|valid_email",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "no_telp" => [
        //         "label" => "no_telp",
        //         "rules" => "required|numeric",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid"
        //         ]
        //     ],
        //     "status_pernikahan" => [
        //         "label" => "status_pernikahan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "anak_ke" => [
        //         "label" => "anak_ke",
        //         "rules" => "required|numeric|greater_than[0]",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid",
        //             "greater_than[0]" => "Invalid"
        //         ]
        //     ],
        //     "bersaudara" => [
        //         "label" => "bersaudara",
        //         "rules" => "required|numeric|greater_than[0]",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid",
        //             "greater_than[0]" => "Invalid"
        //         ]
        //     ],
        //     "nama_ayah" => [
        //         "label" => "nama_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jk_ayah" => [
        //         "label" => "jk_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "dob_ayah" => [
        //         "label" => "dob_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "pend_ayah" => [
        //         "label" => "pend_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "job_ayah" => [
        //         "label" => "job_ayah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "nama_ibu" => [
        //         "label" => "nama_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jk_ibu" => [
        //         "label" => "jk_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "dob_ibu" => [
        //         "label" => "dob_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "pend_ibu" => [
        //         "label" => "pend_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "job_ibu" => [
        //         "label" => "job_ibu",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "nama_saudara" => [
        //         "label" => "nama_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jk_saudara" => [
        //         "label" => "jk_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "dob_saudara" => [
        //         "label" => "dob_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "pend_saudara" => [
        //         "label" => "pend_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "job_saudara" => [
        //         "label" => "job_saudara",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jenjang" => [
        //         "label" => "jenjang",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "nama_sekolah" => [
        //         "label" => "nama_sekolah",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "jurusan" => [
        //         "label" => "jurusan",
        //         "rules" => "required",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "gpa" => [
        //         "label" => "gpa",
        //         "rules" => "required|decimal|greater_than[0]",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "thn_masuk" => [
        //         "label" => "thn_masuk",
        //         "rules" => "required|numeric",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!"
        //         ]
        //     ],
        //     "thn_lulus" => [
        //         "label" => "thn_lulus",
        //         "rules" => "required|numeric",
        //         "errors" => [
        //             "required" => "Tidak boleh kosong!",
        //             "numeric" => "Invalid"
        //         ]
        //     ],
        // ]);

        // if ($valid) {
        //     $data = [
        //         'username' => $username,
        //         'password' => $password,
        //         'nama_karyawan' => $this->request->getVar('nama_karyawan'),
        //         'nama_panggilan' => $this->request->getVar('nama_panggilan'),
        //         'foto' => $this->request->getVar('foto'),
        //         'nik_karyawan' => $this->request->getVar('nik_karyawan'),
        //         'posisi' => $this->request->getVar('posisi'),
        //         'departemen' => $this->request->getVar('departemen'),
        //         'status_karyawan' => $this->request->getVar('status_karyawan'),
        //         'tempat_lahir' => $this->request->getVar('tempat_lahir'),
        //         'tgl_lahir' => $this->request->getVar('tgl_lahir'),
        //         'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        //         'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
        //         'agama' => $this->request->getVar('agama'),
        //         'goldar' => $this->request->getVar('goldar'),
        //         'provKtp_kr' => $this->request->getVar('provKtp_kr'),
        //         'kotaKtp_kr' => $this->request->getVar('kotaKtp_kr'),
        //         'kecKtp_kr' => $this->request->getVar('kecKtp_kr'),
        //         'kelKtp_kr' => $this->request->getVar('kelKtp_kr'),
        //         'alamatKtp_kr' => $this->request->getVar('alamatKtp_kr'),
        //         'prov_kr' => $this->request->getVar('prov_kr'),
        //         'kota_kr' => $this->request->getVar('kota_kr'),
        //         'kec_kr' => $this->request->getVar('kec_kr'),
        //         'kel_kr' => $this->request->getVar('kel_kr'),
        //         'alamat_kr' => $this->request->getVar('alamat_kr'),
        //         'email' => $this->request->getVar('email'),
        //         'no_telp' => $this->request->getVar('no_telp'),
        //         'status_pernikahan' => $this->request->getVar('status_pernikahan'),
        //         'anak_ke' => $this->request->getVar('anak_ke'),
        //         'bersaudara' => $this->request->getVar('bersaudara'),
        //         'nama_ayah' => $this->request->getVar('nama_ayah'),
        //         'jk_ayah' => $this->request->getVar('jk_ayah'),
        //         'dob_ayah' => $this->request->getVar('dob_ayah'),
        //         'pend_ayah' => $this->request->getVar('pend_ayah'),
        //         'job_ayah' => $this->request->getVar('job_ayah'),
        //         'nama_ibu' => $this->request->getVar('nama_ibu'),
        //         'jk_ibu' => $this->request->getVar('jk_ibu'),
        //         'dob_ibu' => $this->request->getVar('dob_ibu'),
        //         'pend_ibu' => $this->request->getVar('pend_ibu'),
        //         'job_ibu' => $this->request->getVar('job_ibu'),
        //         'nama_saudara' => $this->request->getVar('nama_saudara'),
        //         'jk_saudara' => $this->request->getVar('jk_saudara'),
        //         'dob_saudara' => $this->request->getVar('dob_saudara'),
        //         'pend_saudara' => $this->request->getVar('pend_saudara'),
        //         'job_saudara' => $this->request->getVar('job_saudara'),
        //         'nama_pasangan' => $this->request->getVar('nama_pasangan'),
        //         'jk_pasangan' => $this->request->getVar('jk_pasangan'),
        //         'dob_pasangan' => $this->request->getVar('dob_pasangan'),
        //         'pend_pasangan' => $this->request->getVar('pend_pasangan'),
        //         'job_pasangan' => $this->request->getVar('job_pasangan'),
        //         'nama_anak' => $this->request->getVar('nama_anak'),
        //         'jk_anak' => $this->request->getVar('jk_anak'),
        //         'dob_anak' => $this->request->getVar('dob_anak'),
        //         'pend_anak' => $this->request->getVar('pend_anak'),
        //         'job_anak' => $this->request->getVar('job_anak'),
        //         'jenjang' => $this->request->getVar('jenjang'),
        //         'nama_sekolah' => $this->request->getVar('nama_sekolah'),
        //         'jurusan' => $this->request->getVar('jurusan'),
        //         'gpa' => $this->request->getVar('gpa'),
        //         'thn_masuk' => $this->request->getVar('thn_masuk'),
        //         'thn_lulus' => $this->request->getVar('thn_lulus'),
        //         'jenis_kursus' => $this->request->getVar('jenis_kursus'),
        //         'thn_kursus' => $this->request->getVar('thn_kursus'),
        //         'durasi_kursus' => $this->request->getVar('durasi_kursus'),
        //         'ijazah_kursus' => $this->request->getVar('ijazah_kursus'),
        //         'bahasa' => $this->request->getVar('bahasa'),
        //         'tertulis' => $this->request->getVar('tertulis'),
        //         'lisan' => $this->request->getVar('lisan'),
        //         'baca' => $this->request->getVar('baca'),
        //         'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
        //         'bidang_usaha' => $this->request->getVar('bidang_usaha'),
        //         'email_perusahaan' => $this->request->getVar('email_perusahaan'),
        //         'telp_perusahaan' => $this->request->getVar('telp_perusahaan'),
        //         'prov_perusahaan' => $this->request->getVar('prov_perusahaan'),
        //         'kota_perusahaan' => $this->request->getVar('kota_perusahaan'),
        //         'kec_perusahaan' => $this->request->getVar('kec_perusahaan'),
        //         'kel_perusahaan' => $this->request->getVar('kel_perusahaan'),
        //         'alamat_perusahaan' => $this->request->getVar('alamat_perusahaan'),
        //         'dari_lastjob' => $this->request->getVar('dari_lastjob'),
        //         'sampai_lastjob' => $this->request->getVar('sampai_lastjob'),
        //         'jabatan_lastjob' => $this->request->getVar('jabatan_lastjob'),
        //         'gaji_lastjob' => $this->request->getVar('gaji_lastjob'),
        //         'tunjangan_lastjob' => $this->request->getVar('tunjangan_lastjob'),
        //         'bonus_lastjob' => $this->request->getVar('bonus_lastjob'),
        //         'insentif_lastjob' => $this->request->getVar('insentif_lastjob'),
        //         'benefit_lastjob' => $this->request->getVar('benefit_lastjob'),
        //         'jobdesk_lastjob' => $this->request->getVar('jobdesk_lastjob'),
        //         'resign_lastjob' => $this->request->getVar('resign_lastjob'),
        //         'created_at' => $this->request->getVar('created_at'),
        //         'updated_at' => $this->request->getVar('updated_at'),
        //     ];
        //     $KaryawanModel = model("KaryawanModel");
        //     $KaryawanModel->insert($data);
        //     return redirect()->to(base_url('/staff/dashboard'));
        // }        
        // else {
        //     return redirect()->to(base_url('/staff/pendaftaran'))->withInput()->with('validation', $this->validator);
        // }

        $test = [
            $this->request->getVar(),
            'username' => $username,
            'password' => $password
        ];
        dd($test);
    }
}
