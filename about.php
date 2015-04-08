<?php /* Template Name: About */ ?>

<?php get_header(); ?>


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
      <?php wp_reset_query(); ?>

    </div>
  </section>

  <section class="about-section">
    <div class="container clearfix">


      <h1>Common Inquiries</h1>

      <?php query_posts('cat=faq'); ?>

      <?php if (have_posts()) : ?>

        <?php get_template_part('content', 'faq'); ?>

      <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
      <?php endif; ?>

    </div>
  </section>

<?php get_footer(); ?>
