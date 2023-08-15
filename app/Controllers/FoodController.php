<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FoodModel;


class FoodController extends BaseController
{
    protected $FoodModel;

    public function __construct()
    {
        $this->FoodModel = new FoodModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Food Management',
            'page_title' => 'Food List',
            'foods' => $this->FoodModel->findAll()
        ];
        return view('food/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Food Management',
            'page_title' => 'Create Food',
        ];

        return view('food/create', $data);
    }

    public function store()
    {
        $nama_makanan = $this->request->getPost('nama_makanan');
        $deskripsi = $this->request->getPost('deskripsi');
        $harga = $this->request->getPost('harga');
        
        $new_food = [
            'nama_makanan' => $nama_makanan,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
        ];

        $insert_food = $this->FoodModel->insert($new_food);
        return redirect()->to('food');
    }

    public function edit($food_id)
    {
        $data = [
            'title' => 'Food Management',
            'page_title' => 'Edit Food',
            'food' => $this->FoodModel->find($food_id)
        ];
        return view('food/edit', $data);
    }

    public function update()
    {
        $food_id = $this->request->getPost('food_id');
        $nama_makanan = $this->request->getPost('nama_makanan');
        $deskripsi = $this->request->getPost('deskripsi');
        $harga = $this->request->getPost('harga');
        
        $edit_food = [
            'nama_makanan' => $nama_makanan,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
        ];

        $update_food = $this->FoodModel->update($food_id, $edit_food);
        return redirect()->to('food');
    }
    
    public function delete($food_id)
    {
        $this->FoodModel->delete($food_id);
        return redirect()->to('food');
    }
}
