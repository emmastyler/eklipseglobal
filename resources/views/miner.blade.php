
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
    <title>Account | User Center - ICO Crypto</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle1.css?ver=110">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style1.css?ver=110">

    <style>
        .mining{
            
            background-color: #6781B8;
            color: white;
            padding-top:27px; 
           height: 85px;
           width: 85px;
            border-radius: 50%;
            display: inline-block;
        }
        .numbergif {
            width: 100px;
            height: 10px;
        }
    </style>
</head>

<body class="user-dashboard">
   @include('layouts.nav')
                <div class="user-content" >
                    @if(!$data || $data->status == 'Completed')
                    
                          <div class="user-panel"  style="background-color: black; !important">
                       
                        <div class="progress-card" style="background-color: white; color:black; border-color:white;" >
                            <h3><a href="/member">Buy</a> Mining Power (Mp) to begin mining!</h3>
                        </div>    
            
                    </div><!-- .user-panel -->
                     @else
                         
                     <div class="user-panel"  style="background-color: black; !important">
                       
                        <div class="progress-card" style="background-color: white; color:black; border-color:white;" >
                            <h3>Mining Pool</h3>
                            <marquee behavior="" direction=""><h5 style="color: tomato;">Ensure to refresh page everyday to avoid loss of mined token.</h5></marquee>
                        </div>
                        <div class="gaps-3x"></div>
                        <div class="gaps-3x"></div>
                        
                        
                        <div class="col-md-12">
                            <div class="text-center">
                                <h2><b>Your Balance</b></h2>
                                <h3>{{Auth::user()->elp == NULL ? 0 : Auth::user()->elp }}</h3>
                                <h4>Eclipse Token (ELPS)</h4>
                                <p><b>Time left: <?php
                                
                                $dateobj1 = date_create($data->time_now);
                                $dateobj2 = date_create($data->time_future);
                                $interval = date_diff($dateobj1, $dateobj2);
                                echo $interval->format('%a days');
                                ?></b></p>
                                <b>1 </b>Eklipse token/day<br/>
                                <img src="images/mine.gif" alt="">
                                <img src="images/number.gif" alt="">
                              
                                <div class="gaps-3x"></div>
                                <div class="gaps-3x"></div>
                                <span class="mining"><b>Mining...</b></span>
                            </div>

                           
                           
                        </div>
                        <div class="gaps-2x"></div>
            
                    </div><!-- .user-panel -->
                    @endif
                   

                    
                </div><!-- .user-content -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- UserWraper End -->
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
</body>

</html>

