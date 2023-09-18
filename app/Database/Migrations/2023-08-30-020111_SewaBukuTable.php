<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SewaBukuTable extends Migration
{
    private $table = 'sewa_buku';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_peminjam' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'nama_buku' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'tanggal_pinjam' => [
                'type' => 'date',
            ],
            'durasi_jam' => [
                'type' => 'int',
                'unsigned' => true,
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
