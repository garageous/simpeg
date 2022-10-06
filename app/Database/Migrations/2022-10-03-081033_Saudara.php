<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Saudara extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_saudara' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'jk_saudara' => [
                'type' => 'VARCHAR',
                'constraint' => '1',
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
        $this->forge->addKey('id_saudara', true);
        $this->forge->addForeignKey('id_karyawan', 'karyawan', 'id_karyawan');
        $this->forge->createTable('saudara');
    }

    public function down()
    {
        $this->forge->dropForeignKey('saudara', 'saudara_id_karyawan_foreign');
        $this->forge->dropTable('saudara');
    }
}
