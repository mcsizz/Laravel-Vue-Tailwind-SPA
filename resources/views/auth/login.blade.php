@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300"> <!-- center x left to right, take up entire height, everything inside take up all room needed, entire thing centered on browser, background to gray 300 -->
    <div class="w-96 bg-blue-900 rounded-lg shawdow-xl p-6"> <!-- set width to 64, background to blue 900, rounded corners, shadow around entire, padding of 6 -->

        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" class="fill-current text-white w-24 ml-8 mt-8">
            <!-- LineTo commands with absolute coordinates -->
            <path fill="none" stroke="black" stroke-width="6"
                d="M 50,100
                   L 50,65
                   L 15,2
                   M 50,65
                   L 85,2

                   M 10,98
                   L 30,2
                   L 50,40
                   L 70,2
                   L 90,98">
        </svg>

        <h1 class="text-white text-3xl pt-8">Welcome back</h1>
        <h2 class="text-blue-300">Enter your credientials below</h2>
        <form method="POST" action="{{ route('login') }}" class="pt-8">
            @csrf

            <div class="relative">
                <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">E-Mail</label>

                <div>
                    <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-300 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="your@email.com">

                    @error('email')
                        <span class="text-red-600 text-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="relative pt-3">
                <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Password</label>

                <div>
                    <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-300 outline-none focus:bg-blue-700" name="password" autocomplete="current-password">

                    @error('password')
                        <span class="text-red-600 text-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="pt-2">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-white" for="remember">Remember Me</label>
            </div>

            <div class="pt-8">
                <button type="submit" class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                    Login
                </button>
            </div>

            <div class="flex justify-between text-sm font-bold pt-8 text-white">
                <a class="" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
                <a class="" href="{{ route('register') }}">
                    Register
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
