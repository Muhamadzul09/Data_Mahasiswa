<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Galery;
use App\Models\User;
class PostController extends Controller
{
    public function index()
    {

        // cara pertama
            // $posts = Post::latest();

            // if(request('search')) {
            //     $posts->where('title', 'like', '%' . request('search') . '%')
            //     ->orWhere('body', 'like', '%' . request('search') . '%');
            // }
        
        // cara kedua di post.php / models
 

        // $title = '';
        // if(request('category')) {
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = ' in ' . $category->name;
        // } 

        // if(request('author')) {
        //     $author = User::firstWhere('username', request('author'));
        //     $title = ' in ' . $author->name;
        // }

         
        return view('awal.galeries', [
            "title" => "All Galeries",
            "active" => 'galeries',
            "galeries" => Galery::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]); 
    }

    public function show(Galery $galeri)
    {
        return view('awal.galery', [
            "title" => "Single post",
            "active" => 'posts',
            "post"  => $galeri
        ]);
    }
}
 