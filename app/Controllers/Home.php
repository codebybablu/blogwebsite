<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function index()
    {
        $model = new \App\Models\PostModel();
        $data['posts'] = $model->findAll();

        return view('frontend/home', $data);
    }

    public function singleBlog($slug)
    {
        $model = new \App\Models\PostModel();
        $data['post'] = $model->where('slug',$slug)->first();

        return view('frontend/single_blog', $data);
    }
}
