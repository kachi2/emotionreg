

<div class="nk-header nk-header-fluid nk-header-fixed is-light">
    <div class="">
        <div class="nk-header-wrap">
            {{-- @if($hd_style!='welcome') --}}
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
          

            {{-- {{ site_branding('header', ['panel' => 'user', 'class' => (($hd_style != 'welcome') ? 'd-xl-none' : '') ]) }}
            
            {{-- @if(Panel::news())  --}}
            <div class="nk-header-news d-none d-xl-block">
                {{-- {!! Panel::news() !!} --}}
                Agent Dashboard
            </div>
            {{-- @endif --}} 

            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                {{-- @if(auth()->user()->is_verified) --}}
                                    {{-- <div class="user-status user-status-verified">{{ __('Verified') }}</div>
                                @else --}}
                                    <div class="user-status user-status-verified">{{ __('Michael') }}</div>
                                {{-- @endif --}}
                                    <div class="user-name dropdown-indicator"></div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span></span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text"></span>
                                        <span class="sub-text"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- @if($hd_style!='welcome') --}}
                            <div class="dropdown-inner user-account-info">
                                <h6 class="overline-title-alt">{{ __('Account Balance') }}</h6>
                                <div class="user-balance">2000 <small class="currency">USD</small></div>
                                <div class="user-balance-alt">2000<span class="currency">USD</span></div>
                                <ul class="user-account-links">
                                    <li>
                                        <a href="" class="link"><span>{{ __('Withdraw Funds') }}</span> <em class="icon ni ni-wallet-out"></em></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href=""><em class="icon ni ni-user-alt"></em><span>{{ __('View Profile') }}</span></a></li>
                                    <li><a href=""><em class="icon ni ni-setting-alt"></em><span>{{ __('Security Setting') }}</span></a></li>
                                    <li><a href=""><em class="icon ni ni-activity-alt"></em><span>{{ __('Login Activity') }}</span></a></li>
                                </ul>
                            </div>
                            {{-- @endif --}}
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <em class="icon ni ni-signout"></em><spean>{{ __('Sign out') }}</spean></a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
