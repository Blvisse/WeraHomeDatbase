<h2><?= $title; ?></h2>
<?php echo validation_errors();?>
<?php echo form_open('posts/create');?>
  <div class="form-group">
    <label>Item Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body/Definition</label>
    <textarea  class="form-control" name="body" placeholder="Add Definition of the Item"></textarea>
  </div>
  
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>