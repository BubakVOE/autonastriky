<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    // index
        public function index()
        {
            $thumbnail = Post::all();
            return view('/home', [
                'thumbnails' => $thumbnail,
            ]);
        }
    
        
    // galerie
        public function galerie()
        {
            return view('pages/galerie');
        }
    
    
    // cenik
        public function cenik()
        {
            return view('pages/cenik');
        }
    
    
    // kontakty
        public function kontakt()
        {
            return view('pages/kontakt');
        }
    
    }
    