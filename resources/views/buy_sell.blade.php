
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
                                            <h4>Step 1 : Personal Details</h4>
                                            <p>Simple personal information, required for identification</p>
                                        </div>
                                    </div>
                                    <div class="from-step-content">
                                        <div class="note note-md note-info note-plane">
                                            <em class="fas fa-info-circle"></em>
                                            <p>Please carefully fill out the form with your personal details. Your can’t edit these details once you submitted the form.</p>
                                        </div>
                                        <div class="gaps-2x"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="first-name" class="input-item-label">First Name</label>
                                                    <input class="input-bordered" type="text" id="first-name" name="firstname">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="last-name" class="input-item-label">Last Name</label>
                                                    <input class="input-bordered" type="text" id="last-name" name="lastname">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">Email Address</label>
                                                    <input class="input-bordered" type="text" id="email-address" name="email">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="phone-number" class="input-item-label">Phone Number</label>
                                                    <input class="input-bordered" type="text" id="phone-number" name="phonenumber">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="date-of-birth" class="input-item-label">Date of Birth</label>
                                                    <input class="input-bordered date-picker" type="text" id="date-of-birth" name="dob">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="nationality" class="input-item-label">Nationality</label>
                                                    <select class="country-select" name="nationality" id="Nationality">
                                                        <option value="Afganistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bonaire">Bonaire</option>
                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Canary Islands">Canary Islands</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Channel Islands">Channel Islands</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos Island">Cocos Island</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curaco">Curacao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Great Britain">Great Britain</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Hawaii">Hawaii</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="India">India</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea North">Korea North</option>
                                                        <option value="Korea Sout">Korea South</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Midway Islands">Midway Islands</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nambia">Nambia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                        <option value="Nevis">Nevis</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau Island">Palau Island</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Phillipines">Philippines</option>
                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                        <option value="St Eustatius">St Eustatius</option>
                                                        <option value="St Helena">St Helena</option>
                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                        <option value="St Lucia">St Lucia</option>
                                                        <option value="St Maarten">St Maarten</option>
                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                        <option value="Saipan">Saipan</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="Samoa American">Samoa American</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Tahiti">Tahiti</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                        <option value="United States of America">United States of America</option>
                                                        <option value="Uraguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City State">Vatican City State</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                        <option value="Wake Island">Wake Island</option>
                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zaire">Zaire</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="address-line-1" class="input-item-label">Address Line 1</label>
                                                    <input class="input-bordered" type="text" id="address-line-1" name="address1">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="address-line-2" class="input-item-label">Address Line 2 <span>(optional)</span></label>
                                                    <input class="input-bordered" type="text" id="address-line-2" name="address2">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">City of Residence</label>
                                                    <input class="input-bordered" type="text" id="email-address" name="city">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="phone-number" class="input-item-label">Zip Code</label>
                                                    <input class="input-bordered" type="text" id="phone-number" name="zipcode">
                                                </div><!-- .input-item -->
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
                                            <h4>Step 2 : Indentity Verify</h4>
                                            <p>Upload documents to verify your indentity.</p>
                                        </div>
                                    </div>
                                    <div class="from-step-content">
                                        <div class="note note-md note-info note-plane">
                                            <em class="fas fa-info-circle"></em>
                                            <p>Please upload any of the following personal document.</p>
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
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#national-card">
                                                    <div class="nav-tabs-icon">
                                                        <img src="images/icon-national-id.png" alt="icon">
                                                        <img src="images/icon-national-id-color.png" alt="icon">
                                                    </div>
                                                    <span>National Card</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#driver-licence">
                                                    <div class="nav-tabs-icon">
                                                        <img src="images/icon-licence.png" alt="icon">
                                                        <img src="images/icon-licence-color.png" alt="icon">
                                                    </div>
                                                    <span>Driver’s License</span>
                                                </a>
                                            </li>
                                        </ul><!-- .nav-tabs-line -->
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="passport">
                                                <h5 class="kyc-upload-title">To avoid delays when verifying account, Please make sure bellow:</h5>
                                                <ul class="kyc-upload-list">
                                                    <li>Chosen credential must not be expaired.</li>
                                                    <li>Document should be good condition and clearly visible.</li>
                                                    <li>Make sure that there is no light glare on the card.</li>
                                                </ul>
                                                <div class="gaps-4x"></div>
                                                <span class="upload-title">Upload Here Your Passport Copy</span>
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <div class="upload-box">
                                                            <div class="upload-zone">
                                                                <div class="dz-message" data-dz-message>
                                                                    <span class="dz-message-text">Drag and drop file</span>
                                                                    <span class="dz-message-or">or</span>
                                                                    <button class="btn btn-primary">SELECT</button>
                                                                </div>
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
                                                <span class="upload-title">Upload Here Your National id Front Side</span>
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <div class="upload-box">
                                                            <div class="upload-zone">
                                                                <div class="dz-message" data-dz-message>
                                                                    <span class="dz-message-text">Drag and drop file</span>
                                                                    <span class="dz-message-or">or</span>
                                                                    <button class="btn btn-primary">SELECT</button>
                                                                </div>
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
                                                <span class="upload-title">Upload Here Your National id Back Side</span>
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <div class="upload-box">
                                                            <div class="upload-zone">
                                                                <div class="dz-message" data-dz-message>
                                                                    <span class="dz-message-text">Drag and drop file</span>
                                                                    <span class="dz-message-or">or</span>
                                                                    <button class="btn btn-primary">SELECT</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="kyc-upload-img">
                                                            <img src="images/vector-id-back.png" alt="vector">
                                                        </div>
                                                    </div>
                                                </div>
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
                                                                <div class="dz-message" data-dz-message>
                                                                    <span class="dz-message-text">Drag and drop file</span>
                                                                    <span class="dz-message-or">or</span>
                                                                    <button class="btn btn-primary">SELECT</button>
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
                                <div class="from-step-item">
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
                    <div class="input-item">
                        <input class="input-checkbox" id="term-condition" type="checkbox">
                        <label for="term-condition">I have read the <a href="#">Terms of Condition</a> and <a href="#">Privary Policy.</a></label>
                    </div>
                    <div class="input-item">
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
    <script src="assets/js/jquery.bundle1.js?ver=110"></script>
    <script src="assets/js/script1.js?ver=110"></script>
</body>

</html>


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
                                    <h6>ICO TOKEN BALANCE</h6>
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
                                        <h6>ICO TOKEN BALANCE</h6>
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
                            <h5 class="user-panel-subtitle">02. Set amount of ICOX tokens you would like to purchase</h5>
                            <p>To become a part of the ICO Crypto project and purchase of ICOX token will only be possible after payment made and receving an approval. As you like to participate our project, please select payment method and enter the amount of ICOX tokens you wish to purchase. You can buy ICOX tokens using ETH, BTC, LTC or USD. </p>
                            <div class="gaps-1x"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="payment-calculator">
                                        <div class="payment-get">
                                            <label for="paymentGet">Tokens to Purchase</label>
                                            <div class="payment-input">
                                                <input class="input-bordered" type="text" id="paymentGet" value="1200">
                                                <span class="payment-get-cur payment-cal-cur">icox</span>
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
                            <div class="payment-calculator-note"><i class="fas fa-info-circle"></i>The calculator helps you to convert required currency to ICOX tokens.</div>
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
                                                <span>+</span> <span class="payment-summary-amount">600.00</span> <span>icox</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-tokens">
                                            <h6 class="payment-summary-title">Tokens Received</h6>
                                            <div class="payment-summary-info">
                                                <span class="payment-summary-amount">12,200</span> <span>icox</span>
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
    <div class="modal fade" id="tranxETH" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details ETH</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 ICOX</strong> tokens (incl. bonus of 450 ICOX) once paid.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <em class="fab fa-ethereum"></em>
                            <input type="text" class="tranx-payment-address" value="0x4156d3342d5c385a87d264f90653733592000581" disabled>
                            <button class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="0x4156d3342d5c385a87d264f90653733592000581"><em class="ti ti-files"></em></button>
                        </div><!-- .tranx-payment-info -->
                        <!-- @updated on v1.0.1 -->
                        <ul class="tranx-info-list">
                            <li><span>SET GAS LIMIT:</span> 120 000</li>
                            <li><span>SET GAS PRICE:</span> 95 Gwei</li>
                        </ul><!-- .tranx-info-list -->
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
                                    <p>In case you send a different amount ETH, the number of ICOX tokens will update accordingly.</p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <div class="modal fade" id="tranxLTC" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details LTC</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 ICOX</strong> tokens (incl. bonus of 450 ICOX) once paid.</p>
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
                                    <p>In case you send a different amount ETH, the number of ICOX tokens will update accordingly.</p>
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
                        <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 ICOX</strong> tokens (incl. bonus of 450 ICOX) once paid.</p>
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
                                    <p>In case you send a different amount ETH, the number of ICOX tokens will update accordingly.</p>
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
                        <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 ICOX</strong> tokens (incl. bonus of 450 ICOX) once paid.</p>
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