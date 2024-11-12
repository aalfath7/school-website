<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'news';
    protected $primaryKey = 'id_news';

    protected $useAutoIncrement = true;

    public function getNews($slug = false){
        if($slug == false){
            return $this->findAll();
        }
        
        return $this->where(['slug' => $slug] )->first();

    }
}