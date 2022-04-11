@extends('layouts.header')
@section('content')

<main class="nk-pages">
    <div class="section" style="background-color: #F7F8FF">
        <div class="container">
            <div class="nk-blocks d-flex justify-content-center">
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title">Sign Up<small class="tc-default">Create New ECLIPSE Account</small></h5>
                        <form method="POST" action="{{ route('register') }}" name="form">
                            @csrf
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input id="name" type="text" class="input-bordered" placeholder="Your username" name="name" :value="old('name')" required autofocus>
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" class="input-bordered" placeholder="Your Email" name="email" :value="old('email')" required>
                                </div>
                            </div>
                           
                            <div class="field-item">
                                <div class="field-wrap">
                                    <label for="bank">Select Bank</label>
<select  id="exampleFormControlSelect2" class="input-bordered" name="" id="bank" class="form-control"><option value="801"> Abbey Mortgage Bank</option><option value="51204"> Above Only MFB</option><option value="044"> Access Bank</option><option value="063"> Access Bank (Diamond)</option><option value="035A"> ALAT by WEMA</option><option value="50926"> Amju Unique MFB</option><option value="401"> ASO Savings and Loans</option><option value="51229"> Bainescredit MFB</option><option value="50931"> Bowen Microfinance Bank</option><option value="565"> Carbon</option><option value="50823"> CEMCS Microfinance Bank</option><option value="50171"> Chanelle Microfinance Bank Limited</option><option value="023"> Citibank Nigeria</option><option value="50204"> Corestep MFB</option><option value="559"> Coronation Merchant Bank</option><option value="050"> Ecobank Nigeria</option><option value="562"> Ekondo Microfinance Bank</option><option value="50126"> Eyowo</option><option value="070"> Fidelity Bank</option><option value="51314"> Firmus MFB</option><option value="011"> First Bank of Nigeria</option><option value="214"> First City Monument Bank</option><option value="501"> FSDH Merchant Bank Limited</option><option value="812"> Gateway Mortgage Bank LTD</option><option value="00103"> Globus Bank</option><option value="100022"> GoMoney</option><option value="058"> Guaranty Trust Bank</option><option value="51251"> Hackman Microfinance Bank</option><option value="50383"> Hasal Microfinance Bank</option><option value="030"> Heritage Bank</option><option value="51244"> Ibile Microfinance Bank</option><option value="50457"> Infinity MFB</option><option value="301"> Jaiz Bank</option><option value="50502"> Kadpoly MFB</option><option value="082"> Keystone Bank</option><option value="50200"> Kredi Money MFB LTD</option><option value="50211"> Kuda Bank</option><option value="90052"> Lagos Building Investment Company Plc.</option><option value="50549"> Links MFB</option><option value="303"> Lotus Bank</option><option value="50563"> Mayfair MFB</option><option value="50304"> Mint MFB</option><option value="100002"> Paga</option><option value="999991"> PalmPay</option><option value="104"> Parallex Bank</option><option value="311"> Parkway - ReadyCash</option><option value="999992"> Paycom</option><option value="50746"> Petra Mircofinance Bank Plc</option><option value="076"> Polaris Bank</option><option value="101"> Providus Bank</option><option value="51293"> QuickFund MFB</option><option value="502"> Rand Merchant Bank</option><option value="125"> Rubies MFB</option><option value="51113"> Safe Haven MFB</option><option value="51310"> Sparkle Microfinance Bank</option><option value="221"> Stanbic IBTC Bank</option><option value="068"> Standard Chartered Bank</option><option value="51253"> Stellas MFB</option><option value="232"> Sterling Bank</option><option value="100"> Suntrust Bank</option><option value="302"> TAJ Bank</option><option value="51269"> Tangerine Money</option><option value="51211"> TCF MFB</option><option value="102"> Titan Bank</option><option value="50871"> Unical MFB</option><option value="032"> Union Bank of Nigeria</option><option value="033"> United Bank For Africa</option><option value="215"> Unity Bank</option><option value="566"> VFD Microfinance Bank Limited</option><option value="035"> Wema Bank</option><option value="057"> Zenith Bank</option>
</select>
                    
                                   
                                </div> 
                                <br/>
                                <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" class="input-bordered" placeholder="Bank Account Number" onchange="process()" name="account_number" :value="old('account_number')"  required>
                                </div>
                            </div>
                              <center> <img src="assets/images/loader.gif" alt="" id="loader" width="50rem" height="50rem" style="display: none"></center>

                            <div class="field-item" style="display: none" >
                                <div class="field-wrap">
                                    <input type="text" class="input-bordered" placeholder="Full Name" id="fullname" name="fullname" style="display: none" >
                                    
                                </div>
                               
                            </div> 
                            <div class="field-item" id="divsoup"style="display: none">
                                <div class="field-wrap">
                                    
                                         <p class="input-bordered" id="fullnamep" style="display: none"></p>
                                </div>
                               
                            </div>
                            <div class="field-item" id="divsoup1"style="display: none">
                                <div class="field-wrap">
                                    
                                         <input type="text" class="input-bordered" id="bank_name" name="bank_name" style="display: none"></p>
                                </div>
                               
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" class="input-bordered" placeholder="Password"  name="password"
                                    required autocomplete="new-password"
                                    >

                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" class="input-bordered" placeholder="Repeat Password" name="password_confirmation" required >
                                </div>
                            </div>
                           
                            <div class="field-item">
                                <input class="input-checkbox" id="agree-term-2" type="checkbox">
                                <label for="agree-term-2">I agree to Icos <a href="#">Privacy Policy</a> &amp; <a href="#">Terms</a>.</label>
                            </div>
                            <button class="btn btn-primary btn-block btn-md">Sign Up</button>
                        </form>
                       
                        <div class="ath-note text-center"> Already have an account? <a href="{{ route('login') }}"> <strong>Sign in here</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
      <script type="text/javascript">
        async function process(){
            var selected = [];
        for (var option of document.getElementById("exampleFormControlSelect2")
          .options) {
          if (option.selected) {
            selected.push(option.value);
          }
        }
        //console.log(selected);
            const interests = selected;
            let account_number = document.form.account_number.value;
            let account_number_code = document.form.account_number.value;
            console.log(account_number)

            document.getElementById('loader').style.display = 'block';

            const response = await fetch(`https://maylancer.org/api/nuban/api.php?account_number=${account_number}&bank_code=${interests}`, {
                method:'GET'
            })
            .then(response => response.json())
            .then(data => {
            console.log('Success:', data);
            if(data?.account_name){

                document.getElementById('fullname').value = data.account_name;
                document.getElementById('bank_name').value = data.Bank_name;
                document.getElementById('fullnamep').innerHTML = data.account_name;
                document.getElementById('divsoup').style.display = 'block';
                document.getElementById('fullnamep').style.display = 'block';
            }
      
            else{
                document.getElementById('fullnamep').innerHTML = data.message;
                document.getElementById('divsoup').style.display = 'block';
                document.getElementById('fullnamep').style.display = 'block';
            }

            })
            .catch(error => {
            console.error('Error:', error)});
            document.getElementById('loader').style.display = 'none';

          }
          
      </script>
@endsection