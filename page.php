<?php
get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<h2><?php the_title(); ?> </h2>
<?php 
the_content("");
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php
get_footer();
