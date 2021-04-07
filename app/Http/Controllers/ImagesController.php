<?php
namespace App\Http\Controllers;

use App\Http\Resources\ImageResource;
use Apsg\Dafetcher\Dafetcher;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index(Request $request)
    {
        $data = (new Dafetcher())->fetchTransformed($request->input('page', 1));

        return ImageResource::collection($data);
    }
}
