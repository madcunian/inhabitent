<?php
/**
 * Template Name: Product Type
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
          add_filter( 'get_the_archive_title', function ( $title ) {
            $title = "Shop Stuff";
            return $title;
          });

					the_archive_title( '<h2 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-descaiption">', '</div>' );
				?>
        <ul class="product-type">
          <li><a href="">Do</a></li>
          <li><a href="">Eat</a></li>
          <li><a href="">Sleep</a></li>
          <li><a href="">Wear</a></li>
        </ul>
			</header><!-- .page-header -->

      <section class="product-grid container">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="product-grid-item">
            <div class="product-item-thumbnail">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
            </div>
            <p class="product-item-text">
              <?php the_title(); ?>
              <span>......</span>
              <?php echo CFS()->get( 'price' ); ?>
            </p>
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