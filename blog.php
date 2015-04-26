<?php /* Template Name: Blog */ ?>
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
      <?php get_search_form(); ?>
  </div>
  <div class="clearfix"></div>

  <?php query_posts(array('category_name' => 'blog'))?>
  
  <?php if ( have_posts() ) : ?>

  <?php 
  //Set a counter up to count to 5 for every 5th post styling to be different
    $post_num = 0;
  //Establish the Wordpress Loop
    while ( have_posts() ) : the_post(); 
  //Incrememnt the counter each time the loop pushes a new post
    $post_num++;
  ?>

    <?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>

      <section class="blog-post col-xs-12 col-md-6 col-lg-6">
        <a href="<?php the_permalink()?>">
          <?php $image_blog = get_field('image_blog');
                $image_url = $image_blog['url']; ?>
          <figure class="blog-images">
            <img src="<?php echo $image_url; ?>" >
          </figure>
          <h2><?php the_title(); ?></h2>
          <h6><?php the_author_meta('display_name')?></h6>
          <p><?php the_excerpt(); ?></p>
        </a>
      </section>

    <?php elseif ($post_num == 6 ) : ?>

      <?php //Reset the counter to 0 after we hit 5 
        $post_num = 0; ?>
      <section class="blog-post col-xs-12 col-md-6 col-lg-6">
        <a href="<?php the_permalink()?>">
          <?php $image_blog = get_field('image_blog');
                $image_url = $image_blog['url']; ?>
          <figure class="blog-images">
            <img src="<?php echo $image_url; ?>" >
          </figure>
          <h2><?php the_title(); ?></h2>
          <h6><?php the_author_meta('display_name')?></h6>
          <p><?php the_excerpt(); ?></p>
        </a>
      </section>

      <div class="clearfix visible-lg"></div>

    <?php elseif ($post_num == 3) : ?> 

      <section class="blog-post col-xs-12 col-md-6 col-lg-3">
        <a href="<?php the_permalink()?>">
          <?php $image_blog = get_field('image_blog');
                $image_url = $image_blog['url']; ?>
          <figure class="blog-images">
            <img src="<?php echo $image_url; ?>" >
          </figure>
          <h2><?php the_title(); ?></h2>
          <h6><?php the_author_meta('display_name')?></h6>
          <p><?php the_excerpt(); ?></p>
        </a>
      </section>

      <div class="clearfix visible-lg"></div>

    <?php else : ?>

      <section class="blog-post col-xs-12 col-md-6 col-lg-3">
        <a href="<?php the_permalink()?>">
          <?php $image_blog = get_field('image_blog');
                $image_url = $image_blog['url']; ?>
          <figure class="blog-images">
            <img src="<?php echo $image_url; ?>" >
          </figure>
          <h2><?php the_title(); ?></h2>
          <h6><?php the_author_meta('display_name')?></h6>
          <p><?php the_excerpt(); ?></p>
        </a>
      </section>
    
    <?php endif; ?>

  <?php endwhile; ?>
  <?php else : ?>

   <?php get_template_part( 'content', 'none' ); ?>

  <?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>