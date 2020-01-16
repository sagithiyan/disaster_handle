<h2><?php echo $post['title']; ?></h2>
<div class="post-body">
	<?php  echo $post['body'];  	?>
</div>

<hr>
<img  src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'];?>" >
<a class="btn btn-default" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>">Edit</a>

<?php
echo form_open('/posts/delete/'.$post['id']);
?>

	<input type="submit" value="Delete" class="btn btn-danger" name="">

</form>
<hr>
<h3>Comments</h3>
<?php if($comments): ?>
	<?php foreach($comments as $comment): ?>
		<div class="well">
		<h5><?php echo $comment['body'];?>[by <strong><?php echo $comment['name'];?></strong>]</h5>
	</div>
		<?php endforeach; ?>
<?php else: ?>
	<p>No comments to dispy</p>
<?php endif; ?>
<hr>
<h3>Add comment</h3>
<?php echo validation_errors();?>
<?php echo form_open('comments/create/'.$post['id']);?>
<div class="form-group">
	<label for="">name</label>
	<input type="text" name="name" class="form-control">
</div>

<div class="form-group">
	<label for="">email</label>
	<input type="text" name="email" class="form-control">
</div>
<div class="form-group">
	<label for="">Body</label>
<textarea name="body" class="form-control "id="" cols="30" rows="10"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug'];?>">
<button class="btn btn-primary" type="submit">submit</button>
</form>
