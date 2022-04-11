@extends('layouts.header')
@section('content')
<main class="nk-pages">
    <div class="section" style="background-color: #F7F8FF">
        <div class="container">
            <div class="nk-block">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head text-center">
                            <h2 class="title title-regular">Congratulations!</h2>
                            <p class="wide-sm">We’re happy to have you join us....</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row justify-content-between">
                            
                            <div class="col-md-3">
                               
                            </div>
                                 
                            <div class="col-md-6">
                                <div class="feature feature-center card card-s3 card-lg-xy">
                                    <div class="feature-icon feature-icon-lg-s2 pb-4 mt-0 mx-auto">
                                        <img src="images/icons/icon-t3.png" alt="">
                                    </div>
                                    <div class="feature-text">
                                        <h4 class="title title-lg">Check your Inbox.</h4>
                                        <p>Click the link we sent to complete your account set-up. If you didn't receive the email, we will gladly send you another.</p><br/>
                                        @if (session('status') == 'verification-link-sent')
                                        <div class="mb-4 font-medium text-sm text-green-600" style="color: #2BC9B4">
                                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                        </div>
                                    @endif
                                        <form method="POST" action="{{ route('verification.send') }}">
                                            @csrf
                            
                                            <div>
                                                <x-button style="background-color:#2BC9B4">
                                                    {{ __('Resend Verification Email') }}
                                                </x-button>
                                            </div>
                                        </form><br/>
                                        <a href="/" class="btn btn-md btn-outline btn-secondary">OK</a>
                                        <div class="mt-4 flex items-center justify-between">

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                
                                                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                                    {{ __('Log Out') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                 
                            <div class="col-md-3">
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // -->
</main>
<script>
   
</script>
@endsection  
       

       

        

