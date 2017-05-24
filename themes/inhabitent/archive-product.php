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
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
        <ul class="product-type">
          <li><a href="">Do</a></li>
          <li><a href="">Eat</a></li>
          <li><a href="">Sleep</a></li>
          <li><a href="">Wear</a></li>
        </ul>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


 <?php get_footer(); ?>