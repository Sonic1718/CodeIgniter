<p class="bg-danger">
  <?php if($this->session->flashdata('login_failed')):?>
    <?php 
      echo $this->session->flashdata('login_failed');
    ?> 
  <?php endif; ?>
</p>

<p class="bg-danger">
  <?php if($this->session->flashdata('errors')):?>
    <?php 
      echo $this->session->flashdata('errors');
    ?> 
  <?php endif; ?>
</p>

<?php echo validation_errors(); ?>

<?php if(!empty($logout_display)){ ?>
  <?php echo $logout_display; ?>
<?php } ?>

<?php if(!empty($errors)){ ?>
  <?php echo $errors; ?>
<?php } ?>

<div class="container">
  <?php echo form_open('users/login'); ?>
   <!--  <input type="hidden" name="id" value="<?php echo $user['id']; ?>"> -->
    <div class="form-group">
      <label for="username"></label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>