<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $reserve = Reservation::all();
        return view('admin.dashboard', [
            'reserve' => $reserve,
        ]);
    }

    public function login()
    {
        return view('admin.login');

        return redirect('/admin');
    }
}
