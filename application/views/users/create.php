<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <?php echo form_open('users/create'); ?>
      <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname">
      </div>
      <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname">
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="password"></label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
  <div class="col-md-4"></div>
</div>