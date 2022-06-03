<div class="nk-sidebar nk-sidebar-fat nk-sidebar-fixed" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">

        <div class="nk-sidebar-brand">
            <a class="logo-link nk-sidebar-logo" 
            href="https://mazeoptions.com/dashboard">
            <img class="logo-img logo-light logo-img-md" src="https://mazeoptions.com/images/logo.png" 
            srcset="https://mazeoptions.com/images/logo2x.png 2x" alt="Mazeoptions">
            <img class="logo-img logo-dark logo-img-md" src="https://mazeoptions.com/images/logo-dark.png" 
            srcset="https://mazeoptions.com/images/logo-dark2x.png 2x" alt="Mazeoptions"></a>
        </div>

        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div>

    <div class="nk-sidebar-element">
        <div class="nk-sidebar-body" data-simplebar>
            <div class="nk-sidebar-content">
                <div class="nk-sidebar-widget d-none d-xl-block">
                    <div class="user-account-info between-center">
                        <div class="user-account-main">
                            <h6 class="overline-title-alt">{{ __(":Account Wages", ['account' => 'Available'])}}</h6>
                            <div class="user-balance">{{ '50000'}} <small class="currency">USD</small></div>
                            <div class="user-balance-alt">{{ '50000'}} <span class="currency">USD</span></div>
                        </div>
                    </div>
                    <ul class="user-account-data gy-1">
                        <li>
                            <div class="user-account-label">
                                <span class="sub-text">{{ __('Period (31 Days)') }}</span>
                            </div>
                            {{-- @php 
                                $profit=user_profit('weekly');
                            @endphp --}}
                            <div class="user-account-value">
                                {{-- <span class="lead-text"> {{ to_amount($profit['amount'], base_currency()) }} <span class="currency">{{ base_currency() }}</span></span>
                                @if($profit['percentage']>0)
                                    <span class="text-success ml-2">{{ abs($profit['percentage'])."%" }} <em class="icon ni ni-arrow-long-up"></em></span>
                                @elseif($profit['percentage']<0)
                                    <span class="text-danger ml-2">{{ abs($profit['percentage'])."%" }} <em class="icon ni ni-arrow-long-down"></em></span>
                                @endif --}}
                            </div>
                        </li>
                        {{-- @if(auth()->user()->balance_locked('deposit')) --}}
                        <li>
                            <div class="user-account-label">
                                <span class="sub-text">{{ __('Wages Earned') }}</span>
                            </div>
                            <div class="user-account-value">
                                <span class="sub-text">{{"200000" }} <span class="currency">USD</span></span>
                            </div>
                        </li>
                        {{-- @endif
                        @if(auth()->user()->balance_locked('withdraw')) --}}
                        <li>
                            <div class="user-account-label">
                                <span class="sub-text">{{ __('Bonus Earned') }}</span>
                            </div>
                            <div class="user-account-value">
                                <span class="sub-text">{{ "5000"}} <span class="currency">USD</span></span>
                            </div>
                        </li>
                        {{-- @endif --}}
                    </ul>
                    <div class="user-account-actions">
                        <ul class="g-3">
                            <li><a href="" class="btn btn-primary"><span>{{ __('Withdraw Wages') }}</span></a></li>
                        </ul>
                    </div>
                </div>{{-- .nk-sidebar-widget --}}

                <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                    <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                        <div class="user-card-wrap">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <span></span>
                                </div>
                                <div class="user-info">
                                    <span class="lead-text"></span>
                                    <span class="sub-text"></span>
                                </div>
                                <div class="user-action">
                                    <em class="icon ni ni-chevron-down"></em>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                        <div class="user-account-info between-center">
                            <div class="user-account-main">
                                <h6 class="overline-title-alt"></h6>
                                <div class="user-balance"><small class="currency"></small></div>
                                <div class="user-balance-alt"> <span class="currency"></span></div>
                            </div>
                        </div>
                        <ul class="user-account-data">
                            <li>
                                <div class="user-account-label">
                                    <span class="sub-text">{{ __('Profits (7d)') }}</span>
                                </div>
                                <div class="user-account-value">
                                   
                                    <div class="user-account-value">
                                        <span class="lead-text"> <span class="currency"></span></span>
                                        
                                            <span class="text-danger ml-2"> <em class="icon ni ni-arrow-long-down"></em></span>
                                        
                                    </div>
                                </div>
                            </li>
                            {{-- @if(auth()->user()->balance_locked('deposit'))
                            <li>
                                <div class="user-account-label">
                                    <span class="sub-text">{{ __('Deposit in orders') }}</span>
                                </div>
                                <div class="user-account-value">
                                    <span class="sub-text text-base">{{ auth()->user()->balance_locked('deposit') }} <span class="currency">{{ base_currency() }}</span></span>
                                </div>
                            </li>
                            @endif
                            @if(auth()->user()->balance_locked('withdraw'))
                            <li>
                                <div class="user-account-label">
                                    <span class="sub-text">{{ __('Withdraw in progress') }}</span>
                                </div>
                                <div class="user-account-value">
                                    <span class="sub-text">{{ auth()->user()->balance_locked('withdraw') }} <span class="currency">{{ base_currency() }}</span></span>
                                </div>
                            </li>
                            @endif --}}
                        </ul>
                        <ul class="user-account-links">
                            <li><a href="" class="link"><span>{{ __('Withdraw Wages') }}</span> <em class="icon ni ni-wallet-out"></em></a></li>
                            <li><a href="#" class="link"><span>{{ __('View All') }}</span> <em class="icon ni ni-wallet-in"></em></a></li>
                        </ul>
                        <ul class="link-list">
                            <li><a href="{"><em class="icon ni ni-user-alt"></em><span>{{ __('View Profile') }}</span></a></li>
                            <li><a href=""><em class="icon ni ni-setting-alt"></em><span>{{ __('Account Setting') }}</span></a></li>
                            <li><a href=""><em class="icon ni ni-activity-alt"></em><span>{{ __('Login Activity') }}</span></a></li>
                        </ul>
                        {{-- <ul class="link-list">
                            <li><a href="{{ route('auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>{{ __('Sign out') }}</span></a></li>
                        </ul> --}}
                    </div>
                </div> {{-- .nk-sidebar-widget --}}

                <div class="nk-sidebar-menu">
                    <ul class="nk-menu">
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">{{ __('Menu') }}</h6>
                        </li>
                        <li class="nk-menu-item">
                            <a href="" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">{{ __('Dashboard') }}</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                <span class="nk-menu-text">{{ __('Recent Activities') }}</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-invest"></em></span>
                                <span class="nk-menu-text">{{ __('Targets') }}</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-invest"></em></span>
                                <span class="nk-menu-text">{{ __('Transactions') }}</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                <span class="nk-menu-text">{{ __('Settings') }}</span>
                            </a>
                        </li>
                        {{-- @if (referral_system())
                        <li class="nk-menu-item{{ is_route('referrals') ? ' active' : '' }}">
                            <a href="{{ route('referrals') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-share"></em></span>
                                <span class="nk-menu-text">{{ __('Referrals') }}</span>
                            </a>
                        </li>
                        @endif
                        {!! Panel::navigation('main', ['heading' => true]) !!} --}}
                    </ul>
                </div>{{-- .nk-sidebar-menu --}}

                <div class="nk-sidebar-footer">
                    <ul class="nk-menu nk-menu-footer">
                        
                            <li class="nk-menu-item">
                                <a href="" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-question"></em></span>
                                    <span class="nk-menu-text"></span>
                                </a>
                            </li>
                    
                        {{-- {!! Panel::lang_switcher('sidebar', ['class' => 'ml-auto']) !!} --}}
                    </ul>
                </div>
            </div>
        </div>{{-- .nk-sidebar-body --}}
    </div>{{-- .nk-sidebar-element --}}
</div>
