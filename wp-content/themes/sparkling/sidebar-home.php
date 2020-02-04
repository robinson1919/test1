<?php
/**
 * The Sidebar widget area for static frontpage.
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
require_once('sidebar.php');
require_once('single.php');
?>

	<?php
	// If footer sidebars do not have widget let's bail.

	if ( ! is_active_sidebar( 'home-widget-1' ) && ! is_active_sidebar( 'home-widget-2' ) && ! is_active_sidebar( 'home-widget-3' ) ) {
		return;
	}
	// If we made it this far we must have widgets.
	?>

	<div class="home-widget-area row">
		<?php if ( is_active_sidebar( 'home-widget-1' ) ) : ?>
		<div class="col-sm-4 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-1' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-2' ) ) : ?>
		<div class="col-sm-4 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-2' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-3' ) ) : ?>
		<div class="col-sm-4 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-3' ); ?>
		</div><!-- .widget-area .third -->
		<?php endif; ?>
	</div>

