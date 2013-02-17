<h1>Deactivate User</h1>
<p>Are you sure you want to deactivate the user '<?php echo $user->username; ?>'</p>
<form action="<?php echo base_url("auth/deactivate/".$user->id) ?>" method="post" accept-charset="utf-8" class="well">
  <p>
  	<label for="confirm">Yes:</label>
    <input type="radio" name="confirm" value="yes" checked="checked" />
  	<label for="confirm">No:</label>
    <input type="radio" name="confirm" value="no" />
  </p>
  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>
  <p><?php echo form_submit('submit', 'Submit');?></p>
<?php echo form_close();?>