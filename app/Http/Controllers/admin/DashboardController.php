<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class DashboardController extends Controller
{
    public function index()
    {
        $reserve = Reservation::all();

        return view('admin.dashboard', [
            'reserve' => $reserve,
        ]);
    }

    public function galerie()
    {
        return view('admin.galerie');
    }

    public function delete($id)
    {
        $test = Reservation::find($id);
        $test->delete();

        return back()->with('message', 'Úspešně se ti povedlo smazat');
    }

    // public function login()
    // {
    //     return view('admin.login');

    //     return redirect('/admin');
    // }
}
