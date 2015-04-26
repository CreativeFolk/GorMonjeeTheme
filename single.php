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
		<?php if (get_field('image_blog')) : ?>
			<div class="blog-header col-xs-12 col-md-10 col-md-offset-1">
				<?php $image_blog = get_field('image_blog');
                $image_url = $image_blog['url']; ?>
        <img src="<?php echo $image_url; ?>" >
			</div>
		<?php endif; ?>
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<h2><?php the_title(); ?></h2>
				<h6><?php the_author_meta('')?></h6>
				<p><?php the_content(); ?></p>
			</div>

			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
