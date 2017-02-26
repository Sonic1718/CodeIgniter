<div class="container">
  <?php echo form_open('users/update'); ?>
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <div class="form-group">
      <label for="firstname"></label>
      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>" placeholder="Firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Password</label>
      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" placeholder="Lastname">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>