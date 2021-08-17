<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        $thumbnails = Post::all();

        return view('main/index', [
            'thumbnails' => $thumbnails,
        ]);
    }

}
