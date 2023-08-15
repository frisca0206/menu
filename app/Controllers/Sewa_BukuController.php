<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Sewa_BukuModel;
use App\Models\BookModel;



class Sewa_BukuController extends BaseController
{
    protected $Sewa_BukuModel;

    public function __construct()
    {
        $this->Sewa_BukuModel = new Sewa_BukuModel();
        $this->BookModel = new BookModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Sewa Buku Management',
            'page_title' => 'Sewa Buku List',
            'pinjam' => $this->Sewa_BukuModel->findAll()
        ];
        return view('sewa_buku/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Sewa Buku Management',
            'page_title' => 'Create Sewa Buku',
            'books' => $this->BookModel->findAll()
        ];

        return view('sewa_buku/create', $data);
    }

    public function store()
    {
        $nama_peminjam = $this->request->getPost('nama_peminjam');
        $nama_buku = $this->request->getPost('nama_buku');
        $tanggal_pinjam = $this->request->getPost('tanggal_pinjam');
        $durasi_jam = $this->request->getPost('durasi_jam');
        
        $new_sewa_buku = [
            'nama_peminjam' => $nama_peminjam,
            'nama_buku' => $nama_buku,
            'tanggal_pinjam' => $tanggal_pinjam,
            'durasi_jam' => $durasi_jam,
        ];

        $insert_sewa_buku = $this->Sewa_BukuModel->insert($new_sewa_buku);
        return redirect()->to('sewa_buku');
    }

    public function edit($sewa_buku_id)
    {
        $data = [
            'title' => 'Sewa Buku Management',
            'page_title' => 'Edit Sewa Buku',
            'sewa_buku' => $this->Sewa_BukuModel->find($sewa_buku_id),
            'books' => $this->BookModel->findAll()
        ];
        return view('sewa_buku/edit', $data);
    }

    public function update()
    {
        $sewa_buku_id = $this->request->getPost('sewa_buku_id');
        $nama_peminjam = $this->request->getPost('nama_peminjam');
        $nama_buku = $this->request->getPost('nama_buku');
        $tanggal_pinjam = $this->request->getPost('tanggal_pinjam');
        $durasi_jam = $this->request->getPost('durasi_jam');
        
        $edit_sewa_buku = [
            'nama_peminjam' => $nama_peminjam,
            'nama_buku' => $nama_buku,
            'tanggal_pinjam' => $tanggal_pinjam,
            'durasi_jam' => $durasi_jam,
        ];

        $update_sewa_buku = $this->Sewa_BukuModel->update($sewa_buku_id, $edit_sewa_buku);
        return redirect()->to('sewa_buku');
    }
    
    public function delete($sewa_buku_id)
    {
        $this->Sewa_BukuModel->delete($sewa_buku_id);
        return redirect()->to('sewa_buku');
    }
}