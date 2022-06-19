
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
                            <div class="from-step-item">
                                <div class="from-step-content">

                                </div>
                            </div>
                        </div>
                        
                        
                            <div class="from-step">
                               
                                <div class="from-step-item">
                                    <div class="from-step-heading">
                                        <div class="from-step-number">$</div>
                                        <div class="from-step-head">
                                            <h4>Choose your preferred deposit method</h4>
                                           
                                        </div>
                                    </div>
                                    <div class="from-step-content">       
                                                    <div class="gaps-1x"></div>
                                                    <div class="payment-list">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction()">
                                                                    <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH">
                                                                    <label for="payeth">
                                                                        <div class="payment-icon payment-icon-eth"><img src="images/icon-ethereum.png" alt="icon"></div>
                                                                        <span class="payment-cur">Paystack</span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction1()">
                                                                    <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                                                    <label for="paylightcoin">
                                                                        <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="images/icon-lightcoin.png" alt="icon"></div>
                                                                        <span class="payment-cur">Skrill</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction2()">
                                                                    <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC">
                                                                    <label for="paybtc">
                                                                        <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                                                        <span class="payment-cur">Bitcoin</span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
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
                                        <form id="paymentForm">                                            <div style=" color:white;background-color:rgba(255, 99, 71, 0.417); border:1px solid rgba(255, 99, 71, 0.417); border-radius:2px; margin-top:5px;">
                                                <h5 style=" color:white; padding-left:4px;">Payment with Paystack is only for Nigeria residents.</h5>
                                            </div><br/>
                                            <div class="form-group input-item input-with-label">
                                              <label for="email" class="input-item-label">Email Address</label>
                                              <input type="email" id="email-address" class="input-bordered" required />
                                            </div>
                                            <div class="form-group input-item input-with-label">
                                              <label for="amount" class="input-item-label">Amount</label>
                                              <input type="tel" id="amount" class="input-bordered" required />
                                            </div>
                                            <div class="form-group input-item input-with-label">
                                              <label for="first-name" class="input-item-label">First Name</label>
                                              <input type="text" id="first-name" class="input-bordered" />
                                            </div>
                                            <div class="form-group input-item input-with-label">
                                              <label for="last-name" class="input-item-label">Last Name</label>
                                              <input type="text" id="last-name" class="input-bordered" />
                                            </div>
                                            <div class="form-submit">
                                              <button type="submit" class="btn btn-primary" onclick="payWithPaystack(event)"> Pay with Paystack </button>
                                            </div>
                                          </form>
                                        </div>
                                        <form action="{{route('depositmode')}}" method="post">
                                            @csrf
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                
                                                

                                                
                                                <!-- .input-item -->
                                            </div><!-- .col -->
                                            
                                        </div><!-- .row -->
                                        
                                        <div class="input-item input-with-label" style="display: none;" id="showskrill">
                                            <label for="token-address" class="input-item-label">Amount in dollars</label>
                                                    <input class="input-bordered" type="text" id="token-address" name="amountpaid_s" value="">
                                                    <span class="input-note"></span>

                                            <label for="token-address" class="input-item-label">Skrill Email</label>
                                            <input class="input-bordered" type="text" id="token-address" name="token-address" value="company skrill email">
                                            
                                        </div><!-- .input-item -->
                                        <input class="input-bordered" type="text" id="token-address" name="email" value=" {{ Auth::user()->email }}" hidden>
                                       
                                        <div class="input-item input-with-label" style="display: none;" id="showbank">
                                            <label for="token-address" class="input-item-label">Amount in dollars</label>
                                                    <input class="input-bordered" type="text" id="token-address" name="amountpaid_bw" value="">
                                                    <span class="input-note"></span>
                                            
                                            <label for="token-address" class="input-item-label">Bank Details</label>
                                            <input class="input-bordered" type="text" id="token-address" name="token-address" value="Company bank details">
                                            
                                        </div><!-- .input-item -->
                                        

                                        <div class="input-item input-with-label" style="display: none;" id="showbitcoin">
                                            <label for="token-address" class="input-item-label">Amount in dollars</label>
                                                    <input class="input-bordered" type="text" id="token-address" name="amountpaid_b" value="">
                                                    <span class="input-note"></span>
                                            
                                            <label for="token-address" class="input-item-label">Bitcoin address</label>
                                            <input class="input-bordered" type="text" id="token-address" name="token-address" value="company_btc">
                                            
                                        </div><!-- .input-item -->

                                        <div class="gaps-2x"></div><!-- 20px gap -->
                                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" style="display: none;" id="realsub" data-bs-target="#kycConfirm">Submit Details</a>
                                        <div class="gaps-2x"></div><!-- 20px gap -->
                                    </div><!-- .from-step-content -->
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
                    <h5 class="text-center">You are about making a total deposit of ## in Naira</h4>
                    <div class="input-item">
                        {{-- <input class="input-checkbox" id="term-condition" type=""> --}}
                        
                        <center><label for="term-condition">deposit takes 12-24 hrs for confirmation.</center></label>
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
                    <div class="text-center"><button class="btn btn-primary" type="">I have made deposit</button></div>
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
    <script src="https://js.paystack.co/v1/inline.js"></script> 

    <script>
        function myFunction (){
            document.getElementById("showstack").style.display = "block";
            document.getElementById("showskrill").style.display = "none";
            document.getElementById("showbitcoin").style.display = "none";
            document.getElementById("showbank").style.display = "none";
            document.getElementById("realsub").style.display = "none";


        }
        function myFunction1 (){
            document.getElementById("showskrill").style.display = "block";
            document.getElementById("showbitcoin").style.display = "none";
            document.getElementById("showbank").style.display = "none";
            document.getElementById("showstack").style.display = "none";
            document.getElementById("realsub").style.display = "block";


        }
        function myFunction2 (){
            document.getElementById("showbitcoin").style.display = "block";
            document.getElementById("showbank").style.display = "none";
            document.getElementById("showstack").style.display = "none";
            document.getElementById("showskrill").style.display = "none";
            document.getElementById("realsub").style.display = "block";


        }
        function myFunction3 (){
            document.getElementById("showbank").style.display = "block";
            document.getElementById("showstack").style.display = "none";
            document.getElementById("showskrill").style.display = "none";
            document.getElementById("showbitcoin").style.display = "none";
            document.getElementById("realsub").style.display = "block";


        }
    </script>
    <script>
        const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_90f51162f01f1572cd79b591d471ced283ddb9dd', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      
  window.location.href = "depositverify/" + response.reference + "/" + document.getElementById("email-address").value;

    }
  });
  handler.openIframe();
}
    </script>
    
</body>

</html>
