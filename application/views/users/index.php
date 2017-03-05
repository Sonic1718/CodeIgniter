<p class="bg-danger">
	<?php if($this->session->userdata('logged_in')):?>
		<?php 
			$user = $this->session->userdata('logged_in'); 
			echo "Welcome ".$user['username'];
		?> 
	<?php endif; ?>
</p>
	<?php if($this->session->userdata('seminar_data')):?>
		<?php 
			$user = $this->session->userdata('seminar_data'); 
			print_r($user);
		?> 
	<?php endif; ?>

<?php echo validation_errors(); ?>

<div class="container">
	<a class="btn btn-success" href="<?php echo site_url('users/create'); ?>">Create User</a>
	<a class="btn btn-primary" href="<?php echo site_url('users/createdata'); ?>">Create Data</a>

	<table class="table">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Date Registered</th>
			<th>Action</th>
		</tr>
		<?php foreach($users as $user): ?>
			<tr>
				<td><?php echo $user['firstname']; ?></td>
				<td><?php echo $user['lastname']; ?></td>
				<td><?php echo $user['date_modified']; ?></td>
				<td><a href="<?php echo site_url('users/edit/'.$user['id']); ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>