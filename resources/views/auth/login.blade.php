@extends('layouts.header')
@section('content')
<main class="nk-pages">
    <div class="section" style="background-color: #F7F8FF">
        <div class="container">
            <div class="nk-blocks d-flex justify-content-center">
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title">Sign In<small class="tc-default">with your ECLIPSE Account</small></h5>
                        <!-- Session Status -->
                        <center >
                        <x-auth-session-status class="mb-4 " :status="session('status')" />

                         <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                        </center><br/>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" class="input-bordered" placeholder="Your Email" name="email" :value="old('email')" required autofocus>
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" class="input-bordered" placeholder="Password"  name="password"
                                    required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="field-item d-flex justify-content-between align-items-center">
                                <div class="field-item pb-0">
                                    <input name="remember" class="input-checkbox" id="remember-me-100" type="checkbox">
                                    <label for="remember-me-100">Remember Me</label>
                                </div>
                                <div class="forget-link fz-6">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot password?</a>
                                    @endif
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block btn-md">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
        

       
    