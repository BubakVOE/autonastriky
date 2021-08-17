<div class="mt-1/12" id="kontakt">

    <div class="text-center border-t  pt-3 border-gray-light">
        <h1 class="text-2xl font-montserrat ">Kontakty</h1>
    </div>

    <div class="py-10 pr-5 h-screen ">
        <div class="grid grid-cols-3 h-full ">
    {{-- místo --}}
            <div class=" h-full flex flex-col items-center  w-10/12 m-auto ">

                <div class="flex flex-col items-center border-b-2 border-gray-light pb-3 " > 
                    <img src="{{ asset('img/kontakty/location.png') }}" alt="">
                    <h1 class="font-poppins text-xl ">Místo</h1>
                </div>

                <div class="h-full flex items-end">
                    <div class="h-11/12 flex flex-col justify-between">
                        <div class="flex flex-col justify-center items-center my-4">
                            <h1 class="text-lg text-red-custom font-bold">Provozovna</h1>
                            <div class="flex flex-col justify-center items-center pt-5">
                                <h1 class="text-gray-300 underline"><a target="on_blank" href="https://www.google.com/maps/place/Bablerovo+n%C3%A1m.+19%2F4,+779+00+Samoti%C5%A1ky/@49.6322502,17.3281038,557m/data=!3m1!1e3!4m5!3m4!1s0x47124bee350c6adf:0xd55350258e71df68!8m2!3d49.632589!4d17.327837!5m1!1e4?hl=cs-CZ">Báblerovo náměstí 19/4</a></h1>
                                <h1 class="font-poppins text-lg text-cool-gray-200">Olomouc - Samotišky</h1>
                            </div>
                        </div>
        
                        <div class="flex justify-center items-center">
                            <div class="flex justify-center items-center ">
                                <img class="rounded-xl" src="{{ asset('img/adresa.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- rezervace --}}
            <div class="h-full flex flex-col items-center  w-10/12 m-auto  ">

                <div class="flex flex-col items-center border-b-2 border-gray-light pb-3 " > 
                    <img src="{{ asset('img/kontakty/mobile.png') }}" >
                    <h1 class="font-poppins text-lg ">Objednat online</h1>
                </div>

                <div class="h-full w-full mt-2 bg-gray-light rounded-xl">

                    <form action="{{ route('reservation') }}" method="POST">
                        @csrf
                        
                        <div class=''>
                            <div class="text-center flex flex-col items-center justify-center py-4 border-b-2 border-gray-medium ">
                                <h1 class="text-lg font-poppins">Formulář</h1>
                                <h1 class="text-gray-400">pro příhlašení vozidla</h1> 
                            </div>
        
                            <div class="flex justify-center">
                                <div class="px-4 py-6">

                                    <div class=" items-center justify-between mb-5">
                                        <div class="flex">
                                            <div class="flex flex-col font-bold w-4/6 px-2">
                                                <label class="mb-3 ">
                                                    Jméno
                                                </label>
                                                <input 
                                                    type="text"
                                                    name="firstName"
                                                    placeholder="Pavel"
                                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                                                    >
                                            </div>
                                            
                                            <div class="flex flex-col font-bold w-4/6 px-2">
                                                <label class="mb-3 ">
                                                    Příjmení
                                                </label>
                                                <input 
                                                    type="text"
                                                    name="lastName"
                                                    placeholder="Novák"
                                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                                                    >
                                            </div>
                                        </div>

                                        <div class="flex justify-center items-center mt-5">
                                            <div class="flex flex-col font-bold w-2/6 px-2">
                                                <label class="mb-3 ">
                                                    telefonní číslo
                                                </label>
                                                <input 
                                                    type="text"
                                                    name="mobile"
                                                    placeholder="730681670"
                                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom text-center  "
                                                    >
                                            </div>
                                            
                                            <div class="flex flex-col font-bold w-3/6 px-2">
                                                <label class="mb-3 ">
                                                    datum
                                                </label>
                                                <input 
                                                    type="date"
                                                    name="datum"
                                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-500 focus:text-black-custom text-center  "
                                                    >
                                            </div>
                                        </div>
                        
                                        <div class="flex justify-center mt-5">
                                            <div class="flex flex-col font-bold w-4/6 px-2">
                                                <label class="mb-3 ">
                                                    E-mail
                                                </label>
                                                <input 
                                                    type="text"
                                                    name="email"
                                                    placeholder="Pavelnovak@seznam.cz"
                                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom text-center  "
                                                    >
                                            </div>
                                        </div>



                                        <div class="flex mt-5">
                                            <div class="flex flex-col font-bold w-4/6 px-2 ">
        
                                                <div class="mb-3 ">
                                                    <h1>Auto</h1>
                                                </div>

                                                <select name="car" class="py-2 px-5 rounded focus:outline-none text-black-custom ">
                                                    <option value="skoda" class="py-2 px-5 rounded focus:outline-none text-black tex  ">Škoda</option>
                                                    <option value="audi">Audi</option>
                                                    <option value="bmw">BMW</option>
                                                </select>
                                            </div>
                                            
                                            <div class="flex flex-col font-bold w-4/6 px-2">
                                                <div class="mb-3 ">
                                                    <h1>Typ</h1>
                                                </div>
                                        
                                                <select name="type" class="py-2 px-5 rounded focus:outline-none text-black-custom ">
                                                    <option value="octavia">Octavia</option>
                                                    <option value="superb">Superb</option>
                                                    <option value="Kodiaq">Kodiaq</option>
                                                </select>
                                                
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="text-center relative ">


                                @if (session()->has('message'))
                                    <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2">
                                        <h1 class="text-gray-50 bg-green-500 rounded-2xl py-1 px-2">
                                            {{ session()->get('message') }}
                                        </h1>
                                    </div>
                                
                                @else
                                    <button type="submit" class="bg-red-custom font-bold py-2 px-6  rounded transition-all hover:bg-blue-500 ">
                                        Odeslat
                                    </button>
                                @endif


                                @if ($errors->any())
                                    <div >
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    {{-- informace + kontakty --}}

            <div class=" h-full flex flex-col items-center  w-10/12 m-auto   ">

                <div class="flex flex-col items-center border-b-2 border-gray-light pb-3 " > 
                    <img src="{{ asset('img/kontakty/information.png') }}" alt="">
                    <h1 class="font-poppins text-xl ">Kontakt & Informace</h1>
                </div>

                <div class="h-full flex flex-col justify-evenly">
                    <div class="text-center flex flex-col justify-center items-center">

                        <div class="flex flex-col justify-center items-center mb-4">
                            <h1 class="text-lg text-red-custom font-bold">IČO</h1>
                            <h1 class="text-gray-300">63681927</h1>
                        </div>
        
                        <div class="flex flex-col justify-center items-center my-4">
                            <h1 class="text-lg text-red-custom font-bold">DIČ</h1>
                            <h1 class="text-gray-300">CZ7408235307</h1>
                        </div>
                        
                        <div class="flex flex-col justify-center items-center my-4">
                            <h1 class="text-lg text-red-custom font-bold">Zaregistrován v</h1>
                            <h1 class="text-gray-300">Magitrátu města Olomouce</h1>
                        </div>
                    </div>
        
        
        
                    <div class="text-center flex flex-col justify-center items-center ">
                        <div class="flex flex-col justify-center items-center my-4">
                            <h1 class="text-lg text-red-custom font-bold">Telefonní číslo</h1>
                            <h1 class="text-gray-300">+420 777 092 381</h1>
                        </div>
        
                        <div class="flex flex-col justify-center items-center my-4">
                            <h1 class="text-lg text-red-custom font-bold">E-mail</h1>
                            <h1 class="text-gray-300">ludwigjiri@seznam.cz</h1>
                        </div>
                    </div>
                </div>

            </div>




        </div>


    </div>
</div>



{{-- 
    


    
    --}}