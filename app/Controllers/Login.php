<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function lauth()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'nama' => $dataUser->nama,
                    'logged_in' => TRUE
                ]);

                // Masuk ke halaman login
                return redirect()->to(base_url('home/vote'))->with('message', 'Berhasil Login!');
            } else {
                session()->setFlashdata('error', 'Nim & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Invalid');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('login/index');
    }
}