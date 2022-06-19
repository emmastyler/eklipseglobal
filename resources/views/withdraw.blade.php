
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ICO Crypto is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Account | User Center - ECLIPSEGLOBAL Crypto</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle1.css?ver=110">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style1.css?ver=110">
</head>

<body class="user-dashboard">
    <!-- Topbar -->
    @include('layouts.nav')
    
                <div class="user-content">
                    <div class="user-kyc">
                       
                            <div class="from-step">
                                @if($errors->any())
                                <div style=" color:white; margin-left: 2.2rem; background-color:tomato; border:1px solid tomato; border-radius:2px; margin-top:5px;">
                               
                                            <ul>
                                                 @foreach($errors->all() as $error)
                                                 <li>{{$error}}</li>
                                                 @endforeach
                                            </ul>
                                           
                                            
                                        </div>
                                        @endif
                                    @if(session('success'))
                                    <div style=" color:white; margin-left: 2.2rem; background-color:rgb(19, 114, 19); border:1px solid rgb(19, 114, 19); border-radius:2px; margin-top:5px;">
                                        <p style=" color:white;">{{session('success')}}</p>
                                       
                                        
                                    </div>
                                        
                                    
                                    @endif
                                    @if(session('error'))
                                    <div style=" color:white; margin-left: 2.2rem; background-color:rgba(255, 99, 71, 0.417); border:1px solid rgba(255, 99, 71, 0.417); border-radius:2px; margin-top:5px;">
                                        <p style=" color:white;">{{session('error')}}</p>
                                       
                                        
                                    </div>
                                        
                                    
                                    @endif
                                <div class="from-step-item">
                                    <div class="from-step-heading">
                                        @if (Auth::user()->security_id !== null)
                                            <div class="from-step-number">$</div>
                                        <div class="from-step-head">
                                            <h4>Choose your preferred withdrawal method</h4>
                                            
                                        </div>
                                        @else
                                        <div class="from-step-number">?</div>
                                        <div class="from-step-head">
                                            <h4>Please Set Security ID to enable withdrawal</h4>
                                            
                                        </div>
                                        @endif
                                       
                                    </div> 
                                    @if(Auth::user()->security_id !== null)
                                        <div>
                                            <div class="from-step-content">       
                                                            <div class="gaps-1x"></div>
                                                            <div class="payment-list">
                                                                <div class="row">
                                                                    
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="payment-item" onclick="myFunction1()">
                                                                            <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                                                            <label for="paylightcoin">
                                                                                <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="images/icon-lightcoin.png" alt="icon"></div>
                                                                                <span class="payment-cur">Skrill</span>
                                                                            </label>
                                                                            
                                                                        </div>
                                                                    </div><!-- .col -->
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="payment-item" onclick="myFunction2()">
                                                                            <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC">
                                                                            <label for="paybtc">
                                                                                <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                                                                <span class="payment-cur">Bitcoin</span>
                                                                            </label>
                                                                           
                                                                        </div>
                                                                    </div><!-- .col -->
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <div class="payment-item" onclick="myFunction3()">
                                                                            <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                                                                            <label for="payusd">
                                                                                <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                                                <span class="payment-cur">Bank wire</span>
                                                                            </label>
                                                                            
                                                                        </div>
                                                                    </div><!-- .col -->
                                                                </div><!-- .row -->
                                                            </div><!-- .payment-list -->
                                                       
                                                <div class="gaps-2x"></div>
        
                                                <div style="display: none;" id="showstack">
                                                    <form id="paymentForm" action="{{route('withdrawverify')}}" method="post">
                                                        @csrf  
                                                        <div style=" color:white;background-color:rgba(255, 99, 71, 0.417); border:1px solid rgba(255, 99, 71, 0.417); border-radius:2px; margin-top:5px;">
                                                            <h5 style=" color:white; padding-left:4px;">Withdrawal with Paystack is only for Nigeria residents.</h5>
                                                        </div><br/>
                                                        <div class="form-group input-item input-with-label">
                                                          <label for="email" class="input-item-label">Email Address</label>
                                                          <input type="email" name="email-address" class="input-bordered" value="{{Auth::user()->email}}" required readonly />
                                                        </div>
                                                        <div class="form-group input-item input-with-label">
                                                          <label for="amount" class="input-item-label">Amount</label>
                                                          <input type="tel" name="amount" class="input-bordered" required />
                                                        </div>
                                                        <div class="form-group input-item input-with-label">
                                                          <label for="first-name" class="input-item-label">Full Name</label>
                                                          <input type="text" name="fullname" class="input-bordered" value="{{Auth::user()->fullname}}" readonly/>
                                                        </div>
                                                        <div class="form-group input-item input-with-label">
                                                            <label for="first-name" class="input-item-label">Account Number</label>
                                                            <input type="text" name="account_number" class="input-bordered" value="{{Auth::user()->account_number}}" readonly/>
                                                          </div>
                                                          <div class="form-group input-item input-with-label">
                                                            <label for="first-name" class="input-item-label">Bank_code</label>
                                                            <input type="text" name="bank_code" class="input-bordered" value="{{Auth::user()->bank_code}}" readonly/>
                                                          </div>
                                                        <div class="form-submit">
                                                          <button type="submit" class="btn btn-primary"> Withdraw with Paystack </button>
                                                        </div>
                                                      </form>
                                                    </div>
                                                    <form  action="{{route('withdrawverify')}}" method="post">
                                                        @csrf
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        
                                                        <div class="input-item input-with-label">
                                                            <label for="token-address" class="input-item-label">Amount</label>
                                                            <input class="input-bordered" type="text" id="token-address" name="amount_withdraw" value="">
                                                            <span class="input-note"></span>
                                                        </div><!-- .input-item -->
        
                                                        <div class="input-item input-with-label">
                                                            <label for="token-address" class="input-item-label">Security ID</label>
                                                            <input class="input-bordered" type="text" id="token-address" name="security_id" value="">
                                                            <span class="input-note"></span>
                                                        </div><!-- .input-item -->
                                                        <!-- .input-item -->
                                                    </div><!-- .col -->
                                                    
                                                </div><!-- .row -->
                                                
                                                <div class="input-item input-with-label" style="display: none;" id="showskrill">
                                                    <label for="token-address" class="input-item-label">Skrill Email</label>
                                                    <input class="input-bordered" type="text" id="token-address" name="skrill_email" value="">
                                                    
                                                </div><!-- .input-item -->
        
                                                <div class="input-item input-with-label" style="display: none;" id="showstack">
                                                    <label for="token-address" class="input-item-label">Paystack Email</label>
                                                    <input class="input-bordered" type="text" id="token-address" name="token-address" value="4">
                                                    
                                                </div><!-- .input-item -->
        
                                                <div class="input-item input-with-label" style="display: none;" id="showbank">
                                                    <label for="swalllet" class="input-item-label">Bank Details</label>
                                                    <select class="input-bordered" name="bank_details" id="swalllet">
                                                        <option value="NULL">select bank</option>
                                                        <option value="{{Auth::user()->bank_name}}">{{Auth::user()->bank_name}} {{Auth::user()->account_number}} {{Auth::user()->fullname}}</option>
                                                        <option value="{{Auth::user()->bank_name_1}}">{{Auth::user()->bank_name_1}} {{Auth::user()->account_number_1}} {{Auth::user()->account_name_1}}</option>
                                                        <option value="{{Auth::user()->bank_name_2}}">{{Auth::user()->bank_name_2}} {{Auth::user()->account_number_2}} {{Auth::user()->account_name_2}}</option>
                                                        <option value="{{Auth::user()->bank_name_3}}">{{Auth::user()->bank_name_3}} {{Auth::user()->account_number_3}} {{Auth::user()->account_name_3}}</option>
                                                        <option value="{{Auth::user()->bank_name_4}}">{{Auth::user()->bank_name_4}} {{Auth::user()->account_number_4}} {{Auth::user()->account_name_4}}</option>
                                                    </select>
                                                </div><!-- .input-item -->
        
                                                <div class="input-item input-with-label" style="display: none;" id="showbitcoin">
                                                    <label for="token-address" class="input-item-label">Bitcoin address</label>
                                                    <input class="input-bordered" type="text" id="token-address" name="bitcoin_address" value="">
                                                    
                                                </div><!-- .input-item -->
        
                                                <div class="gaps-2x"></div><!-- 20px gap -->
                                                <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#kycConfirm">Submit Details</a>
                                                <div class="gaps-2x"></div><!-- 20px gap -->
                                            </div><!-- .from-step-content -->
                                        </div>
        
                                    
                                   @endif

                                </div><!-- .from-step-item -->
                            </div><!-- .from-step -->
                       
                    </div><!-- .user-kyc -->
                </div><!-- .user-content -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- UserWraper End -->
    <div class="modal fade" id="kycConfirm" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="kyc-popup">
                    <h2 class="text-center">Confirm Information</h2> 
                    <h5 class="text-center">You are about making a total withdrawal of ## in Naira</h4>
                    <div class="input-item">
                        {{-- <input class="input-checkbox" id="term-condition" type=""> --}}
                        
                        <center><label for="term-condition">Withdrawal takes 12-24 hrs for confirmation.</center></label>
                    </div>
                    
                   {{--  <div class="input-item">
                        <input class="input-checkbox" id="info-currect" type="checkbox">
                        <label for="info-currect">All the personal information I have entered is correct.</label>
                    </div>
                    <div class="input-item">
                        <input class="input-checkbox" id="certification" type="checkbox">
                        <label for="certification">I certify that, I am perticipating in the token distribution event in the capacity of an individual (and benificial owner) and not as an agent (or representative of a third party corporate entity.</label>
                    </div>
                    <div class="input-item">
                        <input class="input-checkbox" id="tokenKnow" type="checkbox">
                        <label for="tokenKnow">I understand that, I can only in the token distribution event with the wallet address that was entered in the application form.</label>
                    </div> --}}
                    <div class="gaps-2x"></div>
                    <div class="text-center"><button class="btn btn-primary" type="submit">Proceed with withdraw</button></div>
                </form>
                </div><!-- .modal-content -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <span class="footer-copyright">Copyright 2022, <a href="#">ICO Crypto</a>. All Rights Reserved.</span>
                </div><!-- .col -->
                <div class="col-md-5 text-md-end">
                    <ul class="footer-links">
                        <li><a href="policy.html">Privacy Policy</a></li>
                        <li><a href="policy.html">Terms of Sales</a></li>
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

    <!-- FooterBar End -->
    <!-- JavaScript (include all script here) -->
    <script src="assets/js/jquery.bundle1.js?ver=110"></script>
    <script src="assets/js/script1.js?ver=110"></script>
    <script>
        function myFunction (){
            document.getElementById("showstack").style.display = "block";
            document.getElementById("showskrill").style.display = "none";
            document.getElementById("showbitcoin").style.display = "none";
            document.getElementById("showbank").style.display = "none";

        }
        function myFunction1 (){
            document.getElementById("showskrill").style.display = "block";
            document.getElementById("showbitcoin").style.display = "none";
            document.getElementById("showbank").style.display = "none";
            document.getElementById("showstack").style.display = "none";

        }
        function myFunction2 (){
            document.getElementById("showbitcoin").style.display = "block";
            document.getElementById("showbank").style.display = "none";
            document.getElementById("showstack").style.display = "none";
            document.getElementById("showskrill").style.display = "none";

        }
        function myFunction3 (){
            document.getElementById("showbank").style.display = "block";
            document.getElementById("showstack").style.display = "none";
            document.getElementById("showskrill").style.display = "none";
            document.getElementById("showbitcoin").style.display = "none";

        }
    </script>
</body>

</html>
