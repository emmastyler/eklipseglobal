
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
        #img_url, #img_url1, #img_url2, #img_url3 {
  
  width:150px;
  height: 150px;
  object-fit: contain;
  align-content: center;
  justify-content: center;

  display: none;
}
    </style>
</head>

<body class="user-dashboard">
    <!-- Topbar -->
    @include('layouts.nav')
                <div class="user-content">
                    <div class="user-kyc">
                        <form action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                    <div class="from-step-heading">
                                        
                                        <div class="from-step-number">01</div>
                                       
                                        <div class="from-step-head">
                                            
                                            <h4>Step 1 : Security</h4> 
                                            <p>Kindly set a secret ID number for withdrawals.</p>
                                        </div>
                                    </div>
                                    <div class="from-step-content">
                                        <div class="note note-md note-info note-plane">
                                            <em class="fas fa-info-circle"></em>
                                            <p>Please carefully fill out the form.</p>
                                        </div>
                                        <div class="gaps-2x"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="first-name" class="input-item-label">Security ID</label>
                                                    <input class="input-bordered" type="text" id="first-name" name="security_id">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                           
                                                <div class="input-item input-with-label">
                                                    
                                                <p class="btn btn-primary" href="#" onclick="newFunction()">Add Bank</p>

                                                </div><!-- .input-item -->
                                           <div id="bank1" style="display: none" >
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="last-name" class="input-item-label">Bank Name (1)</label>
                                                    <input class="input-bordered" type="text" id="last-name" name="bank_name_1">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">Bank Account Number  (1)</label>
                                                    <input class="input-bordered" type="text" id="email-address" name="account_number_1">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="phone-number" class="input-item-label">Bank Account Name  (1)</label>
                                                    <input class="input-bordered" type="text" id="phone-number" name="account_name_1">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                        </div>

                                        <div id="bank2" style="display: none" >
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="last-name" class="input-item-label">Bank Name (2)</label>
                                                    <input class="input-bordered" type="text" id="last-name" name="bank_name_2">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">Bank Account Number (2)</label>
                                                    <input class="input-bordered" type="text" id="email-address" name="account_number_2">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="phone-number" class="input-item-label">Bank Account Name (2)</label>
                                                    <input class="input-bordered" type="text" id="phone-number" name="account_name_2">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                        </div>

                                        <div id="bank3" style="display: none" >
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="last-name" class="input-item-label">Bank Name (3)</label>
                                                    <input class="input-bordered" type="text" id="last-name" name="bank_name_3">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">Bank Account Number (3)</label>
                                                    <input class="input-bordered" type="text" id="email-address" name="account_number_3">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="phone-number" class="input-item-label">Bank Account Name (3)</label>
                                                    <input class="input-bordered" type="text" id="phone-number" name="account_name_3">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                        </div>

                                        <div id="bank4" style="display: none" >
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="last-name" class="input-item-label">Bank Name (4)</label>
                                                    <input class="input-bordered" type="text" id="last-name" name="bank_name_4">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">Bank Account Number (4)</label>
                                                    <input class="input-bordered" type="text" id="email-address" name="account_number_4">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="phone-number" class="input-item-label">Bank Account Name (4)</label>
                                                    <input class="input-bordered" type="text" id="phone-number" name="account_name_4">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                        </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="phone-number" class="input-item-label">Bitcoin address</label>
                                                    <input class="input-bordered" type="text" id="phone-number" name="bitcoin_address">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                               
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="address-line-1" class="input-item-label">Skrill Address</label>
                                                    <input class="input-bordered" type="text" id="address-line-1" name="skrill_address">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                               
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                {{-- <div class="input-item input-with-label">
                                                    <label for="phone-number" class="input-item-label">Telegram Username <span>(optional)</span></label>
                                                    <input class="input-bordered" type="text" id="phone-number" name="phone-number">
                                                </div><!-- .input-item --> --}}
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .from-step-content -->
                                </div><!-- .from-step-item -->
                                <div class="from-step-item">
                                    <div class="from-step-heading">
                                        <div class="from-step-number">02</div>
                                        <div class="from-step-head">
                                            <h4>Step 2 : Face Photo</h4>
                                            <p>Upload face photo to approve your withdrawal.</p>
                                        </div>
                                    </div>
                                    <div class="from-step-content">
                                        <div class="note note-md note-info note-plane">
                                            <em class="fas fa-info-circle"></em>
                                            <p>Please upload same face image with personal documents.</p>
                                        </div>
                                        <div class="gaps-2x"></div>
                                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#passport">
                                                    <div class="nav-tabs-icon">
                                                        <img src="images/icon-passport.png" alt="icon">
                                                        <img src="images/icon-passport-color.png" alt="icon">
                                                    </div>
                                                    <span>Passport</span>
                                                </a>
                                            </li>
                                            
                                        </ul><!-- .nav-tabs-line -->
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="passport">
                                                <h5 class="kyc-upload-title">To avoid delays when verifying account, Please make sure bellow:</h5>
                                                <ul class="kyc-upload-list">
                                                    
                                                    <li>Image should be good condition and clearly visible.</li>
                                                    <li>Make sure that there is no light glare on the card.</li>
                                                </ul>
                                                <div class="gaps-4x"></div>
                                                <span class="upload-title">Upload Here Your Passport Copy</span>
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <div class="upload-box">
                                                            <div class="upload-zone">
                                                                {{-- <div class="dz-message" data-dz-message>
                                                                    <span class="dz-message-text">Drag and drop file</span>
                                                                    <span class="dz-message-or">or</span>
                                                                    <button class="btn btn-primary">SELECT</button>
                                                                </div> --}}
                                                                
                                                                <input type="file" name="face_img[]" multiple id="img_file" onChange="img_pathUrl(this);">
                                                                <div class="gaps-1x"></div>
                                                                <center><img src="" id="img_url" alt=""></center>
                                                                
                                                               
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="kyc-upload-img">
                                                            <img src="images/vector-passport.png" alt="vector">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gaps-1x"></div>
                                            </div>
                                            <div class="tab-pane fade" id="national-card">
                                                <h5 class="kyc-upload-title">To avoid delays when verifying account, Please make sure bellow:</h5>
                                                <ul class="kyc-upload-list">
                                                    <li>Chosen credential must not be expaired.</li>
                                                    <li>Document should be good condition and clearly visible.</li>
                                                    <li>Make sure that there is no light glare on the card.</li>
                                                </ul>
                                                <div class="gaps-4x"></div>
                                                <span class="upload-title">Upload Here Your National ID (front and back)</span>
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <div class="upload-box">
                                                            <div class="upload-zone">
                                                                {{-- <div class="dz-message" data-dz-message>
                                                                    <span class="dz-message-text">Drag and drop file</span>
                                                                    <span class="dz-message-or">or</span>
                                                                    <button class="btn btn-primary">SELECT</button>
                                                                </div> --}}
                                                                
                                                                <input type="file" name="image[]"  id="img_file" onChange="img_pathUrl1(this);" multiple>
                                                                <div class="gaps-1x"></div>
                                                                <center><img src="" id="img_url1" alt=""></center>
                                                                
                                                               
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="kyc-upload-img">
                                                            <img src="images/vector-id-front.png" alt="vector">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gaps-3x"></div>
                                                
                                                <div class="gaps-1x"></div>
                                            </div>
                                            <div class="tab-pane fade" id="driver-licence">
                                                <h5 class="kyc-upload-title">To avoid delays when verifying account, Please make sure bellow:</h5>
                                                <ul class="kyc-upload-list">
                                                    <li>Chosen credential must not be expired.</li>
                                                    <li>Document should be good condition and clearly visible.</li>
                                                    <li>Make sure that there is no light glare on the card.</li>
                                                </ul>
                                                <div class="gaps-4x"></div>
                                                <span class="upload-title">Upload Here Your Driving Licence Copy</span>
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <div class="upload-box">
                                                            <div class="upload-zone">
                                                                {{-- <div class="dz-message" data-dz-message>
                                                                    <span class="dz-message-text">Drag and drop file</span>
                                                                    <span class="dz-message-or">or</span>
                                                                    <button class="btn btn-primary">SELECT</button>
                                                                </div> --}}
                                                                
                                                                <input type="file" name="image[]" multiple id="img_file" onChange="img_pathUrl3(this);">
                                                                <div class="gaps-1x"></div>
                                                                <center><img src="" id="img_url3" alt=""></center>
                                                                
                                                               
                                                                <br>
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
                                        <div class="gaps-2x"></div><!-- 20px gap -->
                                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#kycConfirm">Submit Details</a>
                                        <div class="gaps-2x"></div><!-- 20px gap -->
                                    </div><!-- .from-step-content -->
                                </div><!-- .from-step-item -->
                               {{--  <div class="from-step-item">
                                    <div class="from-step-heading">
                                        <div class="from-step-number">03</div>
                                        <div class="from-step-head">
                                            <h4>Step 3 : Your Paying Wallet</h4>
                                            <p>Submit your wallet address that you are going to send funds</p>
                                        </div>
                                    </div>
                                    <div class="from-step-content">
                                        <div class="note note-md note-info note-plane">
                                            <em class="fas fa-info-circle"></em>
                                            <p>DO NOT USE your exchange wallet address such as Kraken, Bitfinex, Bithumb, Binance etc.</p>
                                        </div>
                                        <div class="gaps-2x"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="swalllet" class="input-item-label">Source of Your Wallet</label>
                                                    <select class="input-bordered" name="swalllet" id="swalllet">
                                                        <option value="eth">Ethereum</option>
                                                        <option value="dac">DashCoin</option>
                                                        <option value="bic">BitCoin</option>
                                                    </select>
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                        <div class="input-item input-with-label">
                                            <label for="token-address" class="input-item-label">Enter your wallet address</label>
                                            <input class="input-bordered" type="text" id="token-address" name="token-address" value="0xde0b295669a9fd93d5f28d9ec85e40f4cb697bae">
                                            <span class="input-note">Note: Address should be ERC20-compliant. Make sure that you hold this wallet private key.</span>
                                        </div><!-- .input-item -->
                                        <div class="gaps-2x"></div><!-- 20px gap -->
                                        <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#kycConfirm">Submit Details</a>
                                        <div class="gaps-2x"></div><!-- 20px gap -->
                                    </div><!-- .from-step-content -->
                                </div><!-- .from-step-item --> --}}
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
                    <div class="input-item">
                        <input class="input-checkbox" id="term-condition" type="checkbox" required>
                        <label for="term-condition">I have read the <a href="#">Terms of Condition</a> and <a href="#">Privary Policy.</a></label>
                    </div>
                    <div class="input-item">
                        <input class="input-checkbox" id="info-currect" type="checkbox">
                        <label for="info-currect">All the personal information I have entered is correct.</label>
                    </div>
                    <div class="input-item">
                        <input class="input-checkbox" id="certification" type="checkbox" required>
                        <label for="certification">I certify that, I am perticipating in the token distribution event in the capacity of an individual (and benificial owner) and not as an agent (or representative of a third party corporate entity.</label>
                    </div>
                    <div class="input-item">
                        <input class="input-checkbox" id="tokenKnow" type="checkbox" required>
                        <label for="tokenKnow">I understand that, I can only in the token distribution event with the wallet address that was entered in the application form.</label>
                    </div>
                    <div class="gaps-2x"></div>
                    <div class="text-center"><button class="btn btn-primary" type="submit">Process for Verify</button></div>
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
    <script> 
    function img_pathUrl(input){
        $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
        document.getElementById('img_url').style.display = 'block'
    }
    function img_pathUrl1(input){
        $('#img_url1')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
        document.getElementById('img_url1').style.display = 'block'
    }
    function img_pathUrl2(input){
        $('#img_url2')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
        document.getElementById('img_url2').style.display = 'block'
    }
    function img_pathUrl3(input){
        $('#img_url3')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
        document.getElementById('img_url3').style.display = 'block'
    }
    //for bank number calculations
    function newFunction (){
                document.getElementById('bank1').style.display="block" 
                document.getElementById('bank2').style.display="block"        
                document.getElementById('bank3').style.display="block"        
                document.getElementById('bank4').style.display="block"            
        
    }
    </script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/jquery.bundle1.js?ver=110"></script>
    <script src="assets/js/script1.js?ver=110"></script>
</body>

</html>