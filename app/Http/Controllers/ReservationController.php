<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    
// store
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
// show
    public function show(Reservation $id)
    {
        return view('admin.galerie.show');
    }
// update
    public function update(Request $request, Reservation $id)
    {
        $post = Reservation::find($id)->update([
            'done' => $request->input('done'),
        ]);
        // return dd($post);
        // dd($post[0]['done']);
    }
}
