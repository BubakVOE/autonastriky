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
        $reserve = Reservation::all();
        $galerie = Post::all();

        return view('admin.dashboard', [
            'reserve' => $reserve,
            'galleries' => $galerie,
        ]);
    }

    public function delete($id)
    {
        $test = Reservation::find($id);
        $test->delete();

        return back()->with('message', 'Úspešně se ti povedlo smazat');
    }


}




    // public function login()
    // {
    //     return view('admin.login');

    //     return redirect('/admin');
    // }