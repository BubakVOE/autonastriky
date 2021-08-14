@extends('layouts.dasboard')

@section('container')

    <div>
        <div class="flex justify-center items-center my-15 h-20">
            @if (session()->has('message'))
                <div class="">
                    <h1 class="font-poppins bg-red-custom rounded-lg py-2 px-3">
                        {{ session()->get('message') }}
                    </h1>
                </div>
            @endif
        </div>

        <div class="w-11/12 mx-auto">
            <h1 class="text-xl font-poppins font-bold text-cool-gray-300 mb-3">Objednávky online</h1>


            <div class="bg-gray-light w-full m-auto">
                <div class="grid grid-cols-8  py-5 place-items-center font-bold font-poppins border-b-2 border-gray-medium">
                    <h1>ID</h1>
                    <h1>Jméno</h1>
                    <h1>telefonní číslo</h1>
                    <div class="flex flex-col items-center justify-center">
                        <h1>datum</h1>
                        <h1 class="font-light text-xs">rok/měsíc/den</h1>
                    </div>
                    
                    <h1>E-mail</h1>
                    <h1>auto</h1>
                    <h1>typ</h1>
                    <div class="flex flex-col items-center justify-center">
                        <h1>Upravy</h1>
                        <h1 class="font-light text-xs">smazat / hotovo</h1>
                    </div>
                </div>

                <div class="py-5">
                    @foreach ($reserve as $reserve)
                        <div class="grid grid-cols-8 place-items-center font-poppins text-sm py-1 border-b border-gray-medium">
                            <h1 class="">{{ $reserve->id }}</h1>
                            <h1>{{ $reserve->firstName }} {{ $reserve->lastName }}</h1>
                            <h1>{{ $reserve->mobile }}</h1>
                            <h1>{{ $reserve->datum }}</h1>
                            <h1>{{ $reserve->email }}</h1>
                            <h1>{{ $reserve->car }}</h1>
                            <h1>{{ $reserve->type }}</h1>

                            <div class="flex flex-row justify-evenly">

                                <form action="/dashboard/{{ $reserve->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="mr-1 bg-red-custom px-3 py-2 rounded-l-md text-base hover:text-orange-200" type="submit" >
                                        smazat
                                    </button>
                                </form>
                                <button class="ml-1 bg-green-500 px-3 py-2 rounded-r-md text-base hover:text-green-200">done</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-evenly mt-20">
                <div>
                    <h1>Hotové objednávky</h1>

                    <div>

                    </div>
                </div>
            </div>
            
        </div>

        <div class="w-11/12 mx-auto my-1/12">
            <div class=" flex flex-row items-center justify-between w-full mb-5 ">
                <h1 class="text-xl font-poppins font-bold text-cool-gray-300 ">Fotogalerie</h1>
                <a class="bg-blue-light px-2 py-3 text-center relative right-1/2 transform translate-x-1/2" href="{{ route('galerie.create') }}">přidat fotogalerie</a>
            </div>




            <div class="bg-gray-light w-full m-auto">
                <div class="grid grid-cols-7  py-5 place-items-center font-bold font-poppins border-b-2 border-gray-medium">
                    <h1>ID</h1>
                    <h1>Název</h1>
                    <h1>Značka</h1>
                    <h1>Popis</h1>
                    <h1>Thumbnail</h1>
                    
                    <div class="flex flex-col items-center justify-center">
                        <h1>Datum</h1>
                        <h1 class="font-light text-xs">rok/měsíc/den</h1>
                    </div>
                    
                    <div class="flex flex-col items-center justify-center">
                        <h1>Upravy</h1>
                        <h1 class="font-light text-xs">upravit / hotovo</h1>
                    </div>

                </div>
            {{-- foreach atd... --}}
                <div class="py-5">
                    @foreach ($galleries as $gallery)
                        <div class="grid grid-cols-7 place-items-center align-middle border-b-2 border-gray-medium">
                            <h1>{{ $gallery->id }}</h1>
                            <h1>{{ $gallery->car }}</h1>
                            <h1>{{ $gallery->type }}</h1>
                            <p>{{ $gallery->description }}</p>
                            <img src="cover/{{ $gallery->cover }}" style="max-height:100px; max-width:100px" >
                            <div>
                                <div class="flex items-center">
                                    <h1 class="mr-2">vytvořeno</h1>
                                    <h1 class="text-sm">{{ $gallery->created_at }}</h1>
                                </div>
                                <div class="flex items-center">
                                    <h1 class="mr-2">upraveno</h1>
                                    <h1 class="text-sm">{{ $gallery->updated_at }}</h1>
                                </div>
                            </div>

                            <div class=" flex flex-row">
                                <a href="/dashboard/galerie/{{ $gallery->id }}" class="rounded-l-md bg-blue-light text-gray-light mr-2 p-2 font-bold">upravit</a>

                                <form action="/dashboard/galerie/delete/{{ $gallery->id }}" method="post">
                                    @csrf
                                    @method('delete')
    
                                    <button type="submit" class="rounded-r-md bg-red-custom text-gray-light ml-2 p-2 font-bold">smazat</button>
                                </form>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>





    {{-- <div class="w-11/12 mx-auto mt-1/12">
        <h1 class="text-xl font-poppins font-bold text-cool-gray-300 mb-3">Přidat fotografie</h1>




        <div class=" bg-gray-light p-10 overflow-auto  w-full grid gap-5 ">

            <div class="grid grid-cols-5 gap-x-5">
                <div class=" flex justify-center items-center bg-gray-medium">
                    <a href="{{ route('dashboard-galerie-create') }}" class="h-full w-full flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
                <div class="">
                    <img src="{{ asset('img/galerie/auto/1.jpg') }}">
                </div>
                <div class="">
                    <img src="{{ asset('img/galerie/auto/1.jpg') }}">
                </div>
                <div>
                    <img src="{{ asset('img/galerie/auto/1.jpg') }}">
                </div>
                <div>
                    <img src="{{ asset('img/galerie/auto/1.jpg') }}">
                </div>
            </div>
    
            <div class="grid grid-cols-5 gap-x-5">
                <div class="relative opacity-75 hover:opacity-100 ">
                    <img src="{{ asset('img/galerie/auto/1.jpg') }}">
                    <a class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-blue-light px-4 rounded-md py-2" href=""><h1>view more</h1></a>
                </div>
                <div class="">
                    <img src="{{ asset('img/galerie/auto/1.jpg') }}">
                </div>
                <div class="">
                    <img src="{{ asset('img/galerie/auto/1.jpg') }}">
                </div>
                <div>
                    <img src="{{ asset('img/galerie/auto/1.jpg') }}">
                </div>
                <div>
                    <img src="{{ asset('img/galerie/auto/1.jpg') }}">
                </div>
            </div>
        </div>
    </div> --}}

@endsection

{{-- 
<div class="flex flex-row justify-between w-10/12 mx-auto mt-1/12 ">
    <div class="w-3/12 h-48 bg-gradient-to-tr from-blue-light to-red-custom shadow-xl rounded-xl">
    <h1>Page views</h1>

    </div>
    <div class="w-3/12 h-48 bg-gradient-to-tr from-yellow-300 to-orange-500 shadow-xl rounded-xl">

    </div>
    <div class="w-3/12 h-48 bg-gradient-to-tr from-teal-500 to-blue-light shadow-xl rounded-xl">

    </div>
</div> --}}

{{-- @extends('layouts.navbar')


@section('content')
    
    <div class="h-full flex flex-col ">

        <div class="h-1/12 flex items-center justify-around bg-gray-light m-1 ml-0">

            <div class="flex flex-row justify-evenly items-center w-3/12 h-full ">

                <div class="{{ active('dashboard') }} border-r-2 border-gray-medium w-full hover:bg-gray-medium ml-3 ">
                    <a href="{{ route('home') }}" class=" py-4 px-6  flex items-center justify-between  ">
                        <div class="w-10 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                              </svg>
                        </div>
                        <div class="w-full">
                            <h1 class="font-poppins text-lg text-red-custom ">Domů</h1>
                        </div>
                    </a>
                </div>

                <div class="{{ active('dashboard/galerie') }} border-r-2 border-gray-medium w-full hover:bg-gray-medium ">
                    <a href="{{ route('dashboard-galerie') }}" class=" py-4 px-6  flex items-center justify-between  ">
                        <div class="w-10 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                              </svg>
                        </div>
                        <div class="w-full">
                            <h1 class="font-poppins text-lg text-red-custom ">Galerie</h1>
                        </div>
                    </a>
                </div>


            </div>

            <div class=" w-full flex justify-end">
                <div class="bg-blue-light text-white font-bold font-poppins text-lg p-2 mr-3 w-32 text-center">
                    <a href="{{ route('logout') }}"
                        class="no-underline hover:underline"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        
                        
                        <h1>Odhlásit se</h1>
                    </a>
            
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
        
        <div class="mt-1/12 w-11/12 mx-auto">
            <h1 class="text-xl font-poppins font-bold text-cool-gray-300 mb-3">Objednávky online</h1>


            <div class="bg-gray-light w-full m-auto">
                <div class="grid grid-cols-8  py-5 place-items-center font-bold font-poppins border-b-2 border-gray-medium">
                    <h1>id</h1>
                    <h1>Jméno</h1>
                    <h1>telefonní číslo</h1>
                    <div class="flex flex-col items-center justify-center">
                        <h1>datum</h1>
                        <h1 class="font-light text-xs">rok/měsíc/den</h1>
                    </div>
                    
                    <h1>E-mail</h1>
                    <h1>auto</h1>
                    <h1>typ</h1>
                    <div class="flex flex-col items-center justify-center">
                        <h1>Upravy</h1>
                        <h1 class="font-light text-xs">smazat / hotovo</h1>
                    </div>
                </div>
    
                <div class="py-5">
                    @foreach ($reserve as $reserve)
                        <div class="grid grid-cols-8 place-items-center font-poppins py-2">
                            <h1 class="">{{ $reserve->id }}</h1>
                            <h1>{{ $reserve->firstName }} {{ $reserve->lastName }}</h1>
                            <h1>{{ $reserve->mobile }}</h1>
                            <h1>{{ $reserve->datum }}</h1>
                            <h1>{{ $reserve->email }}</h1>
                            <h1>{{ $reserve->car }}</h1>
                            <h1>{{ $reserve->type }}</h1>

                            <div class="flex flex-row justify-evenly">
                                <button class="mr-1 bg-red-custom px-2 py-1 rounded-l-md text-base hover:text-orange-200">delete</button>                            
                                <button class="ml-1 bg-green-500 px-2 py-1 rounded-r-md text-base hover:text-green-200">done</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-evenly mt-20">
                <div>
                    <h1>Smazané objednávky</h1>

                    <div>

                    </div>
                </div>
    
                <div>
                    <h1>Hotové objednávky</h1>
                </div>
            </div>
        </div>

        <div class="flex flex-row justify-between w-10/12 mx-auto mt-1/12 ">
            <div class="w-3/12 h-48 bg-gradient-to-tr from-blue-light to-red-custom shadow-xl rounded-xl">
               <h1>Page views</h1>

            </div>
            <div class="w-3/12 h-48 bg-gradient-to-tr from-yellow-300 to-orange-500 shadow-xl rounded-xl">

            </div>
            <div class="w-3/12 h-48 bg-gradient-to-tr from-teal-500 to-blue-light shadow-xl rounded-xl">

            </div>
        </div>

    </div>



@endsection --}}