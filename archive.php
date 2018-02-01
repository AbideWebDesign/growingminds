<?php
/**
 * The template for displaying archive pages
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
						<?php
						if ( have_posts() ) : ?>
				
							<header class="page-header">
								<?php
									the_archive_title( '<h1 class="page-title">', '</h1>' );
								?>
							</header><!-- .page-header -->
				
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
				
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'list-post');
				
							endwhile;
							
							?>
							
							<?php get_template_part('template-parts/content', 'post-nav'); ?>

						<?php
							
						else :
				
							get_template_part( 'template-parts/content', 'none' );
				
						endif; ?>
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