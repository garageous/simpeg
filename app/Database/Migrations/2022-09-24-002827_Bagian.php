<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bagian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bagian' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_bagian' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_so' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ]
        ]);
        $this->forge->addKey('id_bagian', true);
        $this->forge->addForeignKey('id_so', 'struktur', 'id_so');
        $this->forge->createTable('bagian');
    }

    public function down()
    {
        $this->forge->dropForeignKey('bagian', 'bagian_id_so_foreign');
        $this->forge->dropTable('bagian');

    }
}
