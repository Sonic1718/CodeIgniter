<div class="container">
	<h1>Hello Index</h1>
	<table class="table">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Date Registered</th>
		</tr>
		<?php foreach($users as $user): ?>
			<tr>
				<td><?php echo $user['firstname']; ?></td>
				<td><?php echo $user['lastname']; ?></td>
				<td><?php echo $user['date_modified']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>