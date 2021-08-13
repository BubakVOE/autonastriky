<?php

namespace App\Http\Controllers\admin;

use App\Models\Galerie;
use App\Models\Reservation;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
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

    public function delete($id)
    {
        $test = Reservation::find($id);
        $test->delete();

        return back()->with('message', 'Úspešně se ti povedlo smazat');
    }

// galerie

    public function view(){
        return view('admin.create');
    }


    public function store(Request $req){
        $req->validate([
        'imageFile' => 'required',
        'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);

        if($req->hasfile('imageFile')) 
        {
            foreach($req->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();

                $file->move(public_path('images').'/uploads/', $name);  

                $imgData[] = $name;  
            }

            $fileModal = new Galerie();

            $fileModal->name = json_encode($imgData);

            $fileModal->image_path = json_encode($imgData);
        
            $fileModal->save();

            return back()->with('success', 'File has successfully uploaded!');

        }
    }



}




    // public function login()
    // {
    //     return view('admin.login');

    //     return redirect('/admin');
    // }