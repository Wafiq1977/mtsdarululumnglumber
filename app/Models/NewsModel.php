<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'content', 'image', 'category_id', 'status', 'user_id'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'slug' => 'required|is_unique[news.slug,id,{id}]',
        'content' => 'required',
        'category_id' => 'required|integer',
        'status' => 'required|in_list[draft,published]',
        'user_id' => 'required|integer',
    ];

    public function getPublished($limit = null)
    {
        return $this->where('status', 'published')->orderBy('created_at', 'DESC')->findAll($limit);
    }

    public function getBySlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }
}