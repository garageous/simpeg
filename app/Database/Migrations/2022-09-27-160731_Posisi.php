<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Posisi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_posisi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_posisi' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'aktif_sejak' => [
                'type' => 'DATE'
            ],
            'id_so' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_bagian' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ]
        ]);
        $this->forge->addKey('id_posisi', true);
        $this->forge->addForeignKey('id_so', 'struktur', 'id_so');
        $this->forge->addForeignKey('id_bagian', 'bagian', 'id_bagian');
        $this->forge->createTable('posisi');
    }

    public function down()
    {
        $this->forge->dropForeignKey('posisi', 'posisi_id_bagian_foreign');
        $this->forge->dropTable('posisi');
    }
}
