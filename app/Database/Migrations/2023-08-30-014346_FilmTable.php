<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FilmTable extends Migration
{
    private $table = 'film';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_film' => [
                'type' =>'varchar',
                'constraint' => 20,
            ],
            'genre' => [
                'type' => 'varchar',
                'constraint' => 10,
            ],
            'deskripsi' => [
                'type' => 'text',
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
