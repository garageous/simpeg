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
                // 'unique' => true,
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
            'foto' => [
                'type' => 'TEXT',
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
            'status_karyawan' => [
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
                'null' => true,
            ],
            'jk_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
                'null' => true,
            ],
            'dob_saudara' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'pend_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'job_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'nama_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'jk_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
                'null' => true,
            ],
            'dob_pasangan' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'pend_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'job_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'nama_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'jk_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
                'null' => true,
            ],
            'dob_anak' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'pend_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'job_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'jenjang' => [
                'type' => 'VARCHAR',
                'constraint' => '3',
                'null' => true,
            ],
            'nama_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
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
            'thn_lulus' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
            ],
            'jenis_kursus' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true,
            ],
            'thn_kursus' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
                'null' => true,
            ],
            'durasi_kursus' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'ijazah_kursus' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'bahasa' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'bahasa' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'tertulis' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
                'null' => true,
            ],
            'lisan' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
                'null' => true,
            ],
            'baca' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
                'null' => true,
            ],
            'nama_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'bidang_usaha' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'email_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'telp_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'prov_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'kota_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'kec_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'kel_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'alamat_perusahaan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'dari_lastjob' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'sampai_lastjob' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'jabatan_lastjob' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'gaji_lastjob' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'tunjangan_lastjob' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
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
                'null' => true,
            ],
            'resign_lastjob' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATE',
                'null' => true,
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
