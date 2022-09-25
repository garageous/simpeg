<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StrukturOrganisasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_so' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_so' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'jumlah_bagian' => [
                'type' => 'INT',
                'constraint' => 2
            ],
            'id_bagian' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ]
        ]);
        $this->forge->addKey('id_so', true);
        $this->forge->addForeignKey('id_bagian', 'bagian', 'id_bagian');
        $this->forge->createTable('struktur');
    }

    public function down()
    {
        $this->forge->dropForeignKey('struktur', 'struktur_id_bagian_foreign');
        $this->forge->dropTable('struktur');

    }
}
