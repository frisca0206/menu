<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GenreModel;


class GenreController extends BaseController
{
    protected $GenreModel;

    public function __construct()
    {
        $this->GenreModel = new GenreModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Genre Management',
            'page_title' => 'Genre List',
            'genres' => $this->GenreModel->findAll()
        ];
        return view('genre/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Genre Management',
            'page_title' => 'Create Genre',
        ];

        return view('genre/create', $data);
    }

    public function store()
    {
        $genre = $this->request->getPost('genre');
        
        $new_genre = [
            'genre' => $genre,
        ];

        $insert_genre = $this->GenreModel->insert($new_genre);
        return redirect()->to('genre');
    }

    public function edit($genre_id)
    {
        $data = [
            'title' => 'Genre Management',
            'page_title' => 'Edit Genre',
            'genre' => $this->GenreModel->find($genre_id)
        ];
        return view('genre/edit', $data);
    }

    public function update()
    {
        $genre_id = $this->request->getPost('genre_id');
        $genre = $this->request->getPost('genre');
        
        $edit_genre = [
            'genre' => $genre,
        ];

        $update_genre = $this->GenreModel->update($genre_id, $edit_genre);
        return redirect()->to('genre');
    }
    
    public function delete($genre_id)
    {
        $this->GenreModel->delete($Genre_id);
        return redirect()->to('genre');
    }
}
