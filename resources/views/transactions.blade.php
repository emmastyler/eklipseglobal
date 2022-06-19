
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
</head>

<body class="user-dashboard">
   @include('layouts.nav')
                <div class="user-content">
                    <div class="user-panel">
                       
                        <div class="progress-card" style="background-color: #0F4F94; color:white; border-color:#0F4F94;">
                            <h3>TRANSACTION HISTORY </h3>
                            @if(count($transactions)<= 0)
                               <p style="color: white">No transaction at the moment! Please make a deposit or withdrawal first.</p>
                            @endif
                        </div>
                        <div class="gaps-3x"></div>
                        <div class="table-responsive">
                            @if($transactions)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Transaction type</th>
                                        <th>Date/Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach($transactions as $transaction)
                                    <tr>
                                        @if($transaction->transaction_type == 'Withdraw')
                                        <td><span style="color:#ee0b0b">{{$transaction->transaction_type}}</span></td>
                                         @endif
                                         @if($transaction->transaction_type == 'Deposit')
                                        <td><span style="color:rgb(20, 138, 20)">{{$transaction->transaction_type}}</span></td>
                                        @endif
                                        @if($transaction->transaction_type == 'Buy')
                                        <td><span style="color:rgb(20, 138, 20)">{{$transaction->transaction_type}}</span></td>
                                        @endif
                                        @if($transaction->transaction_type == 'Sell')
                                        <td><span style="color:#ee0b0b">{{$transaction->transaction_type}}</span></td>
                                        @endif

                                        <td><span>{{$transaction->created_at}}</span></td>

                                        @if($transaction->status == 'Pending')
                                         <td><span style="color: #FA761D;">{{$transaction->status}}<em class="ti ti-control-pause"></em></span></td>
                                        @endif
                                        @if($transaction->status == 'Successful')
                                        <td><span style="color:rgb(20, 138, 20)">{{$transaction->status}}<em class="ti ti-check"></em></span></td>
                                        @endif
                                        @if($transaction->status == 'Declined')
                                        <td><span style="color:#ee0b0b">{{$transaction->status}}<em class="ti ti-close"></em></span></td>
                                        @endif
                                    </tr>
                                    
                                    
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div><!-- .user-panel -->
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

