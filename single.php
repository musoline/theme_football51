<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php the_title(); ?>
  <article class="single-article">
    <div class="single-article-thumbnail">
        <img src="<?php if(has_post_thumbnail()){ the_post_thumbnail();} ?>" alt="">
    </div>
    <div class="single-article-info">
      <p class="single-article-text">
        <?php the_content(); ?>      
      </p>
    </div>
  </article>


 <?php echo get_the_date(); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>