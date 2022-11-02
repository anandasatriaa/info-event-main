@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<!-- Gambar dan Tulisan Hello -->
    <table class="table-auto border-spacing-0 table justify-items-center">
        <tbody>
        <tr>
            <td class = "">
            <img class="object-fill" src = "{{ asset('assets/frontsite/images/logoform.png') }}" width = "300px">
            </td>
            <br>
            <td class = "">
            <h1 class = "font-sans font-bold text-center text-white hello">Hello, Everyone! Register Now</h1>
            <h1 class = "font-sans font-bold text-center text-white hello">or Log In to Continue!</h1>
            </td>
        </tr>
        </tbody>
    </table>
  <!-- End Gambar dan Tulisan Hello -->

  <br><br>

  <!-- Form Register -->
    <form method="POST" action="{{ route('register') }}">

        @csrf

            <div class="grid gap-2 mb-6 backdrop-blur-sm bg-white/30 rounded-3xl blur1">
                <div class="m-12">
                    <div>
                    <input for="name" type="text" id="name" name="name" class="backdrop-blur-sm bg-white/5 border border-indigo-500 text-white text-sm block w-full p-2.5 mb-1
                     placeholder-white focus:outline-none focus:border-indigo-500" placeholder="Full Name" value="{{ old('name') }}" required autofocus />

                     @if ($errors->has('name'))
                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('name') }}</p>
                    @endif

                    </div>
                    
                    
                    <div>
                    <input for="email" type="text" id="email" name="email" class="backdrop-blur-sm bg-white/5 border border-indigo-500 text-white text-sm block w-full p-2.5 mb-1 placeholder-white focus:outline-none focus:border-indigo-500" 
                    placeholder="Email Address" value="{{ old('email') }}" required autofocus
                    />

                    @if ($errors->has('email'))
                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
                    @endif

                    </div>
                    <div>
                    <input for="password" type="password" id="password" name="password" class="backdrop-blur-sm bg-white/5 border border-indigo-500 text-white text-sm block w-full p-2.5 mb-1 placeholder-white focus:outline-none focus:border-indigo-500" 
                    placeholder="Password" value="{{ old('password')}}"  required autofocus
                    />
                    </div>
                    <div>
                    <input for="password_confirmation" type="password" id="password_confirmation"
                    name="password_confirmation" class="backdrop-blur-sm bg-white/5 border border-indigo-500 text-white text-sm block w-full p-2.5 mb-1 placeholder-white focus:outline-none focus:border-indigo-500"
                    placeholder="Confirmation Password" required autofocus
                    />

                    @if ($errors->has('password_confirmation'))
                        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('password_confirmation') }}</p>
                    @endif

                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3"></div>
                        <label class="md:w-2/3 block text-black font-bold">
                            <span class="text-sm">
                            Already Have an Account? <a href = "login.html"><u>Login Here!</u></a>
                            </span>
                    </label>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/2"></div>
                        <div class="md:w-2/3">
                            <button class="shadow bg-purple-700 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
  <!-- End Form Register -->

@endsection