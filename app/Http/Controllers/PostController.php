<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('awal.galeries', [
            "title" => "Galeries",
            "posts" => Post::all()
        ]);
    }

    public function show($slug) {
        return view('awal.galery', [
            "title" => "Galery",
            "post" => Post::find($slug)
        ]);
    }
}
