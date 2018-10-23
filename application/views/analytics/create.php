<h2><?= $id; ?></h2>
<?php echo validation_errors();?>
<?php echo form_open('analytics/create');?>
  <div class="form-group">
    <label>Item ID</label>
    <input type="text" class="form-control" name="id" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Profit</label>
    <input type="text" class="form-control" name="profit" placeholder="Input profit">
    <label>Sales</label>
    <input type="text" class="form-control" name="sale" placeholder="Input profit">
    <label>year</label>
    <input type="text" class="form-control" name="year" placeholder="Input profit">
  </div>

  
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>