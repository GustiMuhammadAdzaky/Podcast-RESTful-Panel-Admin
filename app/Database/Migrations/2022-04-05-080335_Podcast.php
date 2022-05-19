<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Podcast extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'voice_url' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'image_url' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('podcast');
    }

    public function down()
    {
        $this->forge->dropTable('podcast');
    }
}