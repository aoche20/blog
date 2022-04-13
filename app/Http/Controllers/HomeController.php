<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::take(32)->get();
        return view('home', compact('posts'));
    }
}
