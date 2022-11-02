@extends('layouts.auth')

@section('title', 'Home')

@section('content')


     <!-- Glass box1 Start -->
     <div class="mt-24"></div>
     <section>
      <div class="container container-1 px-40 mx-auto">
        <div class="box-event">
          <div class="grid grid-cols-2 md:gap-0 pr-36">
            <div class="m-2 mx-auto justify-self-center my-auto kolom-1 object-cover">
              <img class="gambar-komp my-auto" src="{{ asset('/assets/frontsite/images/komp_info2.png') }}" alt="Gambar komputernya" width="500px" />
            </div>
            <div class="justify-self-center my-auto mx-auto kolom-2">
              <div class="grid grid-rows-2 text-center left-0 place-self-start items-start">
                <h1 class="text-white font-bold lg:text-6xl md:text-base mt-5">DON'T WORRY !</h1>
                <h1 class="text-white font-medium lg:text-3xl md:text-sm mt-10 place-content-end">
                  We can accomodate your event <br />
                  for many people to see !
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Glass box1 End -->

    <!-- About Start -->
    <section id="about">
      <div class="container mx-auto my-56 px-40">
        <div class="text-3xl font-bold text-white text-about">
          <h1>ABOUT INFO EVENT</h1>
        </div>
        <div class="grid grid-cols-2">
          <div class="text-justify my-auto text-white text-description">
            <p>
              InfoEvent Website is a platform used to help and share event or programs such as webinars, workshops, and also job fairs. We're trying to help the organizer also people whose trying to get an easy information about an event in
              such simple way possible. Our goal is to be the number one facilitator for event and programs in Indonesia.
            </p>
          </div>
          <div class="items-center self-center place-content-center place-items-center place-self-center">
            <div class="infoevent-about">
              <img src="{{ asset('/assets/frontsite/images/about-logo4.png') }}" alt="Gambar komputernya" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About End -->

    <!-- Documentation -->
    <section>
      <h1 class="mx-auto text-center documentation">Documentation</h1>
      <div id="carouselExampleCaptions" class="carousel mx-auto slide relative" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden object-cover">
          <div class="carousel-item active relative float-left w-full">
            <img src="{{ asset('/assets/frontsite/images/webinar.jpeg') }}" class="block w-full" alt="..." />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="{{ asset('/assets/frontsite/images/webinar2.jpg') }}" class="block w-full" alt="..." />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="{{ asset('/assets/frontsite/images/webinaron.jpeg') }}" class="block w-full" alt="..." />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="{{ asset('/assets/frontsite/images/webinar-7.png') }}" class="block w-full" alt="..." />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="{{ asset('/assets/frontsite/images/webinar-8.png') }}" class="block w-full" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- Documentation End -->
    <div class="pemisah"></div>
    <!-- Button Add Event -->
    <h1 class="text-add-event text-center">So Let's Share Your Event !!!</h1>

    <div class="container mx-auto">
      <div class="">
        <button class="rounded-full text-center button-add font-bold">
          <a href="{{ route('Add-Event.index') }}">
            Add Your Event <br />
            Right Now !!
          </a>
          </button>
      </div>
    </div>

    <!-- Button Add Event End-->
    <div class="pemisah"></div>

@endsection