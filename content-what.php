<?php $pageID = 1 ?>

<h1><?php echo get_the_title($pageID); ?></h1>

<div class="row">
  <figure class="col-xs-12 col-sm-4">
    <div class="imgcontainer icon fats">
      <?php $icon_first = get_field('icon_first', $pageID);
            $icon_url = $icon_first['url']; ?>
      <img src="<?php echo $icon_url; ?>">
    </div>
    <figcaption>
      <h3><?php the_field('title_first', $pageID); ?></h3>
      <p><?php the_field('content_first', $pageID); ?></p>
    </figcaption>
  </figure>

  <figure class="col-xs-12 col-sm-4">
    <div class="imgcontainer icon fiber">
      <?php $icon_second = get_field('icon_second', $pageID);
            $icon_url = $icon_second['url']; ?>
      <img src="<?php echo $icon_url; ?>">
    </div>
    <figcaption>
      <h3><?php the_field('title_second', $pageID); ?></h3>
      <p><?php the_field('content_second', $pageID); ?></p>
    </figcaption>
  </figure>

  <figure class="col-xs-12 col-sm-4">
    <div class="imgcontainer icon protein">
      <?php $icon_third = get_field('icon_third', $pageID);
            $icon_url = $icon_third['url']; ?>
      <img src="<?php echo $icon_url; ?>">
    </div>
    <figcaption>
      <h3><?php the_field('title_third', $pageID); ?></h3>
      <p><?php the_field('content_third', $pageID); ?></p>
    </figcaption>
  </figure>
</div>