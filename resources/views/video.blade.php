
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
                       <form action="{{route('videocontensy.store')}}" method="post">
                        @csrf
                       
                        <div class="progress-card" style="background-color: #0F4F94; color:white; border-color:#0F4F94;">
                            <h3>Upload video contensy</h3>
                        </div>
                        <div class="gaps-3x"></div>
                        @if(session('success'))
                                                <div style=" color:white;padding-left:5px; background-color:rgb(19, 114, 19); border:1px solid rgb(19, 114, 19); border-radius:2px; margin-top:5px;">
                                                    <b><p style=" color:white;">{{session('success')}}</p></b>
                                                   
                                                    
                                                </div>
                                                <div class="gaps-3x"></div>
                                                
                                                @endif
                        <div class="col-md-6">
                                                
                            <div class="input-item input-with-label">
                                <label for="token-address" class="input-item-label">Youtube Video Link</label>
                                <input class="input-bordered" type="text" id="token-address" name="type_y" value="" required>
                                <span class="input-note"></span>
                            </div><!-- .input-item -->

                            <div class="input-item input-with-label">
                                <label for="token-address" class="input-item-label">Facebook Video Link</label>
                                <input class="input-bordered" type="text" id="token-address" name="type_f" value="" required>
                                <span class="input-note"></span>
                            </div><!-- .input-item -->
                            
                            <div class="input-item input-with-label">
                                <label for="token-address" class="input-item-label">whatsapp Video Link</label>
                                <input class="input-bordered" type="text" id="token-address" name="type_w" value="" required>
                                <span class="input-note"></span>
                            </div><!-- .input-item -->
                        </div>
                        <div class="gaps-2x"></div>
                    <div class="text-center"><button class="btn btn-primary" type="submit">Proceed</button></div>
                </form>
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

