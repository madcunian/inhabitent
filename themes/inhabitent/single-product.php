<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    
		<?php while ( have_posts() ) : the_post(); ?>

      <div class="single-product-content">
        <div class="product-image"><?php the_post_thumbnail( 'large' ); ?></div>
        <div class="product-content">
          <h2 class="product-title"><?php the_title(); ?></h2>
          <p class="price">$<?php echo CFS()->get( 'price' ); ?></p>
          <?php the_content(); ?>
          <?php get_template_part( 'template-parts/content', 'social' ); ?>
        </div>
      </div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>