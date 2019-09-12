@extends('layouts.app')

@section('content')
<div class="container">
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

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
