<?php
namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use Apsg\Wordpressor\Wordpressor;
use Apsg\Wordpressor\WordpressorFacade;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = (new Wordpressor())
            ->posts()
            ->take(10)
            ->page($request->input('page', 1))
            ->getTransformed();

        return PostResource::collection($posts);
    }

    public function show(string $slug)
    {
        return view('blog')->with(compact('slug'));
    }

    public function single(string $slug)
    {
        $post = (new Wordpressor())
            ->posts()
            ->slug($slug)
            ->getTransformed()[0];

        return new PostResource($post);
    }
}
