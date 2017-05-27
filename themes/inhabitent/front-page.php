<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="home-hero"></section>

      <?php
        $product_types = get_terms(array (
          'taxonomy' => 'product_type',
          'hide_empty' => 0
        ));
        if (!empty($product_types) && !is_wp_error($product_types)) : ?>
        <h2>Shop Stuff</h2>
        <div class="product-type-front container">
          <?php foreach ($product_types as $product_type) : ?>
            <div class="product-type-front-block">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-type-icons/<?php echo $product_type->slug ?>.svg" alt="<?php echo $product_type->name; ?>">
              <p><?php echo $product_type->description; ?></p>
              <a href="<?php echo get_term_link($product_type);?>" class="product-type-button"><?php echo $product_type->name; ?> Stuff</a>
            </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

      <h2>Inhabitent Journal</h2>
      <div class="journal container">
        <?php $args = array( 'posts_per_page' => 3,); ?>

        <?php $posts = new WP_Query( $args ); ?>
        <?php if ( $posts->have_posts() ) : ?>
        <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
          <div class="home-posts">
            <div class="journal-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div>
            <div class="journal-post">
              <p class="journal-comment"><?php the_time('F jS, Y'); ?> / <?php comments_number('0 comments ', '1 comment', '% comments'); ?></p>
              <h3 class="journal-title"><?php the_title(); ?></h3>
              <p class="entry"><a href="<?php the_permalink(); ?>" class="product-button">Read Entry</a></p>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <h2>Nothing found!</h2>
      <?php endif; ?>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>