<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resign extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_resign' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'alasan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'ket_resign' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tgl_resign' => [
                'type' => 'DATE',
            ],
            'ttd_karyawan' => [
                'type' => 'TEXT',
            ],
            'tgl_ttd_resign' => [
                'type' => 'DATE',
            ],
            'pesan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status_resign' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
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
        $this->forge->addKey('id_resign', true);
        $this->forge->addForeignKey('id_karyawan', 'karyawan', 'id_karyawan');
        $this->forge->createTable('resign');
    }

    public function down()
    {
        $this->forge->dropForeignKey('resign', 'resign_id_karyawan_foreign');
        $this->forge->dropTable('resign');
    }
}
