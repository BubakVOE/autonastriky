@extends('layouts.navbar')

@section('content')
    <div>

        <x-home/>
        
        {{-- <x-galerie :thumbnails='$thumbnails'/> --}}

        <div class="mt-1/12" id="galerie">
            <div class="text-center border-t  pt-3 border-gray-light">
                <h1 class="text-2xl font-montserrat ">Galerie</h1>
            </div>
        
            <div class="w-11/12 m-auto flex flex-col justify-center h-screen ">
                <div class="mb-5">
                    <h1 class="font-poppins text-xl font-bold">Moje práce</h1>
                    <p class="font-poppins">Ukázka některých aut, které byly umyty, nastříkany nové dutiny a vyčištěny disky </p>
            
                    <div class="mt-5">
                        <a href=""  class="bg-red-custom  text-gray-light font-bold text-lg py-2 px-3 font-poppins rounded-md focus:outline-none">
                            Zobrazit více
                        </a>
                    </div>
                </div>
            
                <div class="mt-5 bg-gray-light p-10 overflow-auto w-full grid gap-5 ">
        
                    <div class="grid grid-cols-5 gap-x-10">
                        @foreach ($thumbnails as $thumbnail)
                            <div class="flex flex-col justify-center items-center bg-gray-medium p-2 ">
                                <div class="">
                                    <img src="{{ asset('posts/thumbNail/'.$thumbnail->cover) }}" class="h-52" >
                                </div>
        
                                <div class="flex justify-between flex-row my-5 w-full">
                                    <div>
                                        <h1>{{ $thumbnail->car }}</h1>
                                    </div>
        
                                    <div class="">
                                        <a href="/post/show/{{ $thumbnail->id }}" class="bg-red-custom text-gray-light  px-2 py-1 font-poppins rounded-md focus:outline-none ">
                                            Zobrazit více
                                        </a>
                                    </div>
        
                                    <div>
                                        <h1>{{ $thumbnail->type }}</h1>
                                    </div>
                                </div>
        
        
                                </div>                            
                        @endforeach
        
                    </div>
                </div>
            
            </div>
        
        
        </div>

        <x-cenik/>

        <x-kontakt/>
    </div>
@endsection