
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
                        @if(Auth::user()->status == 'Trader')
                        <form action="{{route('miner')}}" method="post">
                            @csrf

                           

                        <div class="from-step-item">
                          <div class="from-step-heading" style="background-color: #0F4F94; color:white; border-color:#0F4F94;">
                              <div class="from-step-number">+</div>
                              <div class="from-step-head" >
                                  <h4>{{Auth::user()->status}} Plan Choosen</h4>
                                  
                              </div>
                          </div>
                         
                        </div> 
                      </form>
                      @endif

                        @if(Auth::user()->status == 'Miner')
                        <form action="{{route('miner')}}" method="post">
                            @csrf

                           

                        <div class="from-step-item">
                          <div class="from-step-heading" style="background-color: #0F4F94; color:white; border-color:#0F4F94;">
                              <div class="from-step-number">+</div>
                              <div class="from-step-head" >
                                  <h4>{{Auth::user()->status}} Plan Choosen</h4>
                                  <h5>Packages to purchase</h5>
                              </div>
                          </div>
                          <div class="from-step-content" >
                           
                            <div class="gaps-1x"></div>
                                              <div class="payment-list">
                                                @if(session('error_bal'))
                                                <div style=" color:white;padding-left:5px; background-color:tomato; border:1px solid tomato; border-radius:2px; margin-top:5px;">
                                                    <b><p style=" color:white;">{{session('error_bal')}}</p></b>
                                                   
                                                    
                                                </div>
                                                <div class="gaps-3x"></div>
                                                
                                                @endif
                                                
                                                  <div class="row">
                                                      
                                                      <div class="col-md-4 col-sm-6">
                                                          <div class="payment-item" onclick="myFunction()">
                                                              <input class="payment-check" type="radio" id="payeth" name="mineOption" value="10">
                                                              
                                                              <label for="payeth">
                                                                  <span class="payment-cur"><b>5Mp at $10(5000 NGN)</a></b></span>
                                                              </label>
                                                             
                                                          </div>
                                                      </div><!-- .col -->
                                                      <div class="col-md-4 col-sm-6">
                                                          <div class="payment-item" onclick="myFunction1()">
                                                              <input class="payment-check" type="radio" id="paylightcoin" name="mineOption" value="50">
                                                              <label for="paylightcoin">
                                                                  
                                                                  <span class="payment-cur"><b>50Mp at $50(25000 NGN)</b></span>
                                                              </label>
                                                              
                                                          </div>
                                                      </div><!-- .col -->
                                                      <div class="col-md-4 col-sm-6">
                                                          
                                                          <div class="payment-item" onclick="myFunction2()">
                                                              <input class="payment-check" type="radio" id="paybtc" name="mineOption" value="100">
                                                              <label for="paybtc">
                                                                  <span class="payment-cur"><b>100Mp at $100(50000 NGN)</b></span>
                                                              </label>
                                                             
                                                          </div>
                                                      </div><!-- .col -->

                                                      <div class="col-md-4 col-sm-6">
                                                          
                                                          <div class="payment-item" onclick="myFunction2()">
                                                              <input class="payment-check" type="radio" id="payusd" name="mineOption" value="200">
                                                              <label for="payusd">
                                                                  <span class="payment-cur"><b>200Mp at $200(100000 NGN)
                                                                      </b></span><br/>
                                                                  <div></div>
                                                              </label>
                                                             

                                                          </div>
                                                         
                                                      </div><!-- .col -->
                                                      {{-- <div class="col-md-3 col-sm-6">
                                                          <div class="payment-item" onclick="myFunction3()">
                                                              <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                                                              <label for="payusd">
                                                                  <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                                  <span class="payment-cur">Bank wire</span>
                                                              </label>
                                                              
                                                          </div>
                                                      </div><!-- .col --> --}}
                                                  </div><!-- .row -->
                                              </div><!-- .payment-list -->
                                         
                                  <div class="gaps-2x"></div>
                                 
                                  <div class="row">
                                      
                                      <div class="col-md-6">
                                          
                                          {{-- <div class="input-item input-with-label">
                                              <label for="token-address" class="input-item-label">Amount in dollars</label>
                                              <input class="input-bordered" type="text" id="token-address" name="token-address" value="">
                                              <span class="input-note"></span>
                                          </div><!-- .input-item --> --}}

                                          
                                          <!-- .input-item -->
                                      </div><!-- .col -->
                                      
                                  </div><!-- .row -->
                                  

                                  <div class="gaps-2x"></div><!-- 20px gap -->
                                  <button class="btn btn-primary" type="submit">Purchase</button><br/><br/>
                                  <p class=" btn-success" style="display: none; padding: 10px;" id="showref">http://eclipse.test/register?ref={{Auth::user()->name}}</p>
                             
                                  <div class="gaps-2x"></div><!-- 20px gap -->
                          </div>
                        </div> 
                      </form>
                      @endif

                    @if(Auth::user()->status == 'Affiliate')
                        <form method="post">
                            @csrf
                           
                            <div class="from-step">

                                {{-- Affiliate--}}

                             
                              <div class="from-step-item">
                                <div class="from-step-heading" style="background-color: #0F4F94; color:white; border-color:#0F4F94;">
                                    <div class="from-step-number">+</div>
                                    <div class="from-step-head" >
                                        <h4>{{Auth::user()->status}} Plan Choosen</h4>
                                        <h5>Check out our list of packages to promote</h5>
                                    </div>
                                </div>
                                <div class="from-step-content" >
                                 
                                  <div class="gaps-1x"></div>
                                                    <div class="payment-list">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction()">
                                                                    <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH">
                                                                    
                                                                    <label for="payeth">
                                                                        <span class="payment-cur"><b>5Mp at $10(5000 NGN)<p>Get 50% commission</p></a></b></span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction1()">
                                                                    <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                                                    <label for="paylightcoin">
                                                                        
                                                                        <span class="payment-cur"><b>50Mp at $50(25000 NGN)<p>Get 25% commission</p></b></span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-4 col-sm-6">
                                                                
                                                                <div class="payment-item" onclick="myFunction2()">
                                                                    <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC">
                                                                    <label for="paybtc">
                                                                        <span class="payment-cur"><b>100Mp at $50(50000 NGN)<p>Get 25% commission</p></b></span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->

                                                            <div class="col-md-4 col-sm-6">
                                                                
                                                                <div class="payment-item" onclick="myFunction2()">
                                                                    <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                                                                    <label for="payusd">
                                                                        <span class="payment-cur"><b>200Mp at $200(100000 NGN)
                                                                            <p>Get 25% commission</p></b></span><br/>
                                                                        <div></div>
                                                                    </label>
                                                                   

                                                                </div>
                                                               
                                                            </div><!-- .col -->
                                                            {{-- <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction3()">
                                                                    <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                                                                    <label for="payusd">
                                                                        <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                                        <span class="payment-cur">Bank wire</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col --> --}}
                                                        </div><!-- .row -->
                                                    </div><!-- .payment-list -->
                                               
                                        <div class="gaps-2x"></div>
                                       
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                
                                                {{-- <div class="input-item input-with-label">
                                                    <label for="token-address" class="input-item-label">Amount in dollars</label>
                                                    <input class="input-bordered" type="text" id="token-address" name="token-address" value="">
                                                    <span class="input-note"></span>
                                                </div><!-- .input-item --> --}}

                                                
                                                <!-- .input-item -->
                                            </div><!-- .col -->
                                            
                                        </div><!-- .row -->
                                        

                                        <div class="gaps-2x"></div><!-- 20px gap -->
                                        <a class="btn btn-primary" href="" onclick="showRef(event)">Promote</a><br/><br/>
                                        <p class=" btn-success" style="display: none; padding: 10px;" id="showref">http://eclipse.test/register?ref={{Auth::user()->name}}</p>
                                        <div class="gaps-2x"></div><!-- 20px gap -->
                                </div>
                              </div>
                            </form>
                              {{-- miner--}}
                             @endif

                            
                             @if(Auth::user()->status == NULL)
                             <form action="{{route('member.store')}}" method="post">
                                @csrf
                             <div class="from-step-item">
                                    <div class="from-step-heading">
                                        <div class="from-step-number">+</div>
                                        <div class="from-step-head">
                                            <h4>Choose your preferred membership plan</h4>
                                            
                                        </div>
                                    </div>
                                    <div class="from-step-content">       
                                                    <div class="gaps-1x"></div>
                                                    <div class="payment-list">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction()">
                                                                    <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH">
                                                                    
                                                                    <label for="payeth">
                                                                        <div class="payment-icon payment-icon-eth"><img src="images/icon-ethereum.png" alt="icon"></div>
                                                                        <span class="payment-cur"><b>Affiliate</a></b></span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction1()">
                                                                    <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                                                    <label for="paylightcoin">
                                                                        <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="images/icon-lightcoin.png" alt="icon"></div>
                                                                        <span class="payment-cur"><b>Trader</b></span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-4 col-sm-6">
                                                                
                                                                <div class="payment-item" onclick="myFunction2()">
                                                                    <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC">
                                                                    <label for="paybtc">
                                                                        <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                                                        <span class="payment-cur"><b>Miner</b></span>
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div><!-- .col -->
                                                            {{-- <div class="col-md-3 col-sm-6">
                                                                <div class="payment-item" onclick="myFunction3()">
                                                                    <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                                                                    <label for="payusd">
                                                                        <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                                        <span class="payment-cur">Bank wire</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div><!-- .col --> --}}
                                                        </div><!-- .row -->
                                                    </div><!-- .payment-list -->
                                               
                                        <div class="gaps-2x"></div>
                                       
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                
                                                {{-- <div class="input-item input-with-label">
                                                    <label for="token-address" class="input-item-label">Amount in dollars</label>
                                                    <input class="input-bordered" type="text" id="token-address" name="token-address" value="">
                                                    <span class="input-note"></span>
                                                </div><!-- .input-item --> --}}

                                                
                                                <!-- .input-item -->
                                            </div><!-- .col -->
                                            
                                        </div><!-- .row -->
                                        

                                        <div class="gaps-2x"></div><!-- 20px gap -->
                                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#kycConfirm">Choose this</a>
                                          <div class="gaps-2x"></div><!-- 20px gap -->
                                       
                                    </div><!-- .from-step-content -->
                                </div><!-- .from-step-item -->
                              @endif
                               
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
                    <h5 class="text-center">Choosing this plan is final and can't be undone.</h4>
                    <div class="input-item">
                        {{-- <input class="input-checkbox" id="term-condition" type=""> --}}
                        
                        <center><label for="term-condition">You can't subscribe to any other plan after this action.</center></label>
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
            document.getElementById("showsummary").style.display = "block";

            document.getElementById("showskrill").style.display = "none";
            document.getElementById("showbitcoin").style.display = "none";
            document.getElementById("showbank").style.display = "none";

        }
        function myFunction1 (){
            document.getElementById("showskrill").style.display = "block";
            document.getElementById("showbitcoin").style.display = "none";
            document.getElementById("showbank").style.display = "none";
            document.getElementById("showstack").style.display = "none";
            document.getElementById("showsummary").style.display = "none";


        }
        function myFunction2 (){
            document.getElementById("showbitcoin").style.display = "block";
            document.getElementById("showbank").style.display = "none";
            document.getElementById("showstack").style.display = "none";
            document.getElementById("showsummary").style.display = "none";

            document.getElementById("showskrill").style.display = "none";

        }
        function myFunction3 (){
            document.getElementById("showbank").style.display = "block";
            document.getElementById("showstack").style.display = "none";
            document.getElementById("showskrill").style.display = "none";
            document.getElementById("showbitcoin").style.display = "none";

        }
        function showRef(event) {
            event.preventDefault();
            document.getElementById("showref").style.display = "block";
        }
    </script>
</body>

</html>
