<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Post; 

class BlogController extends BackendController
{
    protected $limit = 5; 
    /**
     * Display a list of posts
     * 
     * @return \Illuminate\Htpp\Response
     *
     */
    public function index()
    {
        $posts = Post::with('category', 'author')->latest()->paginate($this->limit);

        $postCount = Post::count();
        return view('backend.blog.index', compact('posts', 'postCount'));
    }

    public function create()
    {
        return 'create blog post';
    }
}
