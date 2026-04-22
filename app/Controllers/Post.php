<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Post extends BaseController
{
    // helper('text');

    public function index()
    {
        $model = new \App\Models\PostModel();
        $data['posts'] = $model->findAll();

        return view('admin/posts/index', $data);
    }

    public function create()
    {
        return view('admin/posts/create');
    }

    public function store()
    {
        $model = new \App\Models\PostModel();

        $title = $this->request->getPost('title');
        $slug = url_title($title, '-', true);

        $model->save([
            'title' => $title,
            'slug' => $slug,
            'content' => $this->request->getPost('content')
        ]);

        return redirect()->to('/admin/posts')->with('success','Post added');
    }
}
