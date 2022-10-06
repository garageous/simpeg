<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Training extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_training' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pelatihan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'institusi' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'durasi_training' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'mulai_training' => [
                'type' => 'DATE',
            ],
            'akhir_training' => [
                'type' => 'DATE',
            ],
            'status_training' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'biaya_training' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'akomodasi' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'biaya_akomodasi' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'pesan' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
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
        $this->forge->addKey('id_training', true);
        $this->forge->addForeignKey('id_karyawan', 'karyawan', 'id_karyawan');
        $this->forge->createTable('training');

        // $fields = [
            
        // ];
        // $this->forge->addColumn('training', $fields);
    }

    public function down()
    {
        $this->forge->dropForeignKey('training', 'training_id_karyawan_foreign');
        $this->forge->dropTable('training', true);
    }
}
