@extends('layouts.dasboard')

@section('specific')

@endsection

@section('container')
    
    <div class="flex justify-center items-center flex-col h-full ">
        <div class="bg-gray-light p-5 w-5/12">
            <h1 class="text-xl font-poppins font-bold text-cool-gray-300 text-center my-5">Nahrát fotky</h1>
            <form action="{{route('dashboard-galerie-store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="my-10">
                    <div class="imgPreview flex flex-row w-44 h-44"> </div>
                </div>            

                <div class="flex justify-evenly">
                    <input type="file" name="imageFile[]" class="cursor-pointer" id="images" multiple="multiple">
                    <label class="cursor-pointer" for="images">Vybrat fotografie</label>
                </div>


                <div class="flex justify-center mt-10 mb-5">                    
                    <button type="submit" name="submit" class="bg-blue-light py-2 px-4 rounded-md text-gray-light font-bold focus:outline-none">
                        Odeslat fotky
                    </button>
                </div>

                <input type="date" name="" id="" placeholder="" class='placeholder-black-custom text-gray-light'>
                <input type="text" name="" placeholder="car">
                <input type="text" name="" placeholder="type">
                <textarea name="" id="" cols="30" rows="10">
                    
                </textarea>


            </form>
        </div>
    </div>


    <x-jquerScript/>




@endsection

{{-- 
    


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    
    
    --}}