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
        $news = $this->newsModel->findAll();

        $data = [
            'news' => $news
        ];

        return view('pages/news', $data);
    }
}
