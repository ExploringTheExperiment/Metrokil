<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dbcategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_category' => [
                'type'           => 'BIGINT',
                'constraint'     => '10',
                'unsigned'       => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'code' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'desc_category' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addKey('id_category', true);
        $this->forge->createTable('category');
    }

    public function down()
    {
        $this->forge->dropTable('category');
    }
}
