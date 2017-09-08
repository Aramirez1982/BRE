<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StarterPistol
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- while ( have_posts() ) : the_post();

				// get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?> -->

			<!-- Content Begins Here -->
			<div class="homepage--gallery">
				<?php echo do_shortcode("[ic_add_posts category='front-page-gallery' showposts='5']"); ?>
			</div>

			<!-- Content Ends Here -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="pre-footer">
		<div class="l-constrain--pre-footer">
			<h3>WHAT’S NEW WITH BLOOD RELATED ENTERTAINMENT</h3>

			<div class="pre-footer__widget">
	      <?php dynamic_sidebar( 'prefooter_widget_1' ); ?>
	      <?php dynamic_sidebar( 'prefooter_widget_2' ); ?>
	      <?php dynamic_sidebar( 'prefooter_widget_3' ); ?>
			</div>

		</div>
	</div>
<?php

get_footer();
