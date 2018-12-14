<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Webstats | Admin Page</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>

        <?= $this->tag->stylesheetLink('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
        <?= $this->tag->stylesheetLink('css/materialize.min.css') ?>
        <?= $this->tag->stylesheetLink('css/style.css') ?>

    </head>
    <body class="grey lighten-3">                           

        <nav class="red darken-2">
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">WebStats</a>
            <ul class="right hide-on-med-and-down">
                <li class="active">
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Users</a>
                </li>
                <li>
                    <a href="#">Posts</a>
                </li>
                <li>
                    <a href="#">Comments</a>
                </li>
                <li>
                    <a href="#">Reports</a>
                </li>
                <a href="#" class="btn large white red-text">
                    <strong>LOG OUT</strong>
                </a>
            </ul>
        </div>  
    </div>
</nav>

        <?= $this->tag->stylesheetLink('css/loader.css') ?>

<div id="loader-wrapper">
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
</div>

        <?= $this->getContent() ?>

        <?= $this->tag->javascriptInclude('js/materialize.min.js') ?>
    </body>
</html>
