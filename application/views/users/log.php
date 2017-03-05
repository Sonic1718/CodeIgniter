	<?php if($this->session->userdata('seminar_data')):?>
		<?php $user = $this->session->userdata('seminar_data'); ?>
			<?php echo form_open('users/createlog'); ?>
			<h2>Clich here to add</h2>
			<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $this->uri->segment(3); ?>">
		      <div class="form-group">
		        <input type="hidden" class="form-control" id="seminar_num" value="<?php echo $user['sn']; ?>" name="seminar_num" placeholder="Seminar Num">
		      </div>
		      <div class="form-group">
		        <input type="hidden" class="form-control" id="from" value="<?php echo $user['from']; ?>" name="from" placeholder="From">
		      </div>
		      <div class="form-group">
		        <input type="hidden" class="form-control" id="to" value="<?php echo $user['to']; ?>" name="to" placeholder="To">
		      </div>
		      <div class="form-group">
		        <input type="hidden" class="form-control" id="place" value="<?php echo $user['place']; ?>" name="place" placeholder="Place">
		      </div>
		      <button type="submit" class="btn btn-default">ADD HERE</button>
		    </form>
	<?php endif; ?>

<div class="container">
	<table class="table table-hover" align="center">
		<tr>
			<th>Seminar Number</th>
			<th>From</th>
			<th>To</th>
			<th>Place</th>
		</tr>
		<?php foreach($log as $lo): ?>
		<tr>
			<td><p class="datelists"><?php echo $lo['sn']; ?></p></td>
			<td><p class="datelists"><?php echo $lo['from']; ?></p></td>
			<td><p class="datelists"><?php echo $lo['to']; ?></p></td>
			<td><p class="datelists"><?php echo $lo['place']; ?></p></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>