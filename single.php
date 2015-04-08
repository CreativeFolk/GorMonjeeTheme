<?php
/**
 * The template for displaying all single posts.
 *
 * @package GorMonjeeTheme
 */

get_header(); ?>

	<div class="container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="header col-xs-12">
				<?php $image = get_field('image'); ?>
			</div>
			<h2><?php the_title(); ?></h2>
			<h6><?php the_author_meta('')?></h6>
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				<p><?php the_content(); ?></p>
			</div>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
