@extends('layouts.navbar')



@section('content')
    
<div class="h-full flex flex-col ">

    <div class="h-1/12 flex items-center justify-around bg-gray-light mt-1 mr-1  p-5">

        <div class="flex flex-row justify-evenly items-center w-3/12 h-full ">

            <div class="{{ active('dashboard') }}  w-full hover:bg-gray-medium ">
                <a href="{{ route('dashboard') }}" class=" py-4 px-6  flex items-center justify-between  ">
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

            <div class="{{ active('dashboard/galerie') }} w-full hover:bg-gray-medium ">
                <a href="{{ route('dashboard-galerie-create') }}" class=" py-4 px-6  flex items-center justify-between  ">
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
            <div class="bg-blue-light text-white font-bold font-poppins text-lg p-2 mr-3 w-32 ">
                <a href="{{ route('logout') }}"
                    class="no-underline hover:underline flex justify-center items-center"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Odhlásit se
                </a>
        
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

    <div class="h-full">
        @yield('container')
    </div>


</div>

@endsection


