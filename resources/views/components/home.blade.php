<div class="mt-5" id="home">

    <div class="text-center ">
        <h1 class="text-2xl font-montserrat ">Auto nástřiky</h1>
        <h1 class="font-montserrat text-sm text-cool-gray-300">SUV a osobní auta</h1>
    </div>

    <div class="w-11/12 m-auto flex flex-col justify-evenly h-screen ">

        <div class="grid grid-cols-2 mt-1/12 ">
            <div class="flex flex-col  justify-between">

                <div class="text-xl font-poppins text-cool-gray-300 mt-1/12 pl-5">
                    <h1>firma je v provozu od roku <span class="text-white">1992</span></h1>
                </div>


                <div class="bg-gray-light p-5 w-6/12">
                    <p class="text-xl font-poppins text-cool-gray-300">
                        Naše firma nabízí spoustu <span class="text-white">služeb</span> od 
                        <span class="text-white">nástřiku dutiny </span>auta až po <span class="text-white">přezutí pneumatik</span> na jarní nebo zimní</p>
                </div>
            

            </div>

            <div class="flex justify-end">
                <div class="w-9/12  flex justify-center items-center">
                    <img src="{{ asset('img/bg-logo.png') }}" alt="">
                </div>
            </div>
        </div>


        <div class="relative h-20">
            <div class="absolute bottom-0 transform rotate-90 flex items-center justify-center">
                <span class=" mr-2">Scrolluj dále</span>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                </div>
            </div>

            <div class="text-center ">
                <button onclick="posunKontakt()" class="bg-red-custom text-gray-light font-bold text-lg py-2 px-3 font-poppins rounded-md focus:outline-none">Objednat se</button>
            </div>

            <div class="absolute bottom-0 right-0 transform rotate-90 flex items-center justify-center">
                <span class=" mr-2">Scrolluj dále</span>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </div>
        </div>

    </div>
</div>
