<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'nama_karyawan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_panggilan' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'nik_karyawan' => [
                'type' => 'VARCHAR',
                'constraint' => '16',
            ],
            'posisi' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'departemen' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'status_karyawwan' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '9',
            ],
            'kewarganegaraan' => [
                'type' => 'VARCHAR',
                'constraint' => '3',
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '9',
            ],
            'goldar' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'provKtp_kr' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kotaKtp_kr' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kecKtp_kr' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kelKtp_kr' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamatKtp_kr' => [
                'type' => 'TEXT',
            ],
            'prov_kr' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kota_kr' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kec_kr' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kel_kr' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat_kr' => [
                'type' => 'TEXT',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'status_pernikahan' => [
                'type' => 'VARCHAR',
                'constraint' => '6',
            ],
            'anak_ke' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'bersaudara' => [
                'type' => 'INT',
                'constraint' => '2',
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jk_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'dob_ayah' => [
                'type' => 'DATE',
            ],
            'pend_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'job_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],            
            'nama_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jk_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'dob_ibu' => [
                'type' => 'DATE',
            ],
            'pend_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'job_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jk_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'dob_saudara' => [
                'type' => 'DATE',
            ],
            'pend_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'job_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jk_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'dob_pasangan' => [
                'type' => 'DATE',
            ],
            'pend_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'job_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jk_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'dob_anak' => [
                'type' => 'DATE',
            ],
            'pend_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'job_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'jenjang' => [
                'type' => 'VARCHAR',
                'constraint' => '3',
            ],
            'nama_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'gpa' => [
                'type' => 'FLOAT',
                'constraint' => '4',
            ],
            'thn_masuk' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
            ],
            'jenis_kursus' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'thn_kursus' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
            ],
            'durasi_kursus' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'ijazah_kursus' => [
                'type' => 'TEXT',
            ],
            'bahasa' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'bahasa' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'tertulis' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'lisan' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'baca' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'nama_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'bidang_usaha' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'telp_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'prov_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kota_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kec_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kel_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat_perusahaan' => [
                'type' => 'TEXT',
            ],
            'dari_lastjob' => [
                'type' => 'DATE',
            ],
            'sampai_lastjob' => [
                'type' => 'DATE',
            ],
            'jabatan_lastjob' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'gaji_lastjob' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'tunjangan_lastjob' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'bonus_lastjob' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'insentif_lastjob' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'benefit_lastjob' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'jobdesk_lastjob' => [
                'type' => 'TEXT',
            ],
            'resign_lastjob' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('karyawan');
    }

    public function down()
    {
        $this->forge->dropTable('karyawan');
    }
}
