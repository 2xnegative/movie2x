<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie as Movie;
use App\genre as Category;

class SitemapController extends Controller
{
    public function index() {
        
        return response()->view('sitemap.listmap')->header('Content-Type', 'text/xml');
    }

    public function category() {
        // HOST::sitemap-category.xml
        $data['data'] = Category::all();
        $data['type'] = "category";
        return response()->view('sitemap.index', $data)->header('Content-Type', 'text/xml');
    }

    public function post() {
        // HOST::sitemap-post.xml
        $data['data'] = Movie::orderBy('updated_at', 'desc')->get();
        $data['type'] = "movie";

        return response()->view('sitemap.index', $data)->header('Content-Type', 'text/xml');
    }

    public function tag() {

    }
}
