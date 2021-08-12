<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nástřiky dutin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

{{-- fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700&display=swap" rel="stylesheet">

</head>
<body class="h-screen bg-gray-medium">

<div class="h-full w-full flex">
    
{{-- navbar --}}
    <div class="fixed w-1/12 h-screen left-0 top-0 p-1 bg-gray-medium">
        <div class="w-full h-full flex flex-col justify-between py-5 bg-gray-light  ">
            <div class="w-32 mx-auto ">
                <img src="{{ asset('img/auto-logo.png') }}">
            </div>
    
            <div class="flex flex-col h-3/12">
                <div class="{{ active('/') }} border-b-2 border-t-2 border-gray-medium w-full hover:bg-gray-medium ">
                    <a href="{{ route('home') }}" class=" py-4 px-6  flex items-center justify-between  ">
                        <div class="w-10 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h1 class="font-poppins text-lg text-red-custom ">Domů</h1>
                        </div>
                    </a>
                </div>
    
                <div class="{{ active('galerie') }} border-b-2 border-gray-medium w-full hover:bg-gray-medium">
                    <a href="{{ route('galerie') }}" class=" py-4 px-6  flex items-center justify-between  ">
                        <div class="w-10 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6  text-black-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h1 class="font-poppins text-lg text-red-custom">Galerie</h1>
                        </div>
                    </a>
                </div>
    
                <div class="{{ active('cenik') }} border-b-2 border-gray-medium w-full hover:bg-gray-medium">
                    <a href="{{ route('cenik') }}" class=" py-4 px-6  flex items-center justify-between  ">
                        <div class="w-10 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6   text-black-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0M8 10.5h4m-4 3h4m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h1 class="font-poppins text-lg text-red-custom">Ceník</h1>
                        </div>
                    </a>
                </div>
    
                <div class="{{ active('kontakt') }} border-b-2 border-gray-medium w-full hover:bg-gray-medium">
                    <a href="{{ route('kontakt') }}" class=" py-4 px-6  flex items-center justify-between  ">
                        <div class="w-10 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h1 class="font-poppins text-lg text-red-custom  w-full">Kontakt</h1>
                        </div>
                    </a>
                </div>
            </div>
            

    
            <div class="flex flex-col justify-evenly  ">

                <div class="flex justify-center items-center">
                    @auth
                        @if (Auth()->user()->isAdmin ==1)
                            <a href="{{ route('dashboard') }}" class=" py-4 px-6">
                                <h1 class="font-poppins text-lg text-blue-light  w-full">Dashboard</h1>
                            </a>
                         @endif
                    @endauth
                </div>

               <div class="flex justify-evenly items-center flex-row ">
                    <div class="bg-gray-500 bg-gradient-to-br hover:from-purple-700 hover:to-pink-400 rounded-full ">
                        <a href="">
                            <img src="{{ asset('img/sc/instagram.png') }}" style="width: 40px;">
                        </a>
                    </div>
                    <div class="bg-gray-500 hover:bg-blue-700 rounded-full ">
                        <a href="">
                            <img src="{{ asset('img/sc/facebook.png') }}" style="width: 40px;">
                        </a>
                    </div>
               </div>
            </div>
    
        </div>
    </div>





{{-- content --}}
    <div class="ml-1/12 w-11/12 text-white">
        @yield('content')
    </div>

</div>

</body>
</html>