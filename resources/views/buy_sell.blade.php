
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Eclipse Crypto is a modern and elegant landing page, created for Eclipse Agencies and digital crypto currency investment website.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Account | User Center - Eclipse Crypto</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle1.css?ver=110">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style1.css?ver=110">
</head>

<body class="user-dashboard">
    <!-- Topbar -->
    @include('layouts.nav')
                
                            
                            <div class="user-content">
                                <div class="user-panel">
                                    <h2 class="user-panel-title">
                                        @if (Auth::user()->status == 'Miner')
                                        Sell Eclipse Tokens

                                        @else 
                                         Buy and Sell Eclipse Tokens
                                        @endif
                                       </h2>
                                       @if(session('error_bal'))
                                       <div style=" color:white;padding-left:5px; background-color:tomato; border:1px solid tomato; border-radius:2px; margin-top:5px;">
                                           <b><p style=" color:white;">{{session('error_bal')}}</p></b>
                                          
                                           
                                       </div>
                                       @endif
                                       @if(session('success'))
                                       <div style=" color:white;padding-left:5px; background-color:rgb(19, 114, 19); border:1px solid rgb(19, 114, 19); border-radius:2px; margin-top:5px;">
                                           <b><p style=" color:white;">{{session('success')}}</p></b>
                                          
                                           
                                       </div>
                                       @endif
                                    <form action="{{route('buy_sell')}}" method="post"> 
                                         @csrf                                      
                                         <h5 class="user-panel-subtitle"></h5>
                                        <div class="gaps-1x"></div>
                                        <div class="payment-list">
                                            <div class="row"> 
                                                @if (Auth::user()->status == 'Miner')
                                                <div class="col-md-12 col-sm-12" >
                                                    <div class="payment-item" onclick="myFunction1()">
                                                        <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                                        <label for="paylightcoin" style="background-color: #ee0b0b; border-color:#ee0b0b;">
                                                            <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="images/icon-lightcoin.png" alt="icon"></div>
                                                            <span class="payment-cur" style="color: white"><b>Sell</b></span>
                                                        </label>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                @else 
                                                <div class="col-md-6 col-sm-6" >
                                                   
                                                    <div class="payment-item" onclick="myFunction()">
                                                        <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH">
                                                        <label for="payeth" style="background-color: rgb(20, 138, 20);  border-color:rgb(20, 138, 20);">
                                                            <div class="payment-icon payment-icon-eth" ><img src="images/icon-ethereum.png" alt="icon"></div>
                                                            <span class="payment-cur" style="color: white"><b>Buy</b></span>
                                                        </label>
                                                        <span></span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6 col-sm-6" >
                                                    <div class="payment-item" onclick="myFunction1()">
                                                        <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                                        <label for="paylightcoin" style="background-color: #ee0b0b; border-color:#ee0b0b;">
                                                            <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="images/icon-lightcoin.png" alt="icon"></div>
                                                            <span class="payment-cur" style="color: white"><b>Sell</b></span>
                                                        </label>
                                                        <span></span>
                                                    </div>
                                                </div><!-- .col -->
                                                @endif
                                                
                                                
                                            </div><!-- .row -->
                                        </div><!-- .payment-list -->
                                        <div class="gaps-1x"></div>
                                        <h5 class="user-panel-subtitle" id="buytext"></h5>
                                        <p id="buysubtext"></p>
                                        <div class="gaps-1x"></div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="payment-calculator">
                                                    <div class="payment-get">
                                                        <label for="paymentGet">Amount of Tokens (ELPS)</label>
                                                        <div class="payment-input">
                                                            <input class="input-bordered" type="number" id="paymentGet" name="elps" value="" onchange="process()">
                                                            {{-- <span class="payment-get-cur payment-cal-cur">ELPS</span> --}}
                                                        </div>
                                                       <div class="gaps-2x"></div>
                                                       <center><span class="btn btn-primary payment-btn">covert</span></center>
                                                    </div>
                                                    <div style="margin-bottom: -200px">
                                                        
                                                    </div>
                                                    
                                                    {{-- <em class="ti ti-exchange-vertical">convert</em> --}}
                                                    <div class="payment-from">
                                                        
                                                        <label for="paymentFrom">Payment Amount (USD)</label>
                                                        <div class="payment-input">
                                                            <input class="input-bordered" type="number" id="paymentFrom" name="usd" value="" onchange="pro()">
                                                            {{-- <span class="payment-from-cur payment-cal-cur">usd</span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gaps-2x d-md-none"></div>
                                            </div><!-- .col -->
                                            <div class="col-md-4">
                                               
                                                <div class="gaps-1x d-md-none"></div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                        <div class="gaps-1x"></div>
                                        <div class="payment-calculator-note"><i class="fas fa-info-circle"></i>The calculator helps you to convert required currency to ELPS tokens.</div>
                                        <div class="gaps-3x"></div>
                                        <div class="payment-summary">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="payment-summary-item payment-summary-final">
                                                        <h6 class="payment-summary-title" >Final Payment</h6>
                                                        <div class="payment-summary-info">
                                                            <span class="payment-summary-amount" id="usds">0</span> <span>usd</span>
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                               
                                                <div class="col-md-6">
                                                    <div class="payment-summary-item payment-summary-tokens">
                                                        <h6 class="payment-summary-title" >Tokens Received</h6>
                                                        <div class="payment-summary-info">
                                                            <span class="payment-summary-amount" id="tokens">0</span> <span>ELPS</span>
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .payment-summary -->
                                        <a href="#" class="btn btn-primary payment-btn" data-bs-toggle="modal" data-bs-target="#tranxETH" style="display: none;" id="buyToken"></a>
                                    <!-- form -->
                               
                    </div><!-- .user-kyc -->
                </div><!-- .user-content -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- UserWraper End -->
    <div class="modal fade" id="tranxETH" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Transaction Details</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>(BUY)</strong> is <strong>Pending Payment</strong><br> You will receive <strong id="tok"></strong> tokens once paid.</p>
                        <h6>Please make your Payment to the Account below</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <em class="fab fa-ethereum"></em>
                            <input type="text" class="tranx-payment-address" value="{{$admin->address}}" disabled>
                            <a class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="{{$admin->address}}"><em class="ti ti-files"></em></a>
                        </div><!-- .tranx-payment-info -->
                        <!-- @updated on v1.0.1 -->
                        <ul class="tranx-info-list">
                            
                        </ul><!-- .tranx-info-list -->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="tranx-info-qr">
                                    <ul class="btn-grp guttar-20px">
                                        <li><button class="btn btn-primary" type="submit">I want this token</button></li>
                                        <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-7">
                                <div class="note note-info">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Transactions may take up to 5 minutes to reflect.</p>
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="note note-danger">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Do not make payment through any external exchange platform, all payment must be made on this website.s to reflect.</p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
</div>

     <!-- Modal End -->
     <!-- Modal End -->
    <div class="modal fade" id="tranxLTC" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Transaction Details</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>(SELL)</strong> is <strong>Pending</strong><br> A total of <strong id="toks"></strong> tokens will be deducted from your account.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <em class="fab fa-ethereum"></em>
                            <input type="text" class="tranx-payment-address" value="{{$admin->address}}}" disabled>
                            <a class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="{{$admin->address}}"><em class="ti ti-files"></em></a>
                        </div><!-- .tranx-payment-info -->
                        <!-- @updated on v1.0.1 -->
                        <div class="gaps-3x"></div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="tranx-info-qr">
                                    
                                    <ul class="btn-grp guttar-20px">
                                        <li><button class="btn btn-primary">Sell this token</button></li>
                                            
                                    </form>
                                        <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-7">
                                <div class="note note-info">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Transactions may take up to 5 minutes to reflect.</p>
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="note note-danger">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Do not make payment through any external exchange platform, all payment must be made on this website.s to reflect.</p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <span class="footer-copyright">Copyright 2022, <a href="#">Eclipse Crypto</a>. All Rights Reserved.</span>
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
        function myFunction(){
            document.getElementById("buyToken").style.display = "block"
           
            document.getElementById("buyToken").innerHTML = "BUY TOKEN"
            document.getElementById("buytext").innerHTML = "Set amount of ELPS tokens you would like to purchase."
            document.getElementById("buysubtext").innerHTML = "To become a part of the Eclipse Crypto project and purchase of ELPS token will only be possible after payment made and receving an approval. As you like to participate our project, please select payment method and enter the amount of ELPS tokens you wish to purchase."
        }
        function myFunction1(){
            document.getElementById("buyToken").style.display = "block"
            document.getElementById("buyToken").innerHTML = "SELL TOKEN"
            document.getElementById("buytext").innerHTML = "Set amount of ELPS tokens you would like to sell."
            document.getElementById("buysubtext").innerHTML = "To become a part of the Eclipse Crypto project and sell ELPS token will only be possible after payment made and receving an approval. As you like to participate our project, please enter the amount of ELPS tokens you wish to sell."

        }
        function process(){
            let values = document.getElementById('paymentGet').value;
            document.getElementById('paymentFrom').value = values;
            document.getElementById('usds').innerHTML = values;
            document.getElementById('tokens').innerHTML = values;
            document.getElementById('tok').innerHTML = values + ' ELPS';
            document.getElementById('toks').innerHTML = values + ' ELPS';

        }
        function pro(){
            let values = document.getElementById('paymentFrom').value;
            document.getElementById('paymentGet').value = values;
            document.getElementById('usds').innerHTML = values;
            document.getElementById('tokens').innerHTML = values;
            document.getElementById('tok').innerHTML = values + ' ELPS';
            document.getElementById('toks').innerHTML = values + ' ELPS';

        }
        
       

    </script>
</body>

</html>


{{-- <!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Eclipse Crypto is a modern and elegant landing page, created for Eclipse Agencies and digital crypto currency investment website.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Account | User Center - Eclipse Crypto</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle1.css?ver=110">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style1.css?ver=110">
</head>

<body class="user-dashboard">
    <!-- Topbar -->
    <div class="topbar">
        <div class="topbar-md d-lg-none">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="#" class="toggle-nav">
                        <div class="toggle-icon">
                            <span class="toggle-line"></span>
                            <span class="toggle-line"></span>
                            <span class="toggle-line"></span>
                            <span class="toggle-line"></span>
                        </div>
                    </a><!-- .toggle-nav -->
                    <div class="site-logo">
                        <a href="index.html" class="site-brand">
                            <img src="images/logo.png" alt="logo" srcset="images/logo2x.png 2x">
                        </a>
                    </div><!-- .site-logo -->
                    <div class="dropdown topbar-action-item topbar-action-user">
                        <a href="#" data-bs-toggle="dropdown"> <img class="icon" src="images/user-thumb-sm.png" alt="thumb"> </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="user-dropdown">
                                <div class="user-dropdown-head">
                                    <h6 class="user-dropdown-name">Stefan Harary <span>(IXIA1A105)</span></h6>
                                    <span class="user-dropdown-email">useremail@example.com</span>
                                </div>
                                <div class="user-dropdown-balance">
                                    <h6>Eclipse TOKEN BALANCE</h6>
                                    <h3>120,000,000 IC0X</h3>
                                    <ul>
                                        <li>1.240 BTC</li>
                                        <li>19.043 ETH</li>
                                        <li>6,500.13 USD</li>
                                    </ul>
                                </div>
                                <ul class="user-dropdown-btns btn-grp guttar-10px">
                                    <li><a href="#" class="btn btn-xs btn-warning">Confirm Email</a></li>
                                    <li><a href="kyc.html" class="btn btn-xs btn-warning">KYC Pending</a></li>
                                </ul>
                                <div class="gaps-1x"></div>
                                <ul class="user-dropdown-links">
                                    <li><a href="account.html"><i class="ti ti-id-badge"></i>My Profile</a></li>
                                    <li><a href="security.html"><i class="ti ti-lock"></i>Security</a></li>
                                    <li><a href="activity.html"><i class="ti ti-eye"></i>Activity</a></li>
                                </ul>
                                <ul class="user-dropdown-links">
                                    <li><a href="login.html"><i class="ti ti-power-off"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- .toggle-action -->
                </div><!-- .container -->
            </div><!-- .container -->
        </div><!-- .topbar-md -->
        <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="topbar-lg d-none d-lg-block">
                    <div class="site-logo">
                        <a href="index.html" class="site-brand">
                            <img src="images/logo.png" alt="logo" srcset="images/logo2x.png 2x">
                        </a>
                    </div><!-- .site-logo -->
                </div><!-- .topbar-lg -->
                <div class="topbar-action d-none d-lg-block">
                    <ul class="topbar-action-list">
                        <li class="topbar-action-item topbar-action-link">
                            <a href="#"><em class="ti ti-home"></em> Go to main site</a>
                        </li><!-- .topbar-action-item -->
                        <li class="dropdown topbar-action-item topbar-action-language">
                            <a href="#" data-bs-toggle="dropdown"> EN <em class="ti ti-angle-down"></em> </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">FR</a></li>
                                <li><a href="#">JY</a></li>
                                <li><a href="#">CH</a></li>
                            </ul>
                        </li><!-- .topbar-action-item -->
                        <li class="dropdown topbar-action-item topbar-action-user">
                            <a href="#" data-bs-toggle="dropdown"> <img class="icon" src="images/user-thumb-sm.png" alt="thumb"> </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="user-dropdown">
                                    <div class="user-dropdown-head">
                                        <h6 class="user-dropdown-name">Stefan Harary <span>(IXIA1A105)</span></h6>
                                        <span class="user-dropdown-email">useremail@example.com</span>
                                    </div>
                                    <div class="user-dropdown-balance">
                                        <h6>Eclipse TOKEN BALANCE</h6>
                                        <h3>120,000,000 IC0X</h3>
                                        <ul>
                                            <li>1.240 BTC</li>
                                            <li>19.043 ETH</li>
                                            <li>6,500.13 USD</li>
                                        </ul>
                                    </div>
                                    <ul class="user-dropdown-links">
                                        <li><a href="account.html"><i class="ti ti-id-badge"></i>My Profile</a></li>
                                        <li><a href="security.html"><i class="ti ti-lock"></i>Security</a></li>
                                        <li><a href="activity.html"><i class="ti ti-eye"></i>Activity</a></li>
                                    </ul>
                                    <ul class="user-dropdown-links">
                                        <li><a href="login.html"><i class="ti ti-power-off"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li><!-- .topbar-action-item -->
                    </ul><!-- .topbar-action-list -->
                </div><!-- .topbar-action -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- TopBar End -->
    <div class="user-wraper">
        <div class="container">
            <div class="d-flex">
                <div class="user-sidebar">
                    <div class="user-sidebar-overlay"></div>
                    <div class="user-box d-none d-lg-block">
                        <div class="user-image">
                            <img src="images/user-thumb-lg.png" alt="thumb">
                        </div>
                        <h6 class="user-name">Stefan Harary</h6>
                        <div class="user-uid">Unique ID: <span>IXIA1A105</span></div>
                        <ul class="btn-grp guttar-10px">
                            <li><a href="#" class="btn btn-xs btn-warning">Confirm Email</a></li>
                            <li><a href="kyc.html" class="btn btn-xs btn-warning">KYC Pending</a></li>
                        </ul>
                    </div><!-- .user-box -->
                    <ul class="user-icon-nav">
                        <li><a href="index.html"><em class="ti ti-dashboard"></em>Dashboard</a></li>
                        <li><a href="kyc.html"><em class="ti ti-files"></em>KYC Application</a></li>
                        <li><a href="tokens.html"><em class="ti ti-pie-chart"></em>Contributions</a></li>
                        <li><a href="transactions.html"><em class="ti ti-control-shuffle"></em>Transactions</a></li>
                        <li><a href="referrals.html"><em class="ti ti-infinite"></em>Referral</a></li>
                        <li><a href="account.html"><em class="ti ti-user"></em>Account</a></li>
                        <li><a href="security.html"><em class="ti ti-lock"></em>Security</a></li>
                    </ul><!-- .user-icon-nav -->
                    <div class="user-sidebar-sap"></div><!-- .user-sidebar-sap -->
                    <ul class="user-nav">
                        <li><a href="how-to.html">How to buy?</a></li>
                        <li><a href="faq.html">Faqs</a></li>
                        <li><a href="#">Whitepaper</a></li>
                        <li>Contact Support<span>info@icocrypto.com</span></li>
                    </ul><!-- .user-nav -->
                    <div class="d-lg-none">
                        <div class="user-sidebar-sap"></div>
                        <div class="gaps-1x"></div>
                        <ul class="topbar-action-list">
                            <li class="topbar-action-item topbar-action-link">
                                <a href="#"><em class="ti ti-home"></em> Go to main site</a>
                            </li><!-- .topbar-action-item -->
                            <li class="dropup topbar-action-item topbar-action-language">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"> EN <em class="ti ti-angle-up"></em> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">FR</a></li>
                                    <li><a href="#">JY</a></li>
                                    <li><a href="#">CH</a></li>
                                </ul>
                            </li><!-- .topbar-action-item -->
                        </ul><!-- .topbar-action-list -->
                    </div>
                </div><!-- .user-sidebar -->
                <div class="user-content">
                    <div class="user-panel">
                        <h2 class="user-panel-title">Buy Tokens</h2>
                        <form action="#">
                            <h5 class="user-panel-subtitle">01. Select the payment method and calculate token price</h5>
                            <div class="gaps-1x"></div>
                            <div class="payment-list">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH" checked>
                                            <label for="payeth">
                                                <div class="payment-icon payment-icon-eth"><img src="images/icon-ethereum.png" alt="icon"></div>
                                                <span class="payment-cur">Ethereum</span>
                                            </label>
                                            <span>@ 0.1 ETH</span>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                            <label for="paylightcoin">
                                                <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="images/icon-lightcoin.png" alt="icon"></div>
                                                <span class="payment-cur">Litecoin</span>
                                            </label>
                                            <span>@ 0.1 LTC</span>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC">
                                            <label for="paybtc">
                                                <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                                <span class="payment-cur">Bitcoin</span>
                                            </label>
                                            <span>@ 0.05 BTC</span>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                                            <label for="payusd">
                                                <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                <span class="payment-cur">US Dollar</span>
                                            </label>
                                            <span>@ 0.5 USD</span>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .payment-list -->
                            <div class="gaps-1x"></div>
                            <h5 class="user-panel-subtitle">02. Set amount of ELPS tokens you would like to purchase</h5>
                            <p>To become a part of the Eclipse Crypto project and purchase of ELPS token will only be possible after payment made and receving an approval. As you like to participate our project, please select payment method and enter the amount of ELPS tokens you wish to purchase. You can buy ELPS tokens using ETH, BTC, LTC or USD. </p>
                            <div class="gaps-1x"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="payment-calculator">
                                        <div class="payment-get">
                                            <label for="paymentGet">Tokens to Purchase</label>
                                            <div class="payment-input">
                                                <input class="input-bordered" type="text" id="paymentGet" value="1200">
                                                <span class="payment-get-cur payment-cal-cur">ELPS</span>
                                            </div>
                                        </div>
                                        <em class="ti ti-exchange-vertical"></em>
                                        <div class="payment-from">
                                            <label for="paymentFrom">Payment Amount</label>
                                            <div class="payment-input">
                                                <input class="input-bordered" type="text" id="paymentFrom" value="600">
                                                <span class="payment-from-cur payment-cal-cur">usd</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gaps-2x d-md-none"></div>
                                </div><!-- .col -->
                                <div class="col-md-4">
                                    <div class="payment-bonus">
                                        <h6 class="payment-bonus-title">Current Bonus</h6>
                                        <span class="payment-bonus-amount">20% <span>on pre-sales</span></span>
                                        <span class="payment-bonus-time">End at - 09 Jul, 2022</span>
                                    </div>
                                    <div class="gaps-1x d-md-none"></div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <div class="gaps-1x"></div>
                            <div class="payment-calculator-note"><i class="fas fa-info-circle"></i>The calculator helps you to convert required currency to ELPS tokens.</div>
                            <div class="gaps-3x"></div>
                            <div class="payment-summary">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-final">
                                            <h6 class="payment-summary-title">Final Payment</h6>
                                            <div class="payment-summary-info">
                                                <span class="payment-summary-amount">600.00</span> <span>usd</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-bonus">
                                            <h6 class="payment-summary-title">Received Bonus</h6>
                                            <div class="payment-summary-info">
                                                <span>+</span> <span class="payment-summary-amount">600.00</span> <span>ELPS</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-tokens">
                                            <h6 class="payment-summary-title">Tokens Received</h6>
                                            <div class="payment-summary-info">
                                                <span class="payment-summary-amount">12,200</span> <span>ELPS</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .payment-summary -->
                            <a href="#" class="btn btn-primary payment-btn" data-bs-toggle="modal" data-bs-target="#tranxETH">Purchase Tokens</a>
                        </form><!-- form -->
                    </div><!-- .user-panel -->
                </div><!-- .user-content -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- UserWraper End -->
   
    <!-- Modal End -->
    <div class="modal fade" id="tranxLTC" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details LTC</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 ELPS</strong> tokens (incl. bonus of 450 ELPS) once paid.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <em class="fab fa-ethereum"></em>
                            <input type="text" class="tranx-payment-address" value="0x4156d3342d5c385a87d264f90653733592000581" disabled>
                            <button class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="0x4156d3342d5c385a87d264f90653733592000581"><em class="ti ti-files"></em></button>
                        </div><!-- .tranx-payment-info -->
                        <!-- @updated on v1.0.1 -->
                        <div class="gaps-3x"></div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="tranx-info-qr">
                                    <span>OR Scan bellow QR Code to pay</span>
                                    <img class="tranx-info-qrimg" src="images/eth-qr.png" alt="qr">
                                    <div class="gaps-4x"></div>
                                    <ul class="btn-grp guttar-20px">
                                        <li><a href="#" class="btn btn-primary pay-done">I want this token</a></li>
                                        <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-7">
                                <div class="note note-info">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="note note-danger">
                                    <em class="fas fa-info-circle"></em>
                                    <p>In case you send a different amount ETH, the number of ELPS tokens will update accordingly.</p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <div class="modal fade" id="tranxBTC" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details BTC</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 ELPS</strong> tokens (incl. bonus of 450 ELPS) once paid.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <em class="fab fa-ethereum"></em>
                            <input type="text" class="tranx-payment-address copy-address" value="0x4156d3342d5c385a87d264f90653733592000581" disabled>
                            <button class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="0x4156d3342d5c385a87d264f90653733592000581"><em class="ti ti-files"></em></button>
                        </div><!-- .tranx-payment-info -->
                        <!-- @updated on v1.0.1 -->
                        <div class="gaps-3x"></div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="tranx-info-qr">
                                    <span>OR Scan bellow QR Code to pay</span>
                                    <img class="tranx-info-qrimg" src="images/eth-qr.png" alt="qr">
                                    <div class="gaps-4x"></div>
                                    <ul class="btn-grp guttar-20px">
                                        <li><a href="#" class="btn btn-primary pay-done">I want this token</a></li>
                                        <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-7">
                                <div class="note note-info">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="note note-danger">
                                    <em class="fas fa-info-circle"></em>
                                    <p>In case you send a different amount ETH, the number of ELPS tokens will update accordingly.</p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <div class="modal fade" id="tranxUSD" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details USD</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 ELPS</strong> tokens (incl. bonus of 450 ELPS) once paid.</p>
                        <h6>Please make your Payment with your credit card</h6>
                        <form action="#">
                            <div class="input-item input-with-label">
                                <label for="full-name" class="input-item-label">Name On Card</label>
                                <input class="input-bordered" type="text" id="full-name" name="full-name" placeholder="Ex : Jhone Smith">
                            </div>
                            <div class="input-item input-with-label">
                                <label for="card-number" class="input-item-label">Card Number</label>
                                <input class="input-bordered" type="text" id="card-number" name="card-number" placeholder="ex : 378 2822 4631 0005">
                            </div>
                            <div class="d-sm-flex guttar-30px">
                                <div>
                                    <div class="auto-width input-item input-with-label">
                                        <label for="expiration-date" class="input-item-label">Expiration Date</label>
                                        <div class="d-flex guttar-8px">
                                            <div>
                                                <select class="input-bordered" name="expiration-month" id="expiration-month">
                                                    <option value="mnth">MM</option>
                                                    <option value="mnth-01">01</option>
                                                    <option value="mnth-02">02</option>
                                                    <option value="mnth-03">03</option>
                                                    <option value="mnth-04">04</option>
                                                    <option value="mnth-05">05</option>
                                                    <option value="mnth-06">05</option>
                                                    <option value="mnth-07">07</option>
                                                    <option value="mnth-08">08</option>
                                                    <option value="mnth-09">09</option>
                                                    <option value="mnth-10">10</option>
                                                    <option value="mnth-11">11</option>
                                                    <option value="mnth-12">12</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="input-bordered" name="expiration-year" id="expiration-year">
                                                    <option value="yer">YYYY</option>
                                                    <option value="yer-18">2022</option>
                                                    <option value="yer-19">2019</option>
                                                    <option value="yer-20">2020</option>
                                                    <option value="yer-21">2021</option>
                                                    <option value="yer-22">2022</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-item input-with-label w100px">
                                        <label for="card-number" class="input-item-label">CCV</label>
                                        <input class="input-bordered" type="text" id="card-number" name="card-number" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="gaps-2x"></div>
                            <ul class="btn-grp guttar-20px">
                                <li><a href="#" class="btn btn-primary pay-done">I want this token</a></li>
                                <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                            </ul>
                        </form>
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <span class="footer-copyright">Copyright 2022, <a href="#">Eclipse Crypto</a>. All Rights Reserved.</span>
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
</body>

</html> --}}