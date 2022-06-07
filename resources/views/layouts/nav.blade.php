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
                                <h6 class="user-dropdown-name">{{ Auth::user()->name }} <span></span></h6>
                                <span class="user-dropdown-email">{{ Auth::user()->email }}</span>
                            </div>
                            <div class="user-dropdown-balance">
                                <h1>ICO TOKEN BALANCE</h1>
                                <h3>120,000,000 IC0X</h3>
                                <ul>
                                    <li>1.240 BTC</li>
                                    <li>19.043 ETH</li>
                                    <li>6,500.13 USD</li>
                                </ul>
                            </div>
                            <ul class="user-dropdown-btns btn-grp guttar-10px">
                               
                                <li><a href="kyc.html" class="btn btn-xs btn-warning">KYC Pending</a></li>
                            </ul>
                            <div class="gaps-1x"></div>
                            <ul class="user-dropdown-links">
                                <li><a href="account.html"><i class="ti ti-id-badge"></i>My Profile</a></li>
                                <li><a href="security.html"><i class="ti ti-lock"></i>Security</a></li>
                                <li><a href="activity.html"><i class="ti ti-eye"></i>Activity</a></li>
                            </ul>
                            <ul class="user-dropdown-links">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                    
                                        <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <i class="ti ti-power-off"></i>{{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form></li>
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
                                    <h6 class="user-dropdown-name">{{ Auth::user()->name }} <span></span></h6>
                                    <span class="user-dropdown-email">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="user-dropdown-balance"  >
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
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                        
                                            <x-responsive-nav-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                <i class="ti ti-power-off"></i>{{ __('Log Out') }}
                                            </x-responsive-nav-link>
                                        </form></li>
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
                    <h6 class="user-name">{{ Auth::user()->name }}</h6>
                    <div class="user-uid">Email: <span>{{Auth::user()->email}}</span></div>
                    <ul class="btn-grp guttar-10px">
                        
                        <li><a href="kyc.html" class="btn btn-xs btn-warning">KYC Pending</a></li>
                    </ul>
                </div><!-- .user-box -->
                <ul class="user-icon-nav">
                    <li><a href="{{url('dashboard')}}"><em class="ti ti-dashboard"></em>Dashboard</a></li>
                    <li><a href="{{url('kyc')}}"><em class="ti ti-files"></em>KYC Application</a></li>
                    <li><a href="{{url('deposit')}}"><em class="ti ti-user"></em>Deposit</a></li>
                    <li><a href="{{url('withdraw')}}"><em class="ti ti-user"></em>Withdraw</a></li>
                    <li><a href="{{url('/transaction')}}"><em class="ti ti-pie-chart"></em>Buy/Sell Token</a></li>
                    <li><a href="{{url('/transact')}}"><em class="ti ti-control-shuffle"></em>Transactions</a></li>
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