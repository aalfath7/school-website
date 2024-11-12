<?php

namespace App\Controllers;

use PSpell\Config;
use App\Models\NewsModel;

class News extends BaseController
{
    protected $newsModel;
    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }
    public function index(): string
    {
        // $news = $this->newsModel->findAll();

        $data = [
            'news' => $this->newsModel->getNews()
        ];

        return view('pages/news', $data);
    }
    public function detail($slug)
    {
        $data = [
            'news' => $news = $this->newsModel->getNews($slug)
        ];
        

        return view('pages/news-detail', $data);
    }
}
