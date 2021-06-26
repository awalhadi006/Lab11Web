<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function article()
    {
        return view('article');
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }

    public function tos()
    {
        echo "ini halaman Term of Services";
    }

    public function index()
    {
        return view('index');
    }
} 

