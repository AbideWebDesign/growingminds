<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package growingminds
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="box-content">
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part('template-parts/content', 'list-post'); ?>
							<?php endwhile; ?>
							<?php get_template_part('template-parts/content', 'post-nav'); ?>
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
