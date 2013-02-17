<h1>Create Group</h1>
<p>Please enter the group information below.</p>

<?php if($message) { ?> 
          <div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo($message) ?>
</div>
<?php } ?>
<form action="<?php echo base_url('auth/create_group') ?>" method="post" accept-charset="utf-8" class="well">

      <p>
            Group Name: <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            Description: <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', 'Create Group');?></p>

<?php echo form_close();?>