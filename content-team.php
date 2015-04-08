
<?php while ( have_posts() ) : the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="imgcontainer">
    <img src="<?php echo $image[0]; ?>">
    </div>
    <figcaption>
      <h4><?php the_title(); ?></h4>
      <p><?php the_content(); ?></p>
    </figcaption>
  </figure>


<?php endwhile; ?>