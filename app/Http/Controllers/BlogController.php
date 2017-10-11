<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 

class BlogController extends Controller
{
     /**
     * Temporary placeholder for front end for testing purposes
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all(); 

        return view('welcome', compact('posts'));
    }

    /** 
     * 
     * 
     * 
     */
}
