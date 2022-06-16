<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Db extends Migration
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
            'blog_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_content', true);
        $this->forge->createTable('content');
    }

    public function down()
    {
        $this->forge->dropTable('content');
    }
}