<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dbcontent extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_content' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'author' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'picture' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'text' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'category' => [
                'type'       => 'BIGINT',
                'constraint' => '10',
                'unsigned'   => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],

        ]);
        $this->forge->addKey('id_content', true);
        $this->forge->addForeignKey('category','category','id_category','CASCADE','CASCADE');
        $this->forge->createTable('content');
    }

    public function down()
    {
        $this->forge->dropTable('content');
    }
}
