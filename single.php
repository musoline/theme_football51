<?php get_header(); ?>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_title(); ?>
    <article class="single-article">
      <div class="single-article-thumbnail">
          <img src="
          <?php if(has_post_thumbnail())
          {
            the_post_thumbnail_url( 'medium' );
          } ?>
          " alt="">
      </div>
      <div class="single-article-info">
          <?php the_content(); ?>
      </div>
    </article>
  <?php echo get_the_date(); ?>
  <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>