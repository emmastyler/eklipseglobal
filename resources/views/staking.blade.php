
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
                        <form action="{{route('staking.store')}}" method="post">
                            @csrf
                            <div class="from-step">
                                @if(session('error'))
                                    <center>
                                    <div style=" color:white; margin-top: -2.2rem; background-color:tomato; border:1px solid tomato; border-radius:2px; margin-top:5px;">
                                        <p style=" color:white;">{{session('error')}}</p>
                                       
                                        
                                    </div>
                                    </center>
                                    @endif
                                    @if(session('success'))
                                    <center>
                                    <div style=" color:white; margin-top: -2.2rem; background-color:rgb(19, 114, 19); border:1px solid rgb(19, 114, 19); border-radius:2px; margin-top:5px;">
                                        <p style=" color:white;">{{session('success')}}</p>
                                       
                                        
                                    </div>
                                    </center>
                                    @endif
                                    @if(session('stake_success'))
                                    <center>
                                    <div style=" color:white; margin-top: -2.2rem; background-color:rgb(19, 114, 19); border:1px solid rgb(19, 114, 19); border-radius:2px; margin-top:5px;">
                                        <p style=" color:white;">{{session('stake_success')}}</p>
                                       
                                        
                                    </div>
                                    </center>
                                    @endif
                                <div class="from-step-item">
                                    <div class="from-step-heading">
                                        <div class="from-step-number">01</div>
                                        <div class="from-step-head">
                                            <h4>Choose your staking/investment plan</h4>
                                            
                                        </div>
                                    </div>
                                    <div class="from-step-content">       
                                                    <div class="gaps-1x"></div>
                                                    <div class="payment-list">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" >
                                                                    <input class="payment-check" type="radio" id="payeth" name="payOption" value="10 12">
                                                                    <label for="payeth">
                                                                        <div class="payment-icon payment-icon-eth"><img src="images/icon-ethereum.png" alt="icon"></div>
                                                                        <span class="payment-cur">$10 2% for 12months</span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item">
                                                                    <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="50 10">
                                                                    <label for="paylightcoin">
                                                                        <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="images/icon-lightcoin.png" alt="icon"></div>
                                                                        <span class="payment-cur">$50 2% for 10months</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item">
                                                                    <input class="payment-check" type="radio" id="paybtc" name="payOption" value="100 8">
                                                                    <label for="paybtc">
                                                                        <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                                                        <span class="payment-cur">$100 2% for 8months</span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item">
                                                                    <input class="payment-check" type="radio" id="payusd" name="payOption" value="500 6">
                                                                    <label for="payusd">
                                                                        <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                                        <span class="payment-cur">$500 2% for 6months</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item">
                                                                    <input class="payment-check" type="radio" id="payusd3" name="payOption" value="1000 3">
                                                                    <label for="payusd3">
                                                                        <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                                        <span class="payment-cur">$1000 2% for 3months</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div><!-- .payment-list -->
                                                    <div class="gaps-2x"></div>
                                                    @if($userscs)
                                                    <div class="payment-calculator-note"><i class="fas fa-info-circle"></i>Summary of stake order.</div>
                                                    <div class="gaps-1x"></div>
                                                    <div class="payment-summary">
                                                        
                                                        <div class="row">
                                                           
                                                            <div class="col-md-6">
                                                                <div class="payment-summary-item payment-summary-final">
                                                                    <h6 class="payment-summary-title">Final Stake Amount</h6>
                                                                    <div class="payment-summary-info">
                                                                        
                                                                        @if($userscs->amount_stake)
                                                                        <span class="payment-summary-amount">{{$userscs->amount_stake}}</span> <span>USD</span>
                                                                        @endif
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                           
                                                            <div class="col-md-6">
                                                                <div class="payment-summary-item payment-summary-tokens">
                                                                    <h6 class="payment-summary-title">Total interest after {{$userscs->time_left}} months</h6>
                                                                   
                                                                    <div class="payment-summary-info">
                        
                                                                     @if($userscs->amount_stake)
                                                                     <span class="payment-summary-amount">{{$userscs->amount_stake * (0.02) }}</span> <span>USD</span>
                                                                     <input class="input-bordered" type="text" id="time_later" value="{{$userscs->month}}" name="time_later" style="display:none" readonly>
                                                                     <input class="input-bordered" type="text" id="timer" name="time_later" value="" style="display: block" readonly>
                                                                     
                                                                    </div>
                                                                    @endif
                                                                   
                                                                   {{--  <div class="payment-summary-info">
                                                                        <span class="payment-summary-amount"></span> <span>or</span>
                                                                    </div>
                                                                    <div class="payment-summary-info">
                                                                        <span class="payment-summary-amount">60</span> <span>ELPS</span>
                                                                    </div> --}}
                                                                </div>
                                                            </div><!-- .col -->
                                                            <hr/>
                                                           
                                                        </div><!-- .row -->
                                                    </div><!-- .payment-summary -->
                                                     @endif
                                                    @if(count($users)==0)
                                                    <div class="text-center" ><button class="btn btn-primary" type="submit" style="display:block" id="buyToken">Stake</button></div>

                                                    @endif
                        
                                                    @if($userscs)
                                                    @if($userscs->month == 0)
                                                    <div class="text-center" ><button class="btn btn-primary" type="submit" style="display:block" id="buyToken">Stake</button></div>

                                                    @endif
                                                    @if($userscs->status == 'Running')
                                                    <a href="#" class="btn btn-primary payment-btn"  style="display: block;" id="waittoken">Please wait for your present order to expire before a new stake.</a><br/>
                                                    @endif
                                                   
                                                    <a href="{{'/staking/'.$userscs->id}}" class="btn btn-primary payment-btn"  style="display:none;" id="claimtoken" onclick="ourprocess()">Claim stake REWARD</a>
                                                    
                                                    @endif    
                                        <div class="gaps-2x"></div>
                                       
                                       

                                        
                                       
                                    </div><!-- .from-step-content -->
                                </div><!-- .from-step-item -->
                            </div><!-- .from-step -->
                            
                        
                    </div><!-- .user-kyc -->
                </div><!-- .user-content -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- UserWraper End -->
    <div class="modal fade" id="modepop" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="kyc-popup">
                    <h2 class="text-center">Confirm Information</h2> 
                    <h5 class="text-center">You are about making a total payment of ##</h4>
                    <div class="input-item">
                        {{-- <input class="input-checkbox" id="term-condition" type=""> --}}
                        
                        <center><label for="term-condition">Payment takes 12-24 hrs for confirmation.</center></label>
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

        

       /*  function myFunction (){
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

        } */
        function ourprocess(){
            localStorage.removeItem('currentTimes');
                localStorage.removeItem('targetTimes');          

        }
        
  var interval;
           let months = document.getElementById('time_later').value;
           
           let minutes = months ? (months * 1) : null;
           let currentTime = localStorage.getItem('currentTimes');
           let targetTime = localStorage.getItem('targetTimes');
          
           if(targetTime == null && currentTime == null && months > 0){
               currentTime = new Date();
               targetTime = new Date(currentTime.getTime() + (minutes * 60000));
               localStorage.setItem('currentTimes', currentTime);
               localStorage.setItem('targetTimes', targetTime);
           }
        else {
            currentTime = new Date(currentTime);
            targetTime = new Date(targetTime);
        }
        if(checkComplete){
            interval = setInterval(checkComplete, 1000);
        }
        function checkComplete() {
            if(currentTime > targetTime){
                clearInterval(interval);
                document.getElementById('timer').value = 'Completed';
                if(months > 0){
                                    document.getElementById('claimtoken').style.display = 'block';

                }
                document.getElementById('waittoken').style.display = 'none';
                

            }
            else {
                currentTime = new Date();
               let timer = (targetTime - currentTime)/1000;
               var d = Math.floor(timer / (3600*24));
               var h = Math.floor(timer % (3600*24) / 3600);
               var m = Math.floor(timer % 3600/60);
               var s = Math.floor(timer % 60);

                
                //var mDisplay = d > 30 ? (d == 1 ? "day," : "days,")
               var dDisplay = d > 0 ? d + (d == 1 ? "day " : "days ") : ""
               var hDisplay = h > 0 ? h + (h == 1 ? "hour " : "hours ") : ""
               var mDisplay = m > 0 ? m + (m == 1 ? "minute " : "minutes ") : ""
               var sDisplay = s > 0 ? s + (s == 1 ? "second" : "seconds") : ""
                document.getElementById('timer').value = dDisplay + hDisplay + mDisplay + sDisplay
            }
        }
        document.onbeforeunload = function(){
            localStorage.setItem('currentTimes', currentTime)
        }
        
    </script>
</body>

</html>
