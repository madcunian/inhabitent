<?php
/**
 * Template Name: About Page
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>
        <div class="entry-content">
          <?php echo CFS()->get( 'about_hero' ); ?>
          <?php echo CFS()->get( 'our_story' ); ?>
          <?php echo CFS()->get( 'our_team' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
