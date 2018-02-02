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
								<?php get_template_part('template-parts/content', 'list-post'); ?>
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
