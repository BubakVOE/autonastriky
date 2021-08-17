@extends('layouts.dasboard')

@section('container')
    

<div class="flex flex-col h-full w-full">
    <div class="flex flex-col justify-center items-center">

        <div class="w-full">
            <h1 class="text-xl font-poppins  text-cool-gray-300 mt-1/12 text-center border-b-2 w-10/12 m-auto border-gray-light pb-2">Aktuální informace k <span class="font-bold">{{ $post->car }}</span> <span class="font-bold">{{ $post->type }}</span></h1>

            <div class="flex justify-center flex-col">
                <div class="flex flex-col justify-center items-center my-5">
                    <h1 class="font-poppins">Thumbnail</h1>
        
                    <form action="/dashboard/post/deleteThumbnail/{{ $post->id }}" method="post">
                        <button class="flex items-center justify-center bg-red-custom rounded-full p-1 my-3  ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                        </button>
                        @csrf
                        @method('delete')
                    </form>
                    <img src="{{ asset('posts/thumbNail/'.$post->cover) }}" style="max-height:100px; max-width:100px" >
                </div>


                <div class="h-full flex flex-col justify-center items-center mt-1/12">
                    <h1 class="text-xl font-poppins font-bold text-cool-gray-300 text-center pb-4">Upravit údaje</h1>

                        <form action="/dashboard/post/update/{{ $post->id }}" method="post" enctype="multipart/form-data" class="h-11/12 px-10 bg-gray-light py-10 flex flex-col items-center justify-center ">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-col justify-evenly  h-full">
                
                                <input type="text" 
                                        name="car" 
                                        value="{{ $post->car }}"
                                        class="py-2 px-5 my-2 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                                        placeholder="název auta">
                
                                <input type="text" 
                                        name="type" 
                                        value="{{ $post->type }}"
                                        class="py-2 px-5 my-2 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                                        placeholder="typ auta">
                
                                <Textarea name="description" 
                                            cols="20" rows="4" 
                                            class="form-textarea my-2  text-gray-light" 
                                            placeholder="popis">{{ $post->description }}</Textarea>
                
                
                    
                                <div>
                                    <div class="my-4 flex flex-col font-bold w-5/6 ">
                                        <label class="block my-2 text-white font-poppins  text-sm font-bold ">
                                            <h1>Změnit hlavní obrázek</h1>
                                        </label>
                    
                                        <input  class="rounded focus:outline-none ml-2 text-red-custom focus:text-black-custom"
                                                type="file" 
                                                name="cover"
                                                >                      
                                    </div>
                    
                                    <div class="my-4 flex flex-col font-bold w-5/6 ">
                                        <label class="block my-2 text-white font-poppins  text-sm font-bold ">
                                            <h1>Přidat obrázky</h1>
                                        </label>
                    
                                        <input  class="rounded focus:outline-none ml-2 text-red-custom focus:text-black-custom "
                                                type="file" 
                                                name="images[]" multiple
                                                >                      
                                    </div>
                                </div>
                    
                                <div class="flex justify-center mt-5">
                                    <button type="submit" class="flex flex-row justify-evenly items-center w-32 bg-red-custom px-3 py-2 rounded-md focus:outline-none ">
                                        <h1 class="font-montserrat text-gray-light ">Nahrát</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
        
                <div class="flex flex-col justify-center items-center my-1/12 ">
                    <h1 class="font-poppins pb-5">Další obrázky:</h1>
    
                    <div class="flex justify-row justify-evenly  bg-gray-light p-5 w-8/12">
                        @if (count($post->images)>0)
    
    
                            @foreach ($post->images as $img)
        
                                <div class="flex flex-col items-center justify-between ">
                                    <form action="/dashboard/post/deleteimage/{{ $img->id }}" method="post">
                                        <button class="flex items-center justify-center bg-red-custom rounded-full p-1 my-3  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                              </svg>
                                        </button>
                                        @csrf
                                        @method('delete')
                                    </form>
    
                                    <div>
                                        <img src="{{ asset('posts/images/'.$img->image) }}" class="img-responsive" style="max-height: 100px; max-width: 100px;">
                                        {{-- <img src="posts/images/{{  }}" class="img-responsive" style="max-height: 100px; max-width: 100px;"> --}}
                                    </div>
    
                                </div>
                            
                            @endforeach

                        @else 
                            <h1>Žádné obrázky zde zatím nejsou nahrané</h1>
                        @endif
                    </div>
                </div>
            </div>
            
        </div>



    </div>

</div>






@endsection

 
