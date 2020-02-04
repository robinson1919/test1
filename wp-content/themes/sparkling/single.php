<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sparkling
 */
require_once('404.php');
require_once('archive.php');
require_once('comments.php');
require_once('footer.php');
require_once('functions.php');
require_once('header.php');
require_once('image.php');
require_once('index.php');
require_once('page-fullwidth.php');
require_once('page.php');
require_once('search.php');
require_once('searchform.php');
require_once('sidebar-footer.php');
require_once('sidebar-home.php');
require_once('sidebar.php');

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

				// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
				endif;

			the_post_navigation(
				array(
					'next_text' => '<span class="post-title">%title <i class="fa fa-chevron-right"></i></span>',
					'prev_text' => '<i class="fa fa-chevron-left"></i> <span class="post-title">%title</span>',
				)
			);

		endwhile; // end of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
