<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FilmModel;
use App\Models\GenreModel;


class FilmController extends BaseController
{
    protected $FilmModel;

    public function __construct()
    {
        $this->FilmModel = new FilmModel();
        $this->GenreModel = new GenreModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Film Management',
            'page_title' => 'Film List',
            'films' => $this->FilmModel->select('film.*,genre.genre')->join('genre','genre.id = film.genre_id')->findAll(),
        ];
        return view('film/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Film  Management',
            'page_title' => 'Create Film',
            'genres' => $this->GenreModel->findAll()
        ];

        return view('film/create', $data);
    }

    public function store()
    {
        $nama_film = $this->request->getPost('nama_film');
        $genre = $this->request->getPost('genre');
        $deskripsi = $this->request->getPost('deskripsi');
        
        $new_film = [
            'nama_film' => $nama_film,
            'genre_id' => $genre,
            'deskripsi' => $deskripsi,
        ];

        $insert_film = $this->FilmModel->insert($new_film);
        return redirect()->to('film');
    }

    public function edit($film_id)
    {
        $data = [
            'title' => 'Film Management',
            'page_title' => 'Edit Film',
            'film' => $this->FilmModel->find($film_id),
            'genres' => $this->GenreModel->findAll(),
        ];
        return view('film/edit', $data);
    }

    public function update()
    {
        $film_id = $this->request->getPost('film_id');
        $nama_film = $this->request->getPost('nama_film');
        $genre = $this->request->getPost('genre');
        $deskripsi = $this->request->getPost('deskripsi');

        $edit_film = [
            'nama_film' => $nama_film,
            'genre_id' => $genre,
            'deskripsi' => $deskripsi,
        ];

        $update_film = $this->FilmModel->update($film_id, $edit_film);
        return redirect()->to('film');
    }
    
    public function delete($film_id)
    {
        $this->FilmModel->delete($film_id);
        return redirect()->to('film');
    }
}
