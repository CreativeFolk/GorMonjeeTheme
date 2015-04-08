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
      <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="imgcontainer">
          <img src="img/team-shot.jpg">
        </div>
        <figcaption>
          <h4>Name</h4>
          <p>Littly bitty blurb about the person that's not longer than a sentance.</p>
        </figcaption>
      </figure>
      <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="imgcontainer">
          <img src="img/team-shot.jpg">
        </div>
        <figcaption>
          <h4>Name</h4>
          <p>Littly bitty blurb about the person that's not longer than a sentance.</p>
        </figcaption>
      </figure>
      <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="imgcontainer">
          <img src="img/team-shot.jpg">
        </div>
        <figcaption>
          <h4>Name</h4>
          <p>Littly bitty blurb about the person that's not longer than a sentance.</p>
        </figcaption>
      </figure>
      <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="imgcontainer">
          <img src="img/team-shot.jpg">
        </div>
        <figcaption>
          <h4>Name</h4>
          <p>Littly bitty blurb about the person that's not longer than a sentance.</p>
        </figcaption>
      </figure>
    </div>
  </section>

  <section class="about-section">
    <div class="container clearfix">
      <?php get_tempalte_part('content', 'faq'); ?>
    </div>
  </section>

<?php get_footer(); ?>
