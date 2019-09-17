@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-blue-900 rounded-lg shawdow-xl p-6">
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


        <h1 class="text-white text-3xl pt-8">Welcome new user</h1>
        <h2 class="text-blue-300">Register by entering your information below</h2>
                
        <form method="POST" action="{{ route('register') }}" class="pt-8">
            @csrf

            <div class="relative">
                <label for="name" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Name</label>

                <div>
                    <input id="name" type="text" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-300 outline-none focus:bg-blue-700" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="your@email.com">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="relative pt-3">
                <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">E-Mail Address</label>

                <div>
                    <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-300 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}" autocomplete="email"  placeholder="Your Name">

                    @error('email')
                        <span class="text-red-600 text-sm pt-1" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="relative pt-3">
                <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-300 outline-none focus:bg-blue-700" name="password" autocomplete="new-password">

                    @error('password')
                        <span class="text-red-600 text-sm pt-1" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="relative pt-3">
                <label for="password-confirm" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-300 outline-none focus:bg-blue-700" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="pt-8">
                <button type="submit" class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                    Register
                </button>
            </div>

        </form>        
    </div>
</div>
@endsection
