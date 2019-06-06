<?php get_header(); ?>


 
<article class="single-article">
  <div class="single-thumbnail">
    <img src="<?php         if(has_post_thumbnail()){
      the_post_thumbnail();  
    } ?>" alt="">
  </div>
</article>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_title(); ?>
 <?php         if(has_post_thumbnail()){
          the_post_thumbnail();  
        } ?>
 <?php the_content(); ?>
 <?php echo get_the_date(); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>