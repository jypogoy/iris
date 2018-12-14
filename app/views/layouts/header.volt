<!-- HEADER START -->
<header id="header" class="page-topbar">
    <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
            <div class="nav-wrapper">
                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="index.html" class="brand-logo darken-1">
                                <ul>
                                    <li>
                                        <img src="img/logo/iris-logo-white.png" alt="materialize logo" style="height: 32px !important; margin-top: -5px;">
                                    </li>
                                    <li>
                                        <ul class="log-text-list">
                                            <li>
                                                <span class="logo-text hide-on-med-and-down">Indicator Reporting</span>
                                            </li>
                                            <li>
                                                <span class="logo-text hide-on-med-and-down">Information System</span>
                                            </li>
                                        </ul>        
                                    </li>
                                </ul>
                            </a>
                        </h1>
                    </li>
                    <li>
                        
                    </li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="material-icons">search</i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore IRIS" />
                </div>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                        <span class="flag-icon flag-icon-gb"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                        <i class="material-icons">settings_overscan</i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                        <i class="material-icons">notifications_none
                            <small class="notification-badge orange accent-3">5</small>
                        </i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                        <span class="avatar-status avatar-online">
                            <img src="img/avatar/matthew.png" alt="avatar">
                            <i></i>
                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                        <i class="material-icons">format_indent_increase</i>
                        </a>
                    </li>
                </ul>
                <!-- translation-button -->
                <ul id="translation-dropdown" class="dropdown-content">
                    <li>
                        <a href="#!" class="grey-text text-darken-1">
                        <i class="flag-icon flag-icon-gb"></i> English</a>
                    </li>
                    <li>
                        <a href="#!" class="grey-text text-darken-1">
                        <i class="flag-icon flag-icon-fr"></i> French</a>
                    </li>
                    <li>
                        <a href="#!" class="grey-text text-darken-1">
                        <i class="flag-icon flag-icon-cn"></i> Chinese</a>
                    </li>
                    <li>
                        <a href="#!" class="grey-text text-darken-1">
                        <i class="flag-icon flag-icon-de"></i> German</a>
                    </li>
                </ul>
                <!-- notifications-dropdown -->
                <ul id="notifications-dropdown" class="dropdown-content">
                    <li>
                        <h6>NOTIFICATIONS
                        <span class="new badge">5</span>
                        </h6>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li>
                        <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li>
                        <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li>
                        <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li>
                        <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>
                <!-- profile-dropdown -->
                <ul id="profile-dropdown" class="dropdown-content">
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">face</i> Profile</a>
                    </li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">settings</i> Settings</a>
                    </li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">live_help</i> Help</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">lock_outline</i> Lock</a>
                    </li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">keyboard_tab</i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav> 
        {% include 'layouts/horizontal-nav.volt' %}
    </div>
</header>