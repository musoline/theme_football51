<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_title(); ?>
<?php if(has_post_thumbnail()) { the_post_thumbnail_url(); } ?>
<?php the_content(); ?>
<?php echo("news"); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>