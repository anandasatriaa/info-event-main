@extends('layouts.auth')

@section('title', 'Success')

@section('content')

        <!-- Form -->
        <div id="form1">
            <br>
            <h1 class="text-4xl text-white"><b>Congratulations! You have successfully<br>submitted your event</b></h1><br>
        </div>

        <div id="form2" class="mt-10 text-3xl rounded-full text-white"><br>
            <p class="text-center">
                Please wait because your event <br>
                will be checked <br>
                by our admin <br>
            </p>
        </div>

        <div id="form3" class="mt-5 grid justify-items-end">
            <a href="{{ route('index') }}">
                <button id="Button2" class="text-center text-sky-900 border-2 border-white rounded-full hover:text-sky-400 px-2 py-3 block mx-auto">
                    <b>
                        Back to <br>
                        Homepage
                    </b>
                </button>
            </a>
        </div>

@endsection