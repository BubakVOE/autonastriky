<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function show(Post $id)
    {

        $post = Post::find($id);

        return view('main.galerie.show', [
            'post' => $post,
        ]);
    }
}
