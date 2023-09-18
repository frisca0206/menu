<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SewaBukuTableSeeder extends Seeder
{
    private $table = 'sewa_buku';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_peminjam' => 'hadi',
                'nama_buku' => 'A Tale of Two Cities',
                'tanggal_pinjam' => 2023-10-05,
                'durasi_jam' => 3,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
