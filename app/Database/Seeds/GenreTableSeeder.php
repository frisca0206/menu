<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    private $table = 'genre';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'genre' => 'adventure',
            ],
            [
                'id' => 2,
                'genre' => 'thriller',
            ],
            [
                'id' => 3,
                'genre' => 'documentary',
            ],
            [
                'id' => 4,
                'genre' => 'romance',
            ],
            [
                'id' => 5,
                'genre' => 'sad',
            ],
            [
                'id' => 6,
                'genre' => 'horror',
            ],
            [
                'id' => 7,
                'genre' => 'komedi',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
