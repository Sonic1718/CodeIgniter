<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <?php echo form_open('users/createdata'); ?>
      <div class="form-group">
        <label for="firstname">Seminar Num</label>
        <input type="text" class="form-control" id="seminar_num" name="seminar_num" placeholder="Seminar Num">
      </div>
      <div class="form-group">
        <label for="lastname">From</label>
        <input type="text" class="form-control" id="from" name="from" placeholder="From">
      </div>
      <div class="form-group">
        <label for="to">To</label>
        <input type="text" class="form-control" id="to" name="to" placeholder="To">
      </div>
      <div class="form-group">
        <label for="email">Place</label>
        <input type="text" class="form-control" id="place" name="place" placeholder="Place">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
  <div class="col-md-4"></div>
</div>