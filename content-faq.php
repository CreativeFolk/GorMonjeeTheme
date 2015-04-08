
<h1>Common Inquiries</h1>

<?php query_posts('cat=faq'); ?>

<?php if (have_posts()) : ?>
<div class="col-xs-12">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <?php while (have_posts()) : ?>
      <div class="panel">
        <div class="panel-heading" role="tab" id="heading-<?php echo $post->ID; ?>">
          <h2 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $post->ID; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $post->ID; ?>">
              <?php the_title(); ?> <span class="caret"></span>
            </a>
          </h2>
        </div>
        <div id="collapse-<?php echo $post->ID; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-<?php echo $post->ID; ?>">
          <div class="panel-body">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<?php else : ?>
  <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>