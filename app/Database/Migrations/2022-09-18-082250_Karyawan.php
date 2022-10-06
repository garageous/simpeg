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
            'nomor_karyawan' => [
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
            'unit_kerja' => [
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
                'constraint' => '1',
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
                'constraint' => '1',
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
            'nama_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'jk_pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => '1',
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
