<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Sewa_FilmModel;
use App\Models\FilmModel;



class Sewa_FilmController extends BaseController
{
    protected $Sewa_FilmModel;

    public function __construct()
    {
        $this->Sewa_FilmModel = new Sewa_FilmModel();
        $this->FilmModel = new FilmModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Sewa Film Management',
            'page_title' => 'Sewa Film List',
            'video' => $this->Sewa_FilmModel->findAll()
        ];
        return view('sewa_film/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Sewa Film Management',
            'page_title' => 'Create Sewa Film',
            'films' => $this->FilmModel->findAll()
        ];

        return view('sewa_film/create', $data);
    }

    public function store()
    {
        $nama_peminjam = $this->request->getPost('nama_peminjam');
        $nama_film = $this->request->getPost('nama_film');
        $tanggal_pinjam = $this->request->getPost('tanggal_pinjam');
        $durasi_jam = $this->request->getPost('durasi_jam');
        
        $new_sewa_film = [
            'nama_peminjam' => $nama_peminjam,
            'nama_film' => $nama_film,
            'tanggal_pinjam' => $tanggal_pinjam,
            'durasi_jam' => $durasi_jam,
        ];

        $insert_sewa_film = $this->Sewa_FilmModel->insert($new_sewa_film);
        return redirect()->to('sewa_film');
    }

    public function edit($sewa_film_id)
    {
        $data = [
            'title' => 'Sewa Film Management',
            'page_title' => 'Edit Sewa Film',
            'sewa_film' => $this->Sewa_FilmModel->find($sewa_film_id),
            'films' => $this->FilmModel->findAll()
        ];
        return view('sewa_film/edit', $data);
    }

    public function update()
    {
        $sewa_film_id = $this->request->getPost('sewa_film_id');
        $nama_peminjam = $this->request->getPost('nama_peminjam');
        $nama_film = $this->request->getPost('nama_film');
        $tanggal_pinjam = $this->request->getPost('tanggal_pinjam');
        $durasi_jam = $this->request->getPost('durasi_jam');
        
        $edit_sewa_film = [
            'nama_peminjam' => $nama_peminjam,
            'nama_film' => $nama_film,
            'tanggal_pinjam' => $tanggal_pinjam,
            'durasi_jam' => $durasi_jam,
        ];

        $update_sewa_film = $this->Sewa_FilmModel->update($sewa_film_id, $edit_sewa_film);
        return redirect()->to('sewa_film');
    }
    
    public function delete($sewa_film_id)
    {
        $this->Sewa_FilmModel->delete($sewa_film_id);
        return redirect()->to('sewa_film');
    }
}