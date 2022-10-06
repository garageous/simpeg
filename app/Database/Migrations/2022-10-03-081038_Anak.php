<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anak extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_anak' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'jk_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '1',
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
            'id_karyawan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'created_at' => [
                'type' => 'DATE',
            ],
            'updated_at' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addKey('id_anak', true);
        $this->forge->addForeignKey('id_karyawan', 'karyawan', 'id_karyawan');
        $this->forge->createTable('anak');
    }

    public function down()
    {
        $this->forge->dropForeignKey('anak', 'anak_id_karyawan_foreign');
        $this->forge->dropTable('anak');
    }
}
