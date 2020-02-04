<?php
/**
 * Template Name: Full-width(no sidebar)
 *
 * This is the template that displays full width page without sidebar
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
require_once('page.php');
require_once('search.php');
require_once('searchform.php');
require_once('sidebar-footer.php');
require_once('sidebar-home.php');
require_once('sidebar.php');
require_once('single.php');
get_header(); ?>

  <div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();
?>

		<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php
		  // If comments are open or we have at least one comment, load up the comment template
		if ( get_theme_mod( 'sparkling_page_comments', 1 ) == 1 ) :
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
			endif;
		  endif;
		?>

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->

  </div><!-- #primary -->

</div><!-- close .main-content-inner -->

<?php get_footer(); ?>
