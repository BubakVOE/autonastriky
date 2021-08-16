<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        $thumbnail = Post::all();

        return view('main/index', [
            'thumbnails' => $thumbnail,
        ]);
    }

}
