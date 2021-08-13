<div class="w-11/12 m-auto flex flex-col justify-evenly h-screen ">
    <div class="my-5">
        <h1 class="font-poppins text-xl font-bold">Moje práce</h1>
        <p class="font-poppins">Ukázka některých aut, které byly umyty, nastříkany nové dutiny a vyčištěny disky </p>

        <div class="mt-5">
            <a class="bg-red-custom  text-gray-light font-bold text-lg py-2 px-3 font-poppins rounded-md focus:outline-none">
                Zobrazit více
            </a>
        </div>
    </div>

    {{-- 
        <div class="grid grid-cols-1 h-96 overflow-auto ">
        <div class="py-5 hover:bg-cool-gray-800 bg-gray-light mb-1">
            <div class="grid grid-cols-4 place-items-center font-poppins text-sm">
                <h1>Dutiny</h1>
                <h1>SUV</h1>
                <h1>super ultra barva</h1>
                <h1>4500,-</h1>
            </div>
        </div>
        <div class="py-5 hover:bg-cool-gray-800 bg-gray-light my-1">
            <div class="grid grid-cols-4 place-items-center font-poppins text-sm">
                <h1>Dutiny</h1>
                <h1>Osobní auto</h1>
                <h1>super ultra barva</h1>
                <h1>4500,-</h1>
            </div>
        </div>
        <div class="py-5 hover:bg-cool-gray-800 bg-gray-light my-1">
            <div class="grid grid-cols-4 place-items-center font-poppins text-sm">
                <h1>Dutiny</h1>
                <h1>Osobní auto</h1>
                <h1>super ultra barva</h1>
                <h1>4500,-</h1>
            </div>
        </div>
        <div class="py-5 hover:bg-cool-gray-800 bg-gray-light my-1">
            <div class="grid grid-cols-4 place-items-center font-poppins text-sm">
                <h1>Dutiny</h1>
                <h1>Osobní auto</h1>
                <h1>super ultra barva</h1>
                <h1>4500,-</h1>
            </div>
        </div>
        <div class="py-5 hover:bg-cool-gray-800 bg-gray-light my-1">
            <div class="grid grid-cols-4 place-items-center font-poppins text-sm">
                <h1>Dutiny</h1>
                <h1>SUV</h1>
                <h1>super ultra barva</h1>
                <h1>4500,-</h1>
            </div>
        </div>
        <div class="py-5 hover:bg-cool-gray-800 bg-gray-light my-1">
            <div class="grid grid-cols-4 place-items-center font-poppins text-sm">
                <h1>Dutiny</h1>
                <h1>SUV</h1>
                <h1>super ultra barva</h1>
                <h1>4500,-</h1>
            </div>
        </div>
        <div class="py-5 hover:bg-cool-gray-800 bg-gray-light my-1">
            <div class="grid grid-cols-4 place-items-center font-poppins text-sm">
                <h1>Dutiny</h1>
                <h1>SUV</h1>
                <h1>super ultra barva</h1>
                <h1>4500,-</h1>
            </div>
        </div>
        <div class="py-5 hover:bg-cool-gray-800 bg-gray-light my-1">
            <div class="grid grid-cols-4 place-items-center font-poppins text-sm">
                <h1>Dutiny</h1>
                <h1>SUV</h1>
                <h1>super ultra barva</h1>
                <h1>4500,-</h1>
            </div>
        </div>
        <div class="py-5 hover:bg-cool-gray-800 bg-gray-light my-1">
            <div class="grid grid-cols-4 place-items-center font-poppins text-sm">
                <h1>Dutiny</h1>
                <h1>SUV</h1>
                <h1>super ultra barva</h1>
                <h1>4500,-</h1>
            </div>
        </div>
    </div> 
    --}}

    <div class=" bg-gray-light p-10 overflow-auto border-2 w-full grid gap-5 ">

        <div class="grid grid-cols-5 gap-x-5">
            <div class="relative opacity-75 hover:opacity-100 border-2 ">
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

        <div class="grid grid-cols-5 gap-x-5">
            <div class="relative opacity-75 hover:opacity-100 border-2 ">
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

</div>