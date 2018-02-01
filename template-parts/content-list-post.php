<?php $image = get_field("featured_image"); ?>
<div class="posts-wrap row">
	<div class="col-sm-3">
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $image['sizes']['post-thumb']; ?>" class="img img-responsive img-circle" /></a>
	</div>
	<div class="col-sm-9">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-meta">
			<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
		</div
		<p><?php the_field("post_excerpt"); ?></p>
		<a class="read-link" href="<?php the_permalink(); ?>">Read More</a>
	</div>
</div>