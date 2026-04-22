<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        //
    }
    public function register()
    {
        $model = new \App\Models\UserModel();

        $model->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'user' // default
        ]);

        return redirect()->to('/login')->with('success','Registered ✅');
    }

    public function loginCheck()
    {
        $model = new \App\Models\UserModel();

        $user = $model->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {

            session()->set([
                'id' => $user['id'],
                'name' => $user['name'],
                'role' => $user['role'],
                'logged_in' => true
            ]);

            return redirect()->to('/dashboard');

        } else {
            return redirect()->back()->with('error','Invalid login');
        }
    }
}
