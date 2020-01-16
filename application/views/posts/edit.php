<h2><?=$title ?></h2>

<?php echo validation_errors(); 	?>

<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id'];?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" name="title" value="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Body</label>
    <textarea  id="editor1" class="form-control" placeholder="Body" name="body" value="<?php echo $post['body'];?>"></textarea>
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
    <input type="submit" name="Post" value="Post Now" class="btn btn-primary">
  </div>
</form>
