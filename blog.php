<?php
/**
 * The template for displaying blog posts.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package GorMonjeeTheme
 */

get_header(); ?>

<div class="container">
  <main id="main" class="site-main" role="main">
   <div class="search">
     <a class="pull-right" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/search.svg"></a>
     <span class="pull-right">
      <input type="search" name="search" value-size="40">
    </span>
  </div>
  <div class="clearfix"></div>

  <?php query_posts('cat=blog')?>
  
  <?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>
  
    <section class="blog-post col-xs-12 col-md-6 col-lg-3">
      <a href="<?php the_permalink()?>">
        <?php $image = get_field('image'); ?>
        <h2><?php the_title(); ?></h2>
        <h6><?php the_author_meta('')?></h6>
        <p><?php the_content(); ?></p>
      </a>
    </section>

  <?php endwhile; ?>
  <?php else : ?>

   <?php get_template_part( 'content', 'none' ); ?>

  <?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>