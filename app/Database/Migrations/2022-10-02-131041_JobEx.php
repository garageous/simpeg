<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JobEx extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jobex' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
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
            'id_karyawan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ]
        ]);
        $this->forge->addKey('id_jobex', true);
        $this->forge->addForeignKey('id_karyawan', 'karyawan', 'id_karyawan');
        $this->forge->createTable('jobex');
    }

    public function down()
    {
        $this->forge->dropForeignKey('jobex', 'jobex_id_karyawan_foreign');
        $this->forge->dropTable('jobex');
    }
}
