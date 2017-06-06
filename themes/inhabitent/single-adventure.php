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

      <div class="adventure">
        <div class="adventure-image"><?php the_post_thumbnail( 'full' ); ?></div>
        <div class="adventure-content container">
          <h2 class="adventure-title"><?php the_title(); ?></h2>
          <p class="adventure-author">By <?php the_author(); ?></p>
          <?php the_content(); ?>
          <div class="social-buttons">
            <a class="product-button" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
            <a class="product-button" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
            <a class="product-button" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
          </div>
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