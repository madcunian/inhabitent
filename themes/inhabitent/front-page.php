<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="home-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" class="logo" alt="Inhabitent Logo" />
      </section>

      <h2>Shop Stuff</h2>
        <section class="product-type-front container">
        <?php $terms = get_terms('product_type')?>
          <?php foreach ( $terms as $product_type) : ?>
            <div class="product-type-front-block">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-type-icons/<?php echo $product_type->slug ?>.svg" alt="<?php echo $product_type->name; ?>" />
              <p class="description"><?php echo $product_type->description ?></p>
              <a href="<?php echo get_term_link($product_type); ?>/" class="product-type-button"><?php echo $product_type->slug ?> Stuff</a>
            </div>
          <?php endforeach; ?>
      </section>

      <h2>Inhabitent Journal</h2>
      <div class="journal container">

        <?php $args = array( 'posts_per_page' => 3,); ?>

        <?php $posts = get_posts( $args ); ?>
        
        <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
          <div class="home-posts">
            <div class="journal-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div>
            <div class="journal-post">
              <p class="journal-comment"><?php the_time('F jS, Y'); ?> / <?php comments_number('0 comments ', '1 comment', '% comments'); ?></p>
              <h3 class="journal-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="entry"><a href="<?php the_permalink(); ?>" class="product-button">Read Entry</a></p>
            </div>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    
    </div>
    
    <h2>Latest adventures</h2>
    <div class="adventures container">

      <?php $adventure_args = array (
        'post_type' => 'adventure',
        'posts_per_page' => 4,
        'order' => 'ASC'
      ); ?>

        <?php $adventure_posts = get_posts( $adventure_args ); ?>

        <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
          <div class="adventure-posts"><?php the_post_thumbnail( 'full' ); ?>

            <div class="adventure-post">
              <h3 class="adventures-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <a href="<?php the_permalink(); ?>" class="white-button">Read More</a>
            </div>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>

    </div>
    <div class="adventure-button container">
      <a href="adventure"><p class="more-adventures product-type-button">More adventures</p></a>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>