@extends('layouts.auth')

@section('title', 'Add Events')

@section('content')

    <!-- Form -->
    <div id="form1">
        <br>
        <h1 class="text-4xl text-white "><b>Let's share your Event!</b></h1><br><br>
        <form method="POST" action="{{ route('Add-Event.store') }}" enctype="multipart/form-data">

            @csrf
            <label id="label1" class="text-white text-2xl mb-3 "><b>Event Title</b></label>
            <input type="text" id="name" name="name" class="glassy-text " value="{{ old('name') }}"
                autocomplete="off" required>
            @if ($errors->has('name'))
                <p style="font-semibold color: red;">
                    {{ $errors->first('name') }}</p>
            @endif
            <br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Instance</b></label>
            <input type="text" id="instance" name="instance" class="glassy-text " value="{{ old('instance') }}"
                autocomplete="off" required>

            @if ($errors->has('instance'))
                <p style="font-semibold color: red;">
                    {{ $errors->first('instance') }}</p>
            @endif

            <br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Date Event</b></label>
            <input type="date" id="date_is_held" name="date_is_held" class="glassy-text" placeholder="2022-01-20"
                value="{{ old('date_is_held') }}" autocomplete="off" required>

            @if ($errors->has('date_is_held'))
                <p style="font-semibold color: red;">
                    {{ $errors->first('date_is_held') }}</p>
            @endif
            <br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Time</b></label>
            <input type="time" id="time" name="time" class="glassy-text" placeholder="Choose Time"
                value="{{ old('time') }}" autocomplete="off" required>

            @if ($errors->has('time'))
                <p style="font-semibold color: red;">
                    {{ $errors->first('time') }}</p>
            @endif
            <br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Location</b></label>
            <input type="location" id="location" name="location" class="glassy-text" placeholder="Hall or Zoom Meeting"
                value="{{ old('location') }}" autocomplete="off" required>

            @if ($errors->has('location'))
                <p style="font-semibold color: red;">
                    {{ $errors->first('location') }}</p>
            @endif
            <br>
            <div>
                <label id="label1" class="text-white text-2xl mb-3 font-bold ">Registration </label>
                <select name="registration" id="registration" class="glassy-text" required>
                    <option value="{{ '' }}" class="text-white" disabled selected>Choose
                    </option>

                    <option value="Free"> Free
                    </option>
                    <option value="Paid"> Paid
                    </option>
                    

                </select>

                @if ($errors->has('registration'))
                    <p style="font-style: bold; color: red;">
                        {{ $errors->first('registration') }}</p>
                @endif
            </div>

            <div>
                <label id="label1" class="text-white text-2xl mb-3 font-bold ">Category </label>
                <select name="category" id="category" class="glassy-text" required>
                    <option value="{{ '' }}" class="text-white" disabled selected>Choose
                    </option>

                    <option value="Webinar"> Webinar
                    </option>
                    <option value="Workshop"> Workshop
                    </option>
                    <option value="Job Fair"> Job Fair
                    </option>

                </select>

                @if ($errors->has('category'))
                    <p style="font-style: bold; color: red;">
                        {{ $errors->first('category') }}</p>
                @endif
            </div>


            <br>

            <label id="label1" class="text-white text-2xl mb-3 "><b>Invite Link</b></b></label>
            <input type="text" id="invite_group_link" name="invite_group_link"
                placeholder="https://forms.gle/DLf4gJGmL8wpsfhf9" value="{{ old('invite_group_link') }}" autocomplete="off"
                required class="glassy-text ">

            @if ($errors->has('invite_group_link'))
                <p style="font-style: bold; color: red;">
                    {{ $errors->first('invite_group_link') }}</p>
            @endif

            <br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Contact</b></b></label>
            <input type="text" id="contact" name="contact"
                placeholder="081234567890" value="{{ old('contact') }}" autocomplete="off"
                required class="glassy-text ">

            @if ($errors->has('contact'))
                <p style="font-style: bold; color: red;">
                    {{ $errors->first('contact') }}</p>
            @endif

            <br>

            <label id="label1" class="text-white text-2xl mb-3 "><b>Event Description</b></label>
            <input type="text" id="description" name="description" placeholder="A-Z" class="glassy-text "
                style="height:120px; vertical-align:text-top" value="{{ old('description') }}" autocomplete="off" required
                class="glassy-text ">
            @if ($errors->has('description'))
                <p style="font-style: bold; color: red;">
                    {{ $errors->first('description') }}</p>
            @endif
            <br>
            <label id="label1" for="poster" aria-describedby="poster" class="text-white text-2xl mb-5 mt-3"><b>Event
                    Poster</b></label>
            <input type="file" accept="image/png, image/svg, image/jpeg" class="custom-file-input " id="poster"
                name="poster" required>

            @if ($errors->has('poster'))
                <p style="font-style: bold; color: red;">
                    {{ $errors->first('poster') }}</p>
            @endif

            <div class="block items-end container text-right">
            <button id="Button1"
                class=" text-white bg-white/30 right-0 text-2xl mb-10 border-1 border-white rounded-xl hover:bg-slate-100 hover:text-sky-900">
                Submit Form </button><br>
            </div>
        </form>
    </div>

@endsection