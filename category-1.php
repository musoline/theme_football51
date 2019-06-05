<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <?php 
        if(has_post_thumbnail()){
          the_post_thumbnail();  
        }
        ?>
		   <h2>
            <?php the_title(); ?>
        </h2> 
        <div>
       
            <?php the_content(""); ?>
            
            <a href="<?php the_permalink(); ?>">Read more</a>
        </div>
<?php 
	endwhile;
else :
	echo wpautop( 'Sorry, no posts were found' );
endif;

get_footer();
?>