<?php
/**
 * The main template file.
 *
 * @package Inhabitent Theme
 */

 get_header(); ?>

 <!-- THE REST OG THE PAGE MARKUP AND PHP HERE -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h2 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

      <?php
        $product_types = get_terms(array (
          'taxonomy' => 'product_type',
          'hide_empty' => 0
        ));
        if (!empty($product_types) && !is_wp_error($product_types)) : ?>
      
        <div class="product-taxonomy-shop container">
          <?php foreach ($product_types as $product_type) : ?>
            <div class="product-taxonomy">
              <a href="<?php echo get_term_link($product_type);?>"><?php echo $product_type->name; ?></a>
            </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
			</header><!-- .page-header -->

      <section class="product-grid container">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="product-grid-item">
            <div class="product-item-thumbnail">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
            </div>
            <p class="product-item-text">
              <span class="item-title"><?php the_title(); ?></span>
              <span class="item-price"><?php echo CFS()->get( 'price' ); ?></span>
            </p>
          </div>
      </setion>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

 <?php get_footer(); ?>