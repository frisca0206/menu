<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('BooksTableSeeder');
        $this->call('FilmTableSeeder');
        $this->call('FoodTableSeeder');
        $this->call('GenreTableSeeder');
        $this->call('SewaBukuTableSeeder');
        $this->call('SewaFilmTableSeeder');
    }
}
