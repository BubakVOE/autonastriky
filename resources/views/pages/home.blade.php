@extends('layouts.navbar')

@section('content')

    <div>
        <div class="mt-5 h-screen">
            <div class="text-center">
                <h1 class="text-2xl font-montserrat ">Auto nástřiky</h1>
                <h1 class="font-montserrat text-sm text-cool-gray-300">SUV a osobní auta</h1>
            </div>
            <x-home/>
        </div>
        
        <div class="mt-1/12">
            <div class="text-center">
                <h1 class="text-2xl font-montserrat ">Galerie</h1>
            </div>
            <x-galerie/>
        </div>
        
        <div class="mt-1/12">
            <div class="text-center">
                <h1 class="text-2xl font-montserrat ">Ceník</h1>
            </div>
            <x-cenik/>
        </div>
        
        <div class="mt-1/12">
            <div class="text-center">
                <h1 class="text-2xl font-montserrat ">Kontakty</h1>
            </div>
            <x-kontakt/>
        </div>
    </div>

@endsection