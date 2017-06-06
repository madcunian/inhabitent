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
        $adventure_types = get_terms(array (
          'taxonomy' => 'adventure',
          'hide_empty' => 0
        ));
        if (!empty($adventure_types) && !is_wp_error($adventure_types)) : ?>
      
        <div class="product-taxonomy-shop container">
          <?php foreach ($adventure_types as $adventure_type) : ?>
            <div class="product-taxonomy">
              <a href="<?php echo get_term_link($adventure_type);?>"><?php echo $adventure_type->name; ?></a>
            </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
			</header><!-- .page-header -->

      <section class="adventures-grid container">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="adventures-grid-item">
            <div class="adventures-item-thumbnail">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
            </div>
            <p class="adventures-item-text">
              <span class="item-title"><?php the_title(); ?></span>
            </p>
            <a href="<?php the_permalink(); ?>" class="white-button">Read More</a>
          </div>
      </setion>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

 <?php get_footer(); ?>