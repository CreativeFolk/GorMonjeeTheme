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

  <nav class="navbar-features">
    <div class="container">
      <ul class="nav" role="tablist">
        <li class="active"><a href="#personal" aria-controls="home" role="tab" data-toggle="tab">Personal Use</a></li>
        <li><a href="#professional" aria-controls="home" role="tab" data-toggle="tab">Professional Use</a></li>
      </ul>
    </div><!-- container -->
  </nav>
</section>

<div class="tab-content">

  <div class="tab-pane fade in active" id="personal" role="tabpanel">

    <?php get_template_part('content','features'); ?>

  </div><!-- tab-pane -->

  <div class="tab-pane fade" id="professional" role="tabpanel">

    <?php get_template_part('content','features'); ?>

  </div>
  <!--  <section class="info-section">
      <figure class="container-fluid">
        <img 
        data-bottom-top="top:10em; left:-10em; opacity:0;" 
        data-100-top="top:1.4em; left:1em; opacity:1;"
        src="img/pro.png">
        <figcaption 
        data-bottom-top="top:10em; right:-8em; opacity:0;"
        data-center-top="top:1.4em; right:3em; opacity:1;"
        class="col-xs-12 col-sm-10 col-md-6 col-lg-4 pull-right col-md-pull-1">
        <h1>Caregivers can assist their clients with a nutrition strategy</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in magna vitae mauris fermentum tempor. Nunc faucibus tempor leo vel vehicula. In massa leo, egestas sit amet sagittis id, suscipit sit amet magna. Sed in tristique lacus. Nullam molestie, leo a sodales tempus, ex nibh euismod diam, nec iaculis turpis lacus in sem.</p>
      </figcaption>
    </figure>
  </section>

  <section class="info-section inverted">
    <figure class="container-fluid">
      <figcaption class="col-xs-12 col-sm-10 col-md-6 col-lg-4 col-md-offset-1">
        <h1>Monitor if their client is on the right pathway to eating healthy food</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in magna vitae mauris fermentum tempor. Nunc faucibus tempor leo vel vehicula. In massa leo, egestas sit amet sagittis id, suscipit sit amet magna. Sed in tristique lacus. Nullam molestie, leo a sodales tempus, ex nibh euismod diam, nec iaculis turpis lacus in sem.</p>
      </figcaption>
      <img src="">
    </figure>
  </section>

  <section class="info-section">
    <figure class="container-fluid">
      <img 
      data-bottom-top="top:10em; left:-10em; opacity:0;" 
      data-100-top="top:1.4em; left:1em; opacity:1;"
      src="img/dashboard.png">
      <figcaption 
      data-bottom-top="top:10em; right:-8em; opacity:0;"
      data-center-top="top:1.4em; right:3em; opacity:1;"
      class="col-xs-12 col-sm-10 col-md-6 col-lg-4 pull-right col-md-pull-1">
      <h1>Improve workflow, Improve outcomes, and spend more time connecting with clients</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in magna vitae mauris fermentum tempor. Nunc faucibus tempor leo vel vehicula. In massa leo, egestas sit amet sagittis id, suscipit sit amet magna. Sed in tristique lacus. Nullam molestie, leo a sodales tempus, ex nibh euismod diam, nec iaculis turpis lacus in sem.</p>
    </figcaption>
  </figure>
</section>

<section class="signup">
  <div class="container">
    <h2>Start promoting healthy living.</h2>

    <button class="btn">
      Sign up for Gormonjee beta today!
    </button>
  </div>
</section>
-->
</div><!-- .tab-content -->


<?php get_footer(); ?>
