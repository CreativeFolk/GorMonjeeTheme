<?php $pageID = get_page_by_path($page_slug); ?>

<section class="info-section">
  <figure class="container-fluid">
    <?php $image_first = get_field('image_first', $pageID);
          $image_url = $image_first['url']; ?>
    <img data-bottom-top="top:10em; left:-10em; opacity:0;" 
    data-100-top="top:1.4em; left:1em; opacity:1;"
    src="<?php echo $image_url; ?>">
    <figcaption 
      data-bottom-top="top:10em; right:-8em; opacity:0;"
      data-center-top="top:1.4em; right:3em; opacity:1;"
      class="col-xs-12 col-sm-10 col-md-6 col-lg-4 pull-right col-md-pull-1">
    <h1><?php the_field('title_first', $pageID); ?></h1>
    <p><?php the_field('content_first', $pageID); ?></p>
  </figcaption>
</figure>
</section>

<section class="info-section inverted">
  <figure class="container-fluid">
      <?php $image_second = get_field('image_second', $pageID);
          $image_url = $image_second['url']; ?>
    <figcaption class="col-xs-12 col-sm-10 col-md-6 col-lg-4 col-md-offset-1">
      <h1><?php the_field('title_second', $pageID); ?></h1>
      <p><?php the_field('content_second', $pageID); ?></p>
    </figcaption>
    <img src="<?php echo $image_url; ?>">
  </figure>
</section>

<section class="info-section">
  <figure class="container-fluid">
      <?php $image_third = get_field('image_third', $pageID);
          $image_url = $image_third['url']; ?>
    <img data-bottom-top="top:10em; left:-10em; opacity:0;" 
      data-100-top="top:1.4em; left:1em; opacity:1;"
      src="<?php echo $image_url; ?>">
    <figcaption 
      data-bottom-top="top:10em; right:-8em; opacity:0;"
      data-center-top="top:1.4em; right:3em; opacity:1;"
      class="col-xs-12 col-sm-10 col-md-6 col-lg-4 pull-right col-md-pull-1">
      <h1><?php the_field('title_third', $pageID); ?></h1>
      <p><?php the_field('content_third', $pageID); ?></p>
  </figcaption>
</figure>
</section>

<section class="signup">
  <div class="container">

    <h1><?php the_field('heading_one', $pageID); ?></h1>
    <h2><?php the_field('heading_two', $pageID); ?></h2>
    <button class="btn">
      Sign up for Gormonjee beta today!
    </button>
  </div>
</section>