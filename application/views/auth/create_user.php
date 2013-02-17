<h1>Create User</h1>
<p>Please enter the users information below.</p>
<?php if($message) { ?> 
          <div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo($message) ?>
</div>
<?php } ?>
<form action="<?php echo base_url('auth/create_user') ?>" method="post" accept-charset="utf-8" class="well">
      <p>
            First Name: <br />
            <?php echo form_input($first_name);?>
      </p>
      <p>
            Last Name: <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            Company Name: <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            Email: <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            Phone: <br />
            <?php echo form_input($phone1);?>-<?php echo form_input($phone2);?>-<?php echo form_input($phone3);?>
      </p>

      <p>
            Password: <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            Confirm Password: <br />
            <?php echo form_input($password_confirm);?>
      </p>


      <p><button class="btn btn-primary" data-loading-text="Please wait..."><i class=""></i>Create</button></p>

<?php echo form_close();?>