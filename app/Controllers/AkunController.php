<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KaryawanModel;
use App\Models\PendidikanModel;
use App\Models\WilayahModel;
use DateTime;

class AkunController extends BaseController
{
    // protected $WilayahModel;
    protected $KaryawanModel;
    protected $PendidikanModel;
    public function __construct()
    {
        // $this->WilayahModel = new WilayahModel();
        $this->KaryawanModel = new KaryawanModel();
        $this->PendidikanModel = new PendidikanModel();
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
        if (!$this->validate([
            "nama_karyawan" => [
                "label" => "nama_karyawan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "nama_panggilan" => [
                "label" => "nama_panggilan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "foto" => [
                "label" => "foto",
                "rules" => "mime_in[foto,image/jpg,image/jpeg,image/png]|is_image[foto]",
                "errors" => [
                    "mime_in" => "File yang Anda upload bukan gambar",
                    "is_image" => "File yang Anda upload bukan gambar"
                ]
            ],
            "nik_karyawan" => [
                "label" => "nik_karyawan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid"
                ]
            ],
            "posisi" => [
                "label" => "posisi",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "departemen" => [
                "label" => "departemen",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "unit_kerja" => [
                "label" => "unit_kerja",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "status_karyawan" => [
                "label" => "status_karyawan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "tempat_lahir" => [
                "label" => "tempat_lahir",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "tgl_lahir" => [
                "label" => "tgl_lahir",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jenis_kelamin" => [
                "label" => "jenis_kelamin",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kewarganegaraan" => [
                "label" => "kewarganegaraan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "agama" => [
                "label" => "agama",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "goldar" => [
                "label" => "goldar",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "provKtp_kr" => [
                "label" => "provKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kotaKtp_kr" => [
                "label" => "kotaKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kecKtp_kr" => [
                "label" => "kecKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kelKtp_kr" => [
                "label" => "kelKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "alamatKtp_kr" => [
                "label" => "alamatKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "prov_kr" => [
                "label" => "prov_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kota_kr" => [
                "label" => "kota_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kec_kr" => [
                "label" => "kec_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kel_kr" => [
                "label" => "kel_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "alamat_kr" => [
                "label" => "alamat_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "email" => [
                "label" => "email",
                "rules" => "required|valid_email",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "no_telp" => [
                "label" => "no_telp",
                "rules" => "required|numeric",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid"
                ]
            ],
            "status_pernikahan" => [
                "label" => "status_pernikahan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "anak_ke" => [
                "label" => "anak_ke",
                "rules" => "required|numeric|greater_than[0]",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid",
                    "greater_than[0]" => "Invalid"
                ]
            ],
            "bersaudara" => [
                "label" => "bersaudara",
                "rules" => "required|numeric|greater_than[0]",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid",
                    "greater_than[0]" => "Invalid"
                ]
            ],
            "nama_ayah" => [
                "label" => "nama_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jk_ayah" => [
                "label" => "jk_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "dob_ayah" => [
                "label" => "dob_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "pend_ayah" => [
                "label" => "pend_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "job_ayah" => [
                "label" => "job_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "nama_ibu" => [
                "label" => "nama_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jk_ibu" => [
                "label" => "jk_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "dob_ibu" => [
                "label" => "dob_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "pend_ibu" => [
                "label" => "pend_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "job_ibu" => [
                "label" => "job_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jenjang" => [
                "label" => "jenjang",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "nama_sekolah" => [
                "label" => "nama_sekolah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jurusan" => [
                "label" => "jurusan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "gpa" => [
                "label" => "gpa",
                "rules" => "required|decimal|greater_than[0]",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "thn_masuk" => [
                "label" => "thn_masuk",
                "rules" => "required|numeric",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "thn_lulus" => [
                "label" => "thn_lulus",
                "rules" => "required|numeric",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid"
                ]
            ],
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to(base_url('/staff/pendaftaran'))->withInput()->with('validation', $validation);
            return redirect()->to(base_url('/staff/pendaftaran'))->withInput();
        }

        // Generate nomor karyawan
        $tglLahir = date('Ymd', strtotime($this->request->getVar('tgl_lahir')));
        $tglJoin = date('Ym', $this->request->getVar('created_at'));
        $nomor_karyawan = $tglLahir . $tglJoin;
        
        // Generate Username & Password
        $username =  strstr($this->request->getVar('email'), '@', true) . $tglJoin;
        $password = $username . '_1234';

        // Ambil gambar
        $fileFoto = $this->request->getFile('foto');
        // Cek apakah ada gambar yang diupload
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default-pfp.jpg';
        } else {
            // pindahkan file ke folder img
            $fileFoto->move('img');
            // ambil nama gambar
            $namaFoto = $fileFoto->getName();            
        }


        $this->KaryawanModel->save([
            'nama_karyawan' => $this->request->getVar('nama_karyawan'),
            'nama_panggilan' => $this->request->getVar('nama_panggilan'),
            'nomor_karyawan' => $nomor_karyawan,
            'foto' => $namaFoto,
            'nik_karyawan' => $this->request->getVar('nik_karyawan'),
            'posisi' => $this->request->getVar('posisi'),
            'departemen' => $this->request->getVar('departemen'),
            'unit_kerja' => $this->request->getVar('unit_kerja'),
            'status_karyawan' => $this->request->getVar('status_karyawan'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'agama' => $this->request->getVar('agama'),
            'goldar' => $this->request->getVar('goldar'),
            'provKtp_kr' => $this->request->getVar('provKtp_kr'),
            'kotaKtp_kr' => $this->request->getVar('kotaKtp_kr'),
            'kecKtp_kr' => $this->request->getVar('kecKtp_kr'),
            'kelKtp_kr' => $this->request->getVar('kelKtp_kr'),
            'alamatKtp_kr' => $this->request->getVar('alamatKtp_kr'),
            'prov_kr' => $this->request->getVar('prov_kr'),
            'kota_kr' => $this->request->getVar('kota_kr'),
            'kec_kr' => $this->request->getVar('kec_kr'),
            'kel_kr' => $this->request->getVar('kel_kr'),
            'alamat_kr' => $this->request->getVar('alamat_kr'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'status_pernikahan' => $this->request->getVar('status_pernikahan'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'bersaudara' => $this->request->getVar('bersaudara'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'jk_ayah' => $this->request->getVar('jk_ayah'),
            'dob_ayah' => $this->request->getVar('dob_ayah'),
            'pend_ayah' => $this->request->getVar('pend_ayah'),
            'job_ayah' => $this->request->getVar('job_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'jk_ibu' => $this->request->getVar('jk_ibu'),
            'dob_ibu' => $this->request->getVar('dob_ibu'),
            'pend_ibu' => $this->request->getVar('pend_ibu'),
            'job_ibu' => $this->request->getVar('job_ibu'),
            'nama_saudara' => $this->request->getVar('nama_saudara'),
            'jk_saudara' => $this->request->getVar('jk_saudara'),
            'dob_saudara' => $this->request->getVar('dob_saudara'),
            'pend_saudara' => $this->request->getVar('pend_saudara'),
            'job_saudara' => $this->request->getVar('job_saudara'),
            'nama_pasangan' => $this->request->getVar('nama_pasangan'),
            'jk_pasangan' => $this->request->getVar('jk_pasangan'),
            'dob_pasangan' => $this->request->getVar('dob_pasangan'),
            'pend_pasangan' => $this->request->getVar('pend_pasangan'),
            'job_pasangan' => $this->request->getVar('job_pasangan'),
            'nama_anak' => $this->request->getVar('nama_anak'),
            'jk_anak' => $this->request->getVar('jk_anak'),
            'dob_anak' => $this->request->getVar('dob_anak'),
            'pend_anak' => $this->request->getVar('pend_anak'),
            'job_anak' => $this->request->getVar('job_anak'),
            'jenis_kursus' => $this->request->getVar('jenis_kursus'),
            'thn_kursus' => $this->request->getVar('thn_kursus'),
            'durasi_kursus' => $this->request->getVar('durasi_kursus'),
            'ijazah_kursus' => $this->request->getVar('ijazah_kursus'),
            'bahasa' => $this->request->getVar('bahasa'),
            'tertulis' => $this->request->getVar('tertulis'),
            'lisan' => $this->request->getVar('lisan'),
            'baca' => $this->request->getVar('baca'),
            'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
            'bidang_usaha' => $this->request->getVar('bidang_usaha'),
            'email_perusahaan' => $this->request->getVar('email_perusahaan'),
            'telp_perusahaan' => $this->request->getVar('telp_perusahaan'),
            'prov_perusahaan' => $this->request->getVar('prov_perusahaan'),
            'kota_perusahaan' => $this->request->getVar('kota_perusahaan'),
            'kec_perusahaan' => $this->request->getVar('kec_perusahaan'),
            'kel_perusahaan' => $this->request->getVar('kel_perusahaan'),
            'alamat_perusahaan' => $this->request->getVar('alamat_perusahaan'),
            'dari_lastjob' => $this->request->getVar('dari_lastjob'),
            'sampai_lastjob' => $this->request->getVar('sampai_lastjob'),
            'jabatan_lastjob' => $this->request->getVar('jabatan_lastjob'),
            'gaji_lastjob' => $this->request->getVar('gaji_lastjob'),
            'tunjangan_lastjob' => $this->request->getVar('tunjangan_lastjob'),
            'bonus_lastjob' => $this->request->getVar('bonus_lastjob'),
            'insentif_lastjob' => $this->request->getVar('insentif_lastjob'),
            'benefit_lastjob' => $this->request->getVar('benefit_lastjob'),
            'jobdesk_lastjob' => $this->request->getVar('jobdesk_lastjob'),
            'resign_lastjob' => $this->request->getVar('resign_lastjob'),
            'username' => $username,
            'password' => $password
        ]);

        $id_karyawan = $this->KaryawanModel->insertID();
        $this->PendidikanModel->save([
            'jenjang' => $this->request->getVar('jenjang'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'jurusan' => $this->request->getVar('jurusan'),
            'gpa' => $this->request->getVar('gpa'),
            'thn_masuk' => $this->request->getVar('thn_masuk'),
            'thn_lulus' => $this->request->getVar('thn_lulus'),
            'id_karyawan' => $id_karyawan
        ]);

        session()->setFlashdata('flash', 'disimpan');
        return redirect()->to(base_url('/staff/dashboard'));
    }

    public function detailKaryawan($id_karyawan)
    {
        $data = [
            'title' => 'Data Karyawan',
            'subtitle' => 'Profil Karyawan',
            'karyawan' => $this->KaryawanModel->getKaryawan($id_karyawan)
        ];
        return view('staffHRD/v_detailKaryawan', $data);
    }

    public function editKaryawan($id_karyawan)
    {
        $data = [
            'title' => 'Data Karyawan',
            'subtitle' => 'Edit Data Karyawan',
            'karyawan' => $this->KaryawanModel->getKaryawan($id_karyawan),
            'validation' => \Config\Services::validation(),
        ];
        return view('staffHRD/v_editKaryawan', $data);
    }

    public function update($id_karyawan)
    {
        if (!$this->validate([
            "nama_karyawan" => [
                "label" => "nama_karyawan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "nama_panggilan" => [
                "label" => "nama_panggilan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "foto" => [
                "label" => "foto",
                "rules" => "mime_in[foto,image/jpg,image/jpeg,image/png]|is_image[foto]",
                "errors" => [
                    "mime_in" => "File yang Anda upload bukan gambar",
                    "is_image" => "File yang Anda upload bukan gambar"
                ]
            ],
            "nik_karyawan" => [
                "label" => "nik_karyawan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid"
                ]
            ],
            "posisi" => [
                "label" => "posisi",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "departemen" => [
                "label" => "departemen",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "unit_kerja" => [
                "label" => "unit_kerja",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "status_karyawan" => [
                "label" => "status_karyawan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "tempat_lahir" => [
                "label" => "tempat_lahir",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "tgl_lahir" => [
                "label" => "tgl_lahir",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jenis_kelamin" => [
                "label" => "jenis_kelamin",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kewarganegaraan" => [
                "label" => "kewarganegaraan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "agama" => [
                "label" => "agama",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "goldar" => [
                "label" => "goldar",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "provKtp_kr" => [
                "label" => "provKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kotaKtp_kr" => [
                "label" => "kotaKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kecKtp_kr" => [
                "label" => "kecKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kelKtp_kr" => [
                "label" => "kelKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "alamatKtp_kr" => [
                "label" => "alamatKtp_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "prov_kr" => [
                "label" => "prov_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kota_kr" => [
                "label" => "kota_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kec_kr" => [
                "label" => "kec_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "kel_kr" => [
                "label" => "kel_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "alamat_kr" => [
                "label" => "alamat_kr",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "email" => [
                "label" => "email",
                "rules" => "required|valid_email",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "no_telp" => [
                "label" => "no_telp",
                "rules" => "required|numeric",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid"
                ]
            ],
            "status_pernikahan" => [
                "label" => "status_pernikahan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "anak_ke" => [
                "label" => "anak_ke",
                "rules" => "required|numeric|greater_than[0]",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid",
                    "greater_than[0]" => "Invalid"
                ]
            ],
            "bersaudara" => [
                "label" => "bersaudara",
                "rules" => "required|numeric|greater_than[0]",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid",
                    "greater_than[0]" => "Invalid"
                ]
            ],
            "nama_ayah" => [
                "label" => "nama_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jk_ayah" => [
                "label" => "jk_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "dob_ayah" => [
                "label" => "dob_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "pend_ayah" => [
                "label" => "pend_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "job_ayah" => [
                "label" => "job_ayah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "nama_ibu" => [
                "label" => "nama_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jk_ibu" => [
                "label" => "jk_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "dob_ibu" => [
                "label" => "dob_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "pend_ibu" => [
                "label" => "pend_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "job_ibu" => [
                "label" => "job_ibu",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jenjang" => [
                "label" => "jenjang",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "nama_sekolah" => [
                "label" => "nama_sekolah",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "jurusan" => [
                "label" => "jurusan",
                "rules" => "required",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "gpa" => [
                "label" => "gpa",
                "rules" => "required|decimal|greater_than[0]",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "thn_masuk" => [
                "label" => "thn_masuk",
                "rules" => "required|numeric",
                "errors" => [
                    "required" => "Tidak boleh kosong!"
                ]
            ],
            "thn_lulus" => [
                "label" => "thn_lulus",
                "rules" => "required|numeric",
                "errors" => [
                    "required" => "Tidak boleh kosong!",
                    "numeric" => "Invalid"
                ]
            ],
        ])) {
            return redirect()->to(base_url('/staff/edit' . $this->request->getVar('id_karyawan')))->withInput();
        }

        $latestKaryawan = $this->KaryawanModel->getKaryawan($id_karyawan);
        // Ambil gambar
        $fileFoto = $this->request->getFile('foto');
        // Cek apakah ada gambar yang diupload
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default-pfp.jpg';
        } else {
            // pindahkan file ke folder img
            $fileFoto->move('img');
            // ambil nama gambar
            $namaFoto = $fileFoto->getName();            
        }


        $this->KaryawanModel->save([
            'id_karyawan' => $id_karyawan,
            'nama_karyawan' => $this->request->getVar('nama_karyawan'),
            'nama_panggilan' => $this->request->getVar('nama_panggilan'),
            'nomor_karyawan' => $nomor_karyawan,
            'foto' => $namaFoto,
            'nik_karyawan' => $this->request->getVar('nik_karyawan'),
            'posisi' => $this->request->getVar('posisi'),
            'departemen' => $this->request->getVar('departemen'),
            'unit_kerja' => $this->request->getVar('unit_kerja'),
            'status_karyawan' => $this->request->getVar('status_karyawan'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'agama' => $this->request->getVar('agama'),
            'goldar' => $this->request->getVar('goldar'),
            'provKtp_kr' => $this->request->getVar('provKtp_kr'),
            'kotaKtp_kr' => $this->request->getVar('kotaKtp_kr'),
            'kecKtp_kr' => $this->request->getVar('kecKtp_kr'),
            'kelKtp_kr' => $this->request->getVar('kelKtp_kr'),
            'alamatKtp_kr' => $this->request->getVar('alamatKtp_kr'),
            'prov_kr' => $this->request->getVar('prov_kr'),
            'kota_kr' => $this->request->getVar('kota_kr'),
            'kec_kr' => $this->request->getVar('kec_kr'),
            'kel_kr' => $this->request->getVar('kel_kr'),
            'alamat_kr' => $this->request->getVar('alamat_kr'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'status_pernikahan' => $this->request->getVar('status_pernikahan'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'bersaudara' => $this->request->getVar('bersaudara'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'jk_ayah' => $this->request->getVar('jk_ayah'),
            'dob_ayah' => $this->request->getVar('dob_ayah'),
            'pend_ayah' => $this->request->getVar('pend_ayah'),
            'job_ayah' => $this->request->getVar('job_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'jk_ibu' => $this->request->getVar('jk_ibu'),
            'dob_ibu' => $this->request->getVar('dob_ibu'),
            'pend_ibu' => $this->request->getVar('pend_ibu'),
            'job_ibu' => $this->request->getVar('job_ibu'),
            'nama_saudara' => $this->request->getVar('nama_saudara'),
            'jk_saudara' => $this->request->getVar('jk_saudara'),
            'dob_saudara' => $this->request->getVar('dob_saudara'),
            'pend_saudara' => $this->request->getVar('pend_saudara'),
            'job_saudara' => $this->request->getVar('job_saudara'),
            'nama_pasangan' => $this->request->getVar('nama_pasangan'),
            'jk_pasangan' => $this->request->getVar('jk_pasangan'),
            'dob_pasangan' => $this->request->getVar('dob_pasangan'),
            'pend_pasangan' => $this->request->getVar('pend_pasangan'),
            'job_pasangan' => $this->request->getVar('job_pasangan'),
            'nama_anak' => $this->request->getVar('nama_anak'),
            'jk_anak' => $this->request->getVar('jk_anak'),
            'dob_anak' => $this->request->getVar('dob_anak'),
            'pend_anak' => $this->request->getVar('pend_anak'),
            'job_anak' => $this->request->getVar('job_anak'),
            'jenis_kursus' => $this->request->getVar('jenis_kursus'),
            'thn_kursus' => $this->request->getVar('thn_kursus'),
            'durasi_kursus' => $this->request->getVar('durasi_kursus'),
            'ijazah_kursus' => $this->request->getVar('ijazah_kursus'),
            'bahasa' => $this->request->getVar('bahasa'),
            'tertulis' => $this->request->getVar('tertulis'),
            'lisan' => $this->request->getVar('lisan'),
            'baca' => $this->request->getVar('baca'),
            'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
            'bidang_usaha' => $this->request->getVar('bidang_usaha'),
            'email_perusahaan' => $this->request->getVar('email_perusahaan'),
            'telp_perusahaan' => $this->request->getVar('telp_perusahaan'),
            'prov_perusahaan' => $this->request->getVar('prov_perusahaan'),
            'kota_perusahaan' => $this->request->getVar('kota_perusahaan'),
            'kec_perusahaan' => $this->request->getVar('kec_perusahaan'),
            'kel_perusahaan' => $this->request->getVar('kel_perusahaan'),
            'alamat_perusahaan' => $this->request->getVar('alamat_perusahaan'),
            'dari_lastjob' => $this->request->getVar('dari_lastjob'),
            'sampai_lastjob' => $this->request->getVar('sampai_lastjob'),
            'jabatan_lastjob' => $this->request->getVar('jabatan_lastjob'),
            'gaji_lastjob' => $this->request->getVar('gaji_lastjob'),
            'tunjangan_lastjob' => $this->request->getVar('tunjangan_lastjob'),
            'bonus_lastjob' => $this->request->getVar('bonus_lastjob'),
            'insentif_lastjob' => $this->request->getVar('insentif_lastjob'),
            'benefit_lastjob' => $this->request->getVar('benefit_lastjob'),
            'jobdesk_lastjob' => $this->request->getVar('jobdesk_lastjob'),
            'resign_lastjob' => $this->request->getVar('resign_lastjob'),
            'username' => $username,
            'password' => $password
        ]);

        $id_karyawan = $this->KaryawanModel->insertID();
        $this->PendidikanModel->save([
            'jenjang' => $this->request->getVar('jenjang'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'jurusan' => $this->request->getVar('jurusan'),
            'gpa' => $this->request->getVar('gpa'),
            'thn_masuk' => $this->request->getVar('thn_masuk'),
            'thn_lulus' => $this->request->getVar('thn_lulus'),
            'id_karyawan' => $id_karyawan
        ]);

        session()->setFlashdata('flash', 'disimpan');
        return redirect()->to(base_url('/staff/dashboard'));
    }
}
