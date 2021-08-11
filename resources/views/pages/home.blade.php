@extends('layouts.navbar')

@section('content')



    <x-home/>
    <x-galerie/>
    <x-cenik/>

    

    <div class="my-5">
        <div class="text-center">
            <h1 class="text-2xl font-montserrat ">Kontakty</h1>
        </div>
        <x-kontakt/>
    </div>

@endsection