<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package growingminds
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="box-content">
							<section class="error-404 not-found">
								<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'growingminds' ); ?></h1>
				
								<div class="page-content">
									<p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'growingminds' ); ?></p>
									
									<div class="col-sm-8 col-sm-offset-2">
										<?php get_search_form(); ?>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
										</div>
										<div class="col-sm-6">
											<div class="widget widget_categories">
												<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'growingminds' ); ?></h2>
												<ul class="list">
												<?php
													wp_list_categories( array(
														'orderby'    => 'count',
														'order'      => 'DESC',
														'show_count' => 1,
														'title_li'   => '',
														'number'     => 10,
													) );
												?>
												</ul>
											</div><!-- .widget -->
										</div>
									</div>
								</div><!-- .page-content -->
							</section><!-- .error-404 -->
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
