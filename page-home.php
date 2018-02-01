<?php
/**
 * Template Name: Home
 *
 * @package growingminds
 */

get_header(); 

$args = array(
	'post_type' => 'post',
	'paged' => $paged,	
);
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="box-content">
							<?php $query = new WP_Query($args); ?>
							
							<?php while ($query->have_posts()): $query->the_post(); ?>
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
							<?php endwhile; ?>
							<div class="posts-wrap-footer row">
								<div class="col-sm-12 text-center">
									<?php next_posts_link( 'View More', $query->max_num_pages ); ?>
								</div>
							</div>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
					<div class="col-sm-3">
						<?php get_template_part('template-parts/content', 'sidebar'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
