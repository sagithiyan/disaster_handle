<h2><?=$title ?></h2>

<?php echo validation_errors(); 	?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" name="title">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Body</label>
    <textarea  id="editor1" class="form-control"  placeholder="Body" name="body"></textarea>
	</div>
	<div class="form-group">
		<label for="">Category</label>
		<select name="category_id" class="form-control" id="">
			<?php foreach($categories as $category):?>
				<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>

			<?php endforeach;?>
		</select>
	</div>
	<div class="form-group">
		<label for="">upload image</label>
		<input type="file" size="20" name="userfile">
	</div>
  <div class="form-group">
    <input type="submit" name="Post" value="Post Now" class="btn btn-primary">
  </div>
</form>
