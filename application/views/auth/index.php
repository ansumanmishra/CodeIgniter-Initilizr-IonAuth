<h1>Users</h1>
<p>Below is a list of the users.</p>

<div id="infoMessage"><?php echo $message;?></div>

      <table class="table table-striped table-bordered tablesorter" id="tcontacts">
      	<thead>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Groups</th>
		<th><center>Status</center></th>
		<th><center>Action</center></th>
	</tr>
</thead>
<tbody>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?>
                <?php endforeach?>
			</td>
			<td><center><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Active') : anchor("auth/activate/". $user->id, 'Inactive');?></center></td>
			<td><center><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></center></td>
		</tr>
	<?php endforeach;?>
</tbody>
</table>
<p><a href="<?php echo site_url('auth/create_user');?>">Create a new user</a> | <a href="<?php echo site_url('auth/create_group');?>">Create a new group</a></p>
