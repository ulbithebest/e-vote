<?php

namespace App\Controllers;

use App\Models\VotingModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new VotingModel();
        $data['voting'] = $model->findAll();

        return view('voting/index', $data);
    }

    public function login()
    {
        // Tambahkan logika login di sini
        return view('login'); // Jika menggunakan file view 'login.php'
    }

    public function vote()
    {
        $model = new VotingModel();
        $data['voting'] = $model->findAll();

        return view('voting/vote', $data);
    }

    // public function create()
    // {
    //     return view('voting/create');
    // }

    // public function store()
    // {
    //     $model = new VotingModel();
    //     $data = [
    //         'nama' => $this->request->getPost('nama'),
    //         'nim' => $this->request->getPost('nim'),
    //         'jurusan' => $this->request->getPost('jurusan'),
    //     ];
    //     $model->insert($data);

    //     return redirect()->to('/mahasiswa');
    // }

    // public function edit($id)
    // {
    //     $model = new VotingModel();
    //     $data['mahasiswa'] = $model->find($id);

    //     return view('voting/edit', $data);
    // }

    // public function update($id)
    // {
    //     $model = new VotingModel();
    //     $data = [
    //         'nama' => $this->request->getPost('nama'),
    //         'nim' => $this->request->getPost('nim'),
    //         'jurusan' => $this->request->getPost('jurusan'),
    //     ];
    //     $model->update($id, $data);

    //     return redirect()->to('/mahasiswa');
    // }

    // public function delete($id)
    // {
    //     $model = new VotingModel();
    //     $model->delete($id);

    //     return redirect()->to('/mahasiswa');
    // }
}
