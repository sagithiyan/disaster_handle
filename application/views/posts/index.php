<h2><?=$title ?></h2>

<?php 

foreach($posts as $post): ?>
<div class="row">
<div class="col-md-5">
	<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'];?>" >
</div>
<div class="col-md-9">
<h3><?php echo $post['title']; ?></h3>
	<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in Posted on: <?php echo $post['name']; ?>  </small><br>
	<?php echo word_limiter($post['body'],50); ?>
	<p><a href="<?php echo site_url('/posts/'.$post['slug']);?>" class="btn btn-default">Read More</a></p>
</div>
</div>

	 
<?php endforeach;	?>
