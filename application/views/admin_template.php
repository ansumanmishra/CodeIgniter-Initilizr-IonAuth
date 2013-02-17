<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-responsive.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/main.css') ?>">

        <script src="<?php echo base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') ?>"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

       <!-- Example of Navbar -->
        <div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a class="brand" href="#">Codeigniter-Initializr</a>
              <div class="nav-collapse">
                <ul class="nav">
                  <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-align-justify"></i>Users <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('auth/create_user')?>">Add User</a></li>
                      <li><a href="<?php echo base_url('auth/')?>">Manage user</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url('auth/change_password')?>"><i class="icon-th-large"></i> Settings</a></li>
                  <li><a href="<?php echo base_url('auth/logout')?>"><i class="icon-off"></i> Logout</a></li>
                </ul>
              </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

        <div class="container">
            <div id="main_content" style="display:none">
                <?php $this->load->view($main_content) ?>
            </div>
            <hr>

            <footer>
                <p>&copy; Codeigniter-Initializr <?php echo date("Y") ?></p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="<?php echo base_url('js/vendor/bootstrap.min.js') ?>"></script>

        <script src="<?php echo base_url('js/plugins.js') ?>"></script>
        <script src="<?php echo base_url('js/main.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/jquery.tablesorter.min.js') ?>"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>