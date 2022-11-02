@extends('layouts.default')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class=" grid grid-cols-2 gap-14 mt-20">
            @forelse ($event as $key => $events)
                <div class="backdrop-blur-sm bg-white/20 h-15 aspect-square rounded-3xl ml-20 grid grid-cols-1 mb-10">
                    <div class="grid grid-cols-2 grid-flow-col gap-4">
                           
                        <button
                            class="mt-12 ml-24 mr-10 h-10 text-indigo-100 transition-colors duration-150 backdrop-blur-sm rounded-full hover:bg-white/20">
                           {{ $events->category}}
                            
                        </button>
                        <button
                            class="mt-12 mr-24 ml-10 text-indigo-100 transition-colors duration-150 backdrop-blur-sm rounded-full hover:bg-white/20">
                            {{ $events->instance}}
                        </button>
                    </div>
                    <h3 class="mt-7 mb-5 text-center text-2xl font-semibold text-white">{{ $events->name }}</h3>
                    <div ><img src="{{ url(Storage::url($events->poster)) }}" class="h-full w-80 aspect-square rounded-3xl ml-28 mb-8 mx-auto" alt=""></div>
                    <button
                        class="mb-16 ml-56 mt-7 mr-56 h-10 content-place-center text-indigo-100 transition-colors duration-150 backdrop-blur-sm rounded-full hover:bg-white/20">
                        <a href="{{ route('detail-event.event', $events->id) }}">Detail</a>
                    </button>
                </div>
            @empty
                no event
            @endforelse
        </div>
    </div>

@endsection
