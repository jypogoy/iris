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
        {#<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>#}
        <link rel="icon" href="img/logo/iris-logo.png" sizes="32x32">

        <!-- CORE CSS -->
        {{ stylesheet_link('https://fonts.googleapis.com/icon?family=Material+Icons') }}
        {{ stylesheet_link('css/materialize.min.css') }}
        {{ stylesheet_link('css/styles-new.css') }}
        {{ stylesheet_link('css/general-layout.css') }}
        {{ stylesheet_link('css/helper.css') }}
        {{ stylesheet_link('css/typography.css') }}
        {{ stylesheet_link('css/page-header.css') }}
        {{ stylesheet_link('css/page-helper.css') }}
        {{ stylesheet_link('css/preloader.css') }}
        {{ stylesheet_link('css/cards.css') }}
        {{ stylesheet_link('css/charts.css') }}
        {{ stylesheet_link('css/footer-new.css') }}            

        <!-- HORIZONTAL NAV CSS -->
        {{ stylesheet_link('css/style-horizontal.css') }}

        <!-- PLUGINS -->
        {{ stylesheet_link('css/perfect-scrollbar.css') }}

        <!-- CUSTOM -->
        {{ stylesheet_link('css/custom.css') }}

    </head>
    <body class="layouts-horizontal">                           
        
        {% include 'layouts/loader.volt' %}
        {% include 'layouts/header.volt' %}
        {#% include 'layouts/horizontal-nav.volt' %#}
        
        <div id="main">    
            <div class="wrapper">
                {#% include 'layouts/sidebar-left.volt' %#}
                {{ content() }}
            </div>
        </div>    
        
        {% include 'layouts/floating-button.volt' %}
        {% include 'layouts/footer.volt' %}        

        {{ javascript_include('js/jquery-3.2.1.min.js') }}
        {{ javascript_include('js/materialize.min.js') }}        
        {{ javascript_include('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}
        {{ javascript_include('js/chart.min.js') }}        
        {{ javascript_include('js/jquery.sparkline.min.js') }} 

        {{ javascript_include('js/plugins.js') }}
        {{ javascript_include('js/dashboard-analytics.js') }}        

    </body>
</html>
