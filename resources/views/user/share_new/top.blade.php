<div class="page-header">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Cuba .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                        src="/user/assets/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
            <ul class="horizontal-menu">
            </ul>
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
                <li class="language-nav">
                    <div class="translate_wrapper">
                        <div class="current_lang">
                            <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN
                                </span></div>
                        </div>
                        <div class="more_lang">
                            <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span
                                    class="lang-txt">English<span> (US)</span></span></div>
                            <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span
                                    class="lang-txt">Deutsch</span></div>
                            <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span
                                    class="lang-txt">Español</span></div>
                            <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
                                    class="lang-txt">Français</span></div>
                            <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span
                                    class="lang-txt">Português<span> (BR)</span></span></div>
                            <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span
                                    class="lang-txt">简体中文</span></div>
                            <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span
                                    class="lang-txt">لعربية <span> (ae)</span></span></div>
                        </div>
                    </div>
                </li>
                <li> <span class="header-search"><i data-feather="search"></i></span></li>
                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li>
                @if (Auth::guard('user')->user())
                    <li class="profile-nav onhover-dropdown p-0 me-0">
                        <div class="media profile-media"><img class="b-r-10"
                                src="/user/assets/images/dashboard/profile.jpg" alt="">
                            <div class="media-body">
                                <span>{{ Auth::guard('user')->user()->first_name . ' ' . Auth::guard('user')->user()->last_name }}</span>
                                <p class="mb-0 font-roboto">User <i class="middle fa fa-angle-down"></i></p>
                            </div>
                        </div>

                        <ul class="profile-dropdown onhover-show-div" style="width: 200px">
                            <li><a href="/home/my-account"><i data-feather="user"></i><span>Account </span></a></li>
                            <li><a href="/home/change-password" class="text-nowrap"><i
                                        data-feather="user"></i><span>Change
                                        Password </span></a></li>
                            <li><a href="/home/history-transaction" class="text-nowrap"><i
                                        data-feather="user"></i><span>History Transaction</span></a></li>
                            <li><a href="/home/logout"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                        </ul>
                    </li>
                @else
                    <div>
                        <a href="/login">
                            <button class="btn text-white" style="background-color: rgb(0, 59, 149);">Login</button>
                        </a>
                    </div>
                @endif
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
        <div class="ProfileCard u-cf">
        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
        <div class="ProfileCard-details">
        <div class="ProfileCard-realName">name</div>
        </div>
        </div>
      </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>
