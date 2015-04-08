<?php /* Template Name : About */ ?>

<?php
/**
 * The Home Page template file.
 *
 * @package GorMonjeeTheme
 */

get_header(); ?>


<section class="intro">

  <?php while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; ?>

</section>

<section class="about-section">
  <div class="container clearfix">
    <?php get_template_part('content', 'what'); ?>
  </div>
</section>

  <section class="about-section inverted">
    <div class="container">
      <h1>The Team</h1>

      <?php query_posts('cat=team'); ?>

      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', 'team' ); ?>

        <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'content', 'none' ); ?>

      <?php endif; ?>

    </div>
  </section>

  <section class="about-section">
    <div class="container clearfix">
      <?php get_tempalte_part('content', 'faq'); ?>
    </div>
  </section>

<?php get_footer(); ?>
