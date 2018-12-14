<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>IRIS | Dashboard</title>
        <!-- Favicons -->
        
        <link rel="icon" href="img/logo/iris-logo.png" sizes="32x32">

        <!-- CORE CSS -->
        <?= $this->tag->stylesheetLink('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
        <?= $this->tag->stylesheetLink('css/materialize.min.css') ?>
        <?= $this->tag->stylesheetLink('css/styles-new.css') ?>
        <?= $this->tag->stylesheetLink('css/general-layout.css') ?>
        <?= $this->tag->stylesheetLink('css/helper.css') ?>
        <?= $this->tag->stylesheetLink('css/typography.css') ?>
        <?= $this->tag->stylesheetLink('css/page-header.css') ?>
        <?= $this->tag->stylesheetLink('css/page-helper.css') ?>
        <?= $this->tag->stylesheetLink('css/preloader.css') ?>
        <?= $this->tag->stylesheetLink('css/cards.css') ?>
        <?= $this->tag->stylesheetLink('css/charts.css') ?>
        <?= $this->tag->stylesheetLink('css/footer-new.css') ?>            

        <!-- HORIZONTAL NAV CSS -->
        <?= $this->tag->stylesheetLink('css/style-horizontal.css') ?>

        <!-- PLUGINS -->
        <?= $this->tag->stylesheetLink('css/perfect-scrollbar.css') ?>

        <!-- CUSTOM -->
        <?= $this->tag->stylesheetLink('css/custom.css') ?>

    </head>
    <body class="layouts-horizontal">                           
        
        <!-- LOADER START -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
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
        <!-- HORIZONTAL NAV START-->
<nav id="horizontal-nav" class="white hide-on-med-and-down">
    <div class="nav-wrapper">
        <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
            <li class="active">
                <a class="dropdown-menu active" href="#!" data-activates="Dashboarddropdown">
                <i class="material-icons">dashboard</i>
                <span>Dashboard
                    <i class="material-icons right">keyboard_arrow_down</i>
                </span>
                </a>
            </li>
            <li>
                <a class="dropdown-menu" href="#!" data-activates="Templatesdropdown">
                  <i class="material-icons">clear_all</i>
                  <span>Data
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
            </li>
            <li>
                <a class="dropdown-menu" href="#!" data-activates="Cardsdropdown">
                    <i class="material-icons">cast</i>
                    <span>Parameters
                    <i class="material-icons right">keyboard_arrow_down</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="app-email.html">
                    <i class="material-icons">center_focus_weak</i>
                    <span>Indicators</span>
                </a>
            </li>
            <li>
                <a class="dropdown-menu" href="#!" data-activates="CSSdropdown">
                    <i class="material-icons">invert_colors</i>
                    <span>Supporting Info
                    <i class="material-icons right">keyboard_arrow_down</i>
                    </span>
                </a>
            </li>
            <li>
                <a class="dropdown-menu" href="#!" data-activates="BasicUIdropdown">
                    <i class="material-icons">vertical_split</i>
                    <span>Reports
                    <i class="material-icons right">keyboard_arrow_down</i>
                    </span>
                </a>
            </li>
            <li>
                <a class="dropdown-menu" href="#!" data-activates="AdvancedUIdropdown">
                    <i class="material-icons">security</i>
                    <span>Admin
                    <i class="material-icons right">keyboard_arrow_down</i>
                    </span>
                </a>
            </li>
            <li>
                <a class="dropdown-menu" href="#!" data-activates="ExtraComponentsdropdown">
                    <i class="material-icons">device_hub</i>
                    <span>SKB
                    <i class="material-icons right">keyboard_arrow_down</i>
                    </span>
                </a>
            </li>
            <li>
                <a class="dropdown-menu" href="#!" data-activates="Tablesdropdown">
                    <i class="material-icons">question_answer</i>
                    <span>Help
                    <i class="material-icons right">keyboard_arrow_down</i>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>     

<!-- Dashboarddropdown -->
<ul id="Dashboarddropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="dashboard-ecommerce.html">eCommerce</a></li>
    <li class="active"><a href="index.html">Analytics</a></li>
</ul>
<!-- Templatesdropdown -->
<ul id="Templatesdropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="../collapsible-menu/">Collapsible Menu</a></li>
    <li><a href="../semi-dark-menu/">Semi Dark Menu</a></li>
    <li><a href="../fixed-menu/">Fixed Menu</a></li>
    <li><a href="../overlay-menu/">Overlay Menu</a></li>
    <li><a href="../horizontal-menu/">Horizontal Menu</a></li>
</ul>
<!-- Cardsdropdown -->
<ul id="Cardsdropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="cards-basic.html">Basic</a></li>
    <li><a href="cards-advance.html">Advance</a></li>
    <li><a href="cards-extended.html">Extended</a></li>
</ul>
<!-- CSSdropdown -->
<ul id="CSSdropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="css-typography.html">Typography</a></li>
    <li><a href="css-color.html">Color</a></li>
    <li><a href="css-grid.html">Grid</a></li>
    <li><a href="css-helpers.html">Helpers</a></li>
    <li><a href="css-media.html">Media</a></li>
    <li><a href="css-pulse.html">Pulse</a></li>
    <li><a href="css-sass.html">Sass</a></li>
    <li><a href="css-shadow.html">Shadow</a></li>
    <li><a href="css-animations.html">Animations</a></li>
    <li><a href="css-transitions.html">Transition</a></li>
</ul>
<!-- BasicUIdropdown-->
<ul id="BasicUIdropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="ui-basic-buttons.html">Basic</a></li>
    <li><a href="ui-extended-buttons.html">Extended</a></li>
    <li><a href="ui-icons.html">Icons</a></li>
    <li><a href="ui-alerts.html">Alerts</a></li>
    <li><a href="ui-badges.html">Badges</a></li>
    <li><a href="ui-breadcrumbs.html">Breadcrumbs</a></li>
    <li><a href="ui-chips.html">Chips</a></li>
    <li><a href="ui-collections.html">Collections</a></li>
    <li><a href="ui-navbar.html">Navbar</a></li>
    <li><a href="ui-pagination.html">Pagination</a></li>
    <li><a href="ui-preloader.html">Preloader</a></li>
</ul>
<!-- AdvancedUIdropdown-->
<ul id="AdvancedUIdropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="advance-ui-carousel.html">Carousel</a></li>
    <li><a href="advance-ui-collapsibles.html">Collapsible</a></li>
    <li><a href="advance-ui-toasts.html">Toasts</a></li>
    <li><a href="advance-ui-tooltip.html">Tooltip</a></li>
    <li><a href="advance-ui-dropdown.html">Dropdown</a></li>
    <li><a href="advance-ui-feature-discovery.html">Feature Discovery</a></li>
    <li><a href="advanced-ui-media.html">Media</a></li>
    <li><a href="advanced-ui-modals.html">Modals</a></li>
    <li><a href="advance-ui-scrollfire.html">ScrollFire</a></li>
    <li><a href="advance-ui-scrollspy.html">Scrollspy</a></li>
    <li><a href="advance-ui-tabs.html">Tabs</a></li>
    <li><a href="advance-ui-transitions.html">Transitions</a></li>
    <li><a href="advance-ui-waves.html">Waves</a></li>
</ul>
<!-- ExtraComponentsdropdown-->
<ul id="ExtraComponentsdropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="extra-components-range-slider.html">Range Slider</a></li>
    <li><a href="extra-components-sweetalert.html">SweetAlert</a></li>
    <li><a href="extra-components-nestable.html">Shortable & Nestable</a></li>
    <li><a href="extra-components-translation.html">Language Translation</a></li>
    <li><a href="extra-components-highlight.html">Highlight</a></li>
</ul>
<!-- Tablesdropdown -->
<ul id="Tablesdropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="table-basic.html">Basic Tables</a></li>
    <li><a href="table-data.html">Data Tables</a></li>
    <li><a href="table-jsgrid.html">jsGrid</a></li>
    <li><a href="table-editable.html">Editable Table</a></li>
    <li><a href="table-floatThead.html">FloatThead</a></li>
</ul>
<!-- Formsdropdown -->
<ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="form-elements.html">Form Elements</a></li>
    <li><a href="form-layouts.html">Form Layouts</a></li>
    <li><a href="form-validation.html">Form Validations</a></li>
    <li><a href="form-masks.html">Form Masks</a></li>
    <li><a href="form-file-uploads.html">File Uploads</a></li>
</ul>
<!-- Pagesdropdown -->
<ul id="Pagesdropdown" class="dropdown-content dropdown-horizontal-list">
    <li><a href="page-contact.html">Contact Page</a></li>
    <li><a href="page-todo.html">ToDos</a></li>
    <li><a href="page-blog-1.html">Blog Type 1</a></li>
    <li><a href="page-blog-2.html">Blog Type 2</a></li>
    <li><a href="page-404.html">404</a></li>
    <li><a href="page-500.html">500</a></li>
    <li><a href="page-blank.html">Blank</a></li>
</ul>

    </div>
</header>
        
        
        <div id="main">    
            <div class="wrapper">
                
                <?= $this->getContent() ?>
            </div>
        </div>    
        
        <!-- FLOATING ACTION BUTTON -->
<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
    <a class="btn-floating btn-large">
    <i class="material-icons">add</i>
    </a>
    <ul>
    <li>
        <a href="css-helpers.html" class="btn-floating blue" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;">
        <i class="material-icons">help_outline</i>
        </a>
    </li>
    <li>
        <a href="cards-extended.html" class="btn-floating green" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;">
        <i class="material-icons">widgets</i>
        </a>
    </li>
    <li>
        <a href="app-calendar.html" class="btn-floating amber" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;">
        <i class="material-icons">today</i>
        </a>
    </li>
    <li>
        <a href="app-email.html" class="btn-floating red" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;">
        <i class="material-icons">mail_outline</i>
        </a>
    </li>
    </ul>
</div>
        <!-- FOOTER START -->
<footer class="page-footer">
    <div class="white footer-copyright">
        <div class="container center-align">
            <span>
                <ul >
                    <li>
                        <a href="index.html" class="darken-1">
                            <img src="img/logo/agedi.png" alt="agedi logo" style="height: 60px;">
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="darken-1">
                            <img src="img/logo/ead.png" alt="agedi logo" style="height: 60px;">
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="darken-1">
                            <img src="img/logo/unep.png" alt="agedi logo" style="height: 60px;">
                        </a>
                    </li>
                </ul>
            </span>            
            
            
        </div>
    </div>
</footer>        

        <?= $this->tag->javascriptInclude('js/jquery-3.2.1.min.js') ?>
        <?= $this->tag->javascriptInclude('js/materialize.min.js') ?>        
        <?= $this->tag->javascriptInclude('vendors/perfect-scrollbar/perfect-scrollbar.min.js') ?>
        <?= $this->tag->javascriptInclude('js/chart.min.js') ?>        
        <?= $this->tag->javascriptInclude('js/jquery.sparkline.min.js') ?> 

        <?= $this->tag->javascriptInclude('js/plugins.js') ?>
        <?= $this->tag->javascriptInclude('js/dashboard-analytics.js') ?>        

    </body>
</html>
