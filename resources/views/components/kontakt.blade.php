<div class="py-10 h-screen">

    <div class="grid grid-cols-3 h-full ">


{{-- místo --}}
        <div class=" h-full flex flex-col items-center ">

            <div class="flex flex-col items-center h-4/12 "> 
                <img src="{{ asset('img/kontakty/location.png') }}" alt="">
                <h1 class="font-poppins text-lg pt-2">místo</h1>
            </div>

            <div class="h-full flex items-end">
                <div class="h-11/12 flex flex-col justify-between">
                    <div class="flex flex-col justify-center items-center my-4">
                        <h1 class="text-lg text-red-custom font-bold">Provozovna</h1>
                        <h1 class="text-gray-300 underline"><a href="">Báblerovo náměstí 4</a></h1>
                    </div>
    
                    <div class="flex justify-center items-center">
                        <div class="flex justify-center items-center border-2 w-96 h-96 rounded-xl">
                            <h1>google mapy zde :)</h1>
                        </div>
                    </div>
                </div>
            </div>


        </div>
{{-- informace + kontakty --}}

        <div class=" h-full flex flex-col items-center border-2">

            <div class="text-center flex flex-col justify-center items-center">

                <div class="flex flex-col justify-center items-center my-4">
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

            <div class="flex justify-evenly flex-col items-center my-auto border-t-2 border-b-2 border-gray-light h-5/12 py-1">
                <h1 class="font-poppins text-lg ">informace</h1>
                <img src="{{ asset('img/kontakty/information.png') }}" alt="">
                <h1 class="font-poppins text-lg ">Kontakt</h1>
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

{{-- rezervace --}}
        <div class="h-full flex flex-col border-2">


            <div class="h-full w-full border-2">
                <form action="">

                    <input type="text" placeholder="Jméno">
                    <input type="text" placeholder="Příjmení">
                    <input type="text" placeholder="Číslo">
                    <input type="text" placeholder="E-mail">

                    <select name="">
                        <option value="">Škoda</option>
                        <option value=""></option>
                    </select>


                </form>
            </div>

            <div class="flex flex-col justify-end items-center h-5/12 "> 
                <h1 class="font-poppins text-lg">rezervace</h1>
                <img src="{{ asset('img/kontakty/mobile.png') }}" >
            </div>
        
        
        
        </div>


    </div>


</div>



{{-- 
    


    
    --}}