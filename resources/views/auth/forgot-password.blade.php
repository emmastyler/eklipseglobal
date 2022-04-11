@extends('layouts.header')
@section('content')
<main class="nk-pages">
    <div class="section" style="background-color: #F7F8FF">
        <div class="container">
            <div class="nk-blocks d-flex justify-content-center">
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title">Forgot Password?<br/><br/><p class="tc-default">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p></h5>
                        <!-- Session Status -->
                        <center style="background-color:#F7F8FF; color:black; border-radius: .5rem">
                        <x-auth-session-status class="" :status="session('status')" />

                         <!-- Validation Errors -->
                        <x-auth-validation-errors class="" :errors="$errors"/>
                        </center><br/>
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" class="input-bordered" placeholder="Your Email" name="email" :value="old('email')" required autofocus>
                                </div>
                            </div>
                           

                            <button class="btn btn-primary btn-block btn-md">Send Password Reset Link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
        

       
 
