<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Db2 extends Migration
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
            'date_posted' => [
                'type'       => 'DATE',
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
                'type'       => 'INT',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id_content', true);
        $this->forge->createTable('content');

        $this->forge->addField([
            'id_category' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
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
        $this->forge->dropTable('content');
        $this->forge->dropTable('category');
    }
}
