<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbCategoryblog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_blog_category' => [
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

        ]);
        $this->forge->addKey('id_blog_category', true);
        $this->forge->createTable('category_blog');
    }

    public function down()
    {
        $this->forge->dropTable('category_blog');
    }
}

