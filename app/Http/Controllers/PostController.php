<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title'=> 'Blog',
            'posts'=> Post::all() 
        ]);
    }

    public function show($slug)
    {
        return view('posts', [
            'title' => "Post",
            'post'  => Post::find( $slug )
            
        ]);
    }
}
