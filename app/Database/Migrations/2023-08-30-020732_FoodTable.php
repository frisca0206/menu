<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FoodTable extends Migration
{
    private $table = 'food';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_makanan' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
            'deskripsi' => [
                'type' => 'text',
            ],
            'harga' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
