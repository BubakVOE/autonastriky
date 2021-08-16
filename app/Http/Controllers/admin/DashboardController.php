<?php

namespace App\Http\Controllers\admin;

use App\Models\Galerie;
use App\Models\Reservation;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Post;

use function Symfony\Component\String\b;

class DashboardController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();

        $post = Post::all();

        return view('dashboard.index', [
            'reservation' => $reservation,
            'posts' => $post,
        ]);
    }

}

