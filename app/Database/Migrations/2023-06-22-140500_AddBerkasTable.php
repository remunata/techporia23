<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBerkasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'berkas_id' => [
                'type'              => 'INT',
                'unsigned'          => true,
                'unique'            => true,
                'auto_increment'    => true,
            ],
            'tim_id' => [
                'type'              => 'VARCHAR',
                'constraint'        => 6,
            ],
            'nama_berkas' => [
                'type'              => 'TEXT',
            ] ,
            'jenis' => [
                'type'              => 'ENUM',
                'constraint'        => ['proposal', 'source_code'],
                'default'           => 'proposal',
            ],
        ]);
        $this->forge->addKey('berkas_id', true);
        $this->forge->addForeignKey('tim_id', 'data_tim', 'tim_id');
        $this->forge->createTable('berkas');
    }

    public function down()
    {
        $this->forge->dropTable('berkas');
    }
}