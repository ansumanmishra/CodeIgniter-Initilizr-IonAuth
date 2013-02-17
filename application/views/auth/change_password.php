<h1>Change Password</h1>
<?php if($message) { ?> 
          <div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo($message) ?>
</div>
<?php } ?>
<?php echo form_open("auth/change_password");?>

      <p>Old Password:<br />
      <?php echo form_input($old_password);?>
      </p>

      <p>New Password (at least <?php echo $min_password_length;?> characters long):<br />
      <?php echo form_input($new_password);?>
      </p>

      <p>Confirm New Password:<br />
      <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', 'Change');?></p>

<?php echo form_close();?>
