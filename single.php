<?php get_header(); ?>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="single-article">
      <h2 class="single-article-title">
        <?php the_title(); ?>
      </h2>
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
          <?php echo"Hello Wordl";?>
      </div>
    </article>
  <?php echo get_the_date(); ?>
  <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>