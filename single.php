<?php get_header(); ?>



<div class="single-head">
  <h1>Hello 1 wordl</h1>
</div>



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