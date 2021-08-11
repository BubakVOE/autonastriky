<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
    {
        $res = Reservation::create([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'mobile' => $request->input('mobile'),
            'datum' => $request->input('datum'),
            'email' => $request->input('email'),
            'car' => $request->input('car'),
            'type' => $request->input('type'),
        ]);

        return back()->with('message', 'Úspešně jste odeslali váš požadavek');
    }
}
