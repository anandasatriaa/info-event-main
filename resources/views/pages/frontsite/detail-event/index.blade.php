@extends('layouts.auth')

@section('title', 'Add Events')

@section('content')



<div>
    <h1 class="mt-32 ml-32 text-5xl font-semibold text-white"></h1>
</div>
    <hr class="mx-32 border-1 mt-2" />
    
    <div class="mt-4">
    <span class="border-2 py-2 px-6 rounded-full text-white ml-32">{{ $event->category}}</span>
    <span class="border-2 py-2 px-6 rounded-full text-white ml-2">{{ $event->instance}}</span>
    </div>

    <div class="mx-48 my-16 flex">
        <img src="{{ url(Storage::url($event->poster)) }}" alt="Event" class="object-cover h-2/5 w-2/5 rounded-lg">
        <div class="ml-40 my-16">
        <span class="border-2 rounded-3xl text-white flex px-2 py-3 mb-4"><img src="{{ asset('assets/frontsite/images/2.png') }}" alt="Jam" class="h-12 w-12 my-4"><span class="ml-3 mr-24"><span class="underline">Date and Time</span><br>{{ $event->date_is_held}}<br>{{ $event->time}}<br></span></span>
        <span class="border-2 rounded-3xl text-white flex px-2 py-3 mb-4"><img src="{{ asset('assets/frontsite/images/3.png') }}" alt="Jam" class="h-10 w-10 my-4"><span class="ml-3"><span class="underline">Location</span><br>{{ $event->location}}</span></span>
        <span class="border-2 rounded-3xl text-white flex px-2 py-3 mb-4"><img src="{{ asset('assets/frontsite/images/1.png') }}" alt="Jam" class="h-10 w-10 my-4"><span class="ml-3"><span class="underline">Registration</span><br>{{ $event->registration}}</span></span>
        <a href="{{ $event->invite_group_link }}"><button class="border-2 border-indigo-500 hover:bg-white/30 hover:border-indigo-600 text-white bg-gradient-to-r from-white/40 to-white/10 font-semibold rounded-full px-2 py-3 block mx-auto">
            Join The Event!
        </button> </a>
    </div>
    </div>

    <div>
        <h2 class="ml-32 font-semibold text-white text-3xl">- Description</h2>
        <p class="mx-32 mt-10 text-white">{{ $event->description}}</p>
    </div>
    <br><br><br><br>

@endsection
