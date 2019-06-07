<?php 
get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post();
        ?><h2>
            <?php the_title(); ?>
        </h2>
        <div>
            <?php the_content(""); ?>
        </div>
        <a href= "<?php get_the_permalink();?>" alt="">Read More</a>
        <?php
	endwhile;
else :
	echo wpautop( 'Sorry, no posts were found' );
endif;

get_footer();

?>