@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300"> <!-- center x left to right, take up entire height, everything inside take up all room needed, entire thing centered on browser, background to gray 300 -->
    <div class="w-96 bg-blue-900 rounded-lg shawdow-xl p-6"> <!-- set width to 64, background to blue 900, rounded corners, shadow around entire, padding of 6 -->

    <svg 
     class="fill-current text-white"
     version="1.1"
     baseProfile="full"
     width="300" height="200"
     xmlns="http://www.w3.org/2000/svg">
    <rect width="100%" height="100%" fill="grey" />
    <circle cx="150" cy="100" r="80" fill="blue" />
    <text x="150" y="125" font-size="60" text-anchor="middle" fill="white">YM</text>
    </svg>

    <h1 class="text-white text-3xl pt-8">Welcome back</h1>
    <h2 class="text-blue-300">Enter your credientials below</h2>
    <form method="POST" action="{{ route('login') }}" class="pt-8">
                        @csrf

                        <div class="relative">
                            <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">E-Mail</label>

                            <div class="">
                                <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-300 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="your@email.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="relative pt-3">
                            <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Password</label>

                            <div class="">
                                <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-300 outline-none focus:bg-blue-700" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
    </div>
</div>
@endsection
