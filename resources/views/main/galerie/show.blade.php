@extends('layouts.navbar')

@section('content')


<div class="h-full">
    <div class="flex flex-col items-center mt-5">
        @foreach ($post as $post)
    
            <div class="flex ">
                <h1 class="mr-1 text-2xl font-montserrat ">{{ $post->car }} {{ $post->type }}</h1>
            </div>
    
            
            <div class="my-20">
                <img src="{{ asset('posts/thumbNail/'.$post->cover) }}" class="img-responsive" style="max-height: 300px; max-width: 300px;">
            </div>
    
            <div>
                <p>{{ $post->description }}</p>
            </div>


            
        @endforeach
    </div>
    
    
    <div class="py-1/12 mx-5 ">
        <div class="flex w-full overflow-auto ">
            @foreach ($test as $test)
                <img src="{{ asset('posts/images/'.$test->image) }}" style="max-height: 300px; max-width: 300px;">
            @endforeach
        </div>
    </div>
</div>

@endsection