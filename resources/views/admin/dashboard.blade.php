@extends('layouts.navbar')


@section('content')
    



    @guest()
      






    @else
    <div class="h-full flex flex-col">




        <div class="h-1/12 flex items-center justify-end">

            <div class="bg-blue-light text-white font-bold font-poppins text-lg p-2 mr-3">
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



    @endguest

{{-- 
    

    --}}


@endsection