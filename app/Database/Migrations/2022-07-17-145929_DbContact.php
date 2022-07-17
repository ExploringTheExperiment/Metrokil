<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbContact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_contact' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'addres' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'phone' => [
                'type'       => 'INT',
                'constraint' => '14',
            ],
            'text' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'cc_category' => [
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
        $this->forge->addKey('id_contact', true);
        $this->forge->addForeignKey('cc_category','category_cc','id_cc_category','CASCADE','CASCADE');
        $this->forge->createTable('contact');
    }

    public function down()
    {
        $this->forge->dropTable('contact');
    }
}
