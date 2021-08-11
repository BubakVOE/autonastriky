<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{

// index
    public function index()
    {
        return view('pages/home');
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
