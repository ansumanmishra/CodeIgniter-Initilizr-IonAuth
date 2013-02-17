<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Forgot Password :: Codeigniter-Initializr</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url('css/bootstrap.css')?>" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; 
      }
      .container {
        width: 300px;
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; 
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

    .login-form {
    margin-left: 65px;
    }
  
    legend {
    margin-right: -50px;
    font-weight: bold;
      color: #404040;
    }

    </style>

</head>
<body>
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="login-form">
          <h2>Forgot Password</h2>
          <p>Please enter your <?php echo $identity_label; ?> so we can send you an email to reset your password.</p>
          <?php if($message) { ?> 
          <div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo($message) ?>
</div>
<?php } ?>
          <form action="<?php echo base_url('auth/forgot_password')?>" method="post" accept-charset="utf-8">
            <fieldset>
              <div class="clearfix">
              	<?php echo $identity_label; ?>: <br />
                <input type="text" name="email" value="" id="email" placeholder="Enter your Email">
              </div>
              <button class="btn btn-primary" type="submit">Submit</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="<?php echo base_url('js/vendor/bootstrap.min.js') ?>"></script>

        <script src="<?php echo base_url('js/plugins.js') ?>"></script>
        <script src="<?php echo base_url('js/main.js') ?>"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
</body>
</html>