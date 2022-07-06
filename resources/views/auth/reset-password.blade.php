
@extends('layouts.header')
@section('content')
<main class="nk-pages">
    <div class="section" style="background-color: #F7F8FF">
        <div class="container">
            <div class="nk-blocks d-flex justify-content-center">
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title">Reset Password<br/><br/><p class="tc-default">Please, fill in your new password.</p></h5>
                        <!-- Session Status -->
                        <center style="background-color:#F7F8FF; color:black; border-radius: .5rem">
                        <x-auth-session-status class="" :status="session('status')" />

                         <!-- Validation Errors -->
                        <x-auth-validation-errors class="" :errors="$errors"/>
                        </center><br/>
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="field-item">
                                <div class="field-wrap">
                                    <x-input  class="input-bordered"  type="email" name="email" :value="old('email', $request->email)" required autofocus />
                                </div>
                            </div>

                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" class="input-bordered" placeholder="Password"  name="password"
                                    required autocomplete="new-password"
                                    >

                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" class="input-bordered" placeholder="Repeat Password" name="password_confirmation" required >
                                </div>
                            </div>
                           

                            <button class="btn btn-primary btn-block btn-md">Reset Password </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
        

        {{-- <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form> --}}

