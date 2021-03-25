<?php
namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function show(string $slug)
    {
        return view('blog')->with(compact('slug'));
    }
}
