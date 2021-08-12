@extends('layouts.navbar')

@section('content')
    <div class="flex   items-center h-full ">
        <div class="w-6/12 flex items-center justify-center m-auto bg-gray-light rounded-xl">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class=''>
                    <div class="text-center flex flex-col items-center justify-center py-4 border-b-2 border-gray-medium ">
                        <h1 class="text-lg font-poppins">Přihlásit se</h1>
                    </div>

                    <div class="flex justify-center">
                        <div class="px-4 py-6">

                            <div class=" items-center justify-between mb-5">
                                <div class="flex items-end">
                                    <div class="flex flex-col font-bold w-4/6 px-2">
                                        <label for="email" class="block text-cool-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                            <h1>E-mail</h1>
                                        </label>
                                        
                                        <input  id="email" 
                                                type="email"
                                                class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  @error('email') border-red-custom @enderror"
                                                placeholder="pavelnovak@seznam.cz"
                                                name="email"
                                                required autocomplete="email" autofocus>
            
                                        @error('email')
                                        <p class="text-red-custom text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    
                                    <div class="flex flex-col font-bold w-4/6 px-2">
                                        <label for="password" class="block text-cool-gray-700  text-sm font-bold mb-2 sm:mb-4">
                                            <h1>Heslo</h1>
                                        </label>
                
                                        <input  type="password"
                                                class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  @error('password') border-red-custom @enderror""
                                                placeholder="******"
                                                name="password"
                                                required autocomplete="password" 
                                                autofocus
                                                required                       
                                            >
                
                                        @error('password')
                                        <p class="text-red-custom text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>

                                    <div class="flex justify-center">
                                        <button type="submit" class="ml-7 px-4 py-2 text-lg rounded-xl  focus:outline-none bg-blue-light text-white font-bold">
                                                <h1>login</h1>
                                        </button>
                                    </div>
                                </div>




                            





                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection