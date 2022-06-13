
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
                        <form action="{{route('kycinfo')}}" method="post">
                            @csrf
                            <div class="from-step">
                               
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
                                                                <div class="payment-item" onclick="myFunction()">
                                                                    <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH" checked>
                                                                    <label for="payeth">
                                                                        <div class="payment-icon payment-icon-eth"><img src="images/icon-ethereum.png" alt="icon"></div>
                                                                        <span class="payment-cur">$10 2% for 12months</span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction1()">
                                                                    <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                                                    <label for="paylightcoin">
                                                                        <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="images/icon-lightcoin.png" alt="icon"></div>
                                                                        <span class="payment-cur">$50 2% for 10months</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction2()">
                                                                    <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC">
                                                                    <label for="paybtc">
                                                                        <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                                                        <span class="payment-cur">$100 2% for 8months</span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction3()">
                                                                    <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                                                                    <label for="payusd">
                                                                        <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                                        <span class="payment-cur">$500 2% for 6months</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction3()">
                                                                    <input class="payment-check" type="radio" id="payusd3" name="payOption" value="tranxUSD">
                                                                    <label for="payusd3">
                                                                        <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                                        <span class="payment-cur">$1000 2% for 3months</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div><!-- .payment-list -->
                                               
                                        <div class="gaps-2x"></div>
                                       
                                       
                                        <div class="from-step-item">
                                            <div class="from-step-heading">
                                                <div class="from-step-number">02</div>
                                                <div class="from-step-head">
                                                    <h4>Step 2 : Verify Payment</h4>
                                                    <p>Upload POP to verify your payment.</p>
                                                </div>
                                            </div>
                                            <div class="from-step-content">
                                               
                                                <div class="gaps-2x"></div>
                                                <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                                                   
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#driver-licence">
                                                            <div class="nav-tabs-icon">
                                                                <img src="images/icon-licence.png" alt="icon">
                                                                <img src="images/icon-licence-color.png" alt="icon">
                                                            </div>
                                                            <span>Proof Of Payment</span>
                                                        </a>
                                                    </li>
                                                </ul><!-- .nav-tabs-line -->
                                                <div class="tab-content" id="myTabContent">
                                                    
                                                    <div class="tab-pane fade" id="driver-licence">
                                                        <h5 class="kyc-upload-title">To avoid delays when verifying payment, Please make sure bellow:</h5>
                                                        <ul class="kyc-upload-list">
                                                           
                                                            <li>Document should be good condition and clearly visible.</li>
                                                            <li>Make sure that there is no light glare on the card.</li>
                                                        </ul>
                                                        <div class="gaps-4x"></div>
                                                        <span class="upload-title">Upload Here Your Proof of Payment</span>
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <div class="upload-box">
                                                                    <div class="upload-zone">
                                                                        <div class="dz-message" data-dz-message>
                                                                            <span class="dz-message-text">Drag and drop file</span>
                                                                            <span class="dz-message-or">or</span>
                                                                            <p style="color:white;" class="btn btn-primary">SELECT</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="kyc-upload-img">
                                                                    <img src="images/vector-licence.png" alt="vector">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gaps-1x"></div>
                                                    </div>
                                                </div>
                                                <div class="gaps-2x"></div>
                                            </div><!-- .from-step-content -->
                                        </div><!-- .from-step-item -->
                                        <div class="gaps-2x"></div><!-- 20px gap -->

                                        <div class="progress-card" style="background-color: #0F4F94; color:white; border-color:#0F4F94;">
                                            <h3>STAKING HISTORY</h3>
                                        </div>
                                        <div class="gaps-3x"></div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Transaction type</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span style="color:rgb(20, 138, 20)">Buy</span></td>
                                                        <td><span>15 August 2022</span></td>
                                                        <td><span style="color:rgb(20, 138, 20)">Successful<em class="ti ti-check"></em></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span style="color:#ee0b0b">Sell</span></td>
                                                        <td><span>15 August 2022</span></td>
                                                        <td><span  style="color:#ee0b0b">Cancelled <em class="ti ti-close"></em></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span>Deposit</span></td>
                                                        <td><span>15 August 2022</span></td>
                                                        <td><span>Active <em class="ti ti-pulse"></em></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span>Withdraw</span></td>
                                                        <td><span>15 August 2022</span></td>
                                                        <td><span style="color: #FA761D;">Pending <em class="ti ti-control-pause"></em></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="gaps-2x"></div><!-- 20px gap -->

                                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#kycConfirm">Submit Details</a>
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
                    <div class="text-center"><button class="btn btn-primary" type="submit">Proceed</button></div>
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
