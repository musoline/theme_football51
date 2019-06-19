<?php get_header(); ?>
<main>
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
        ?><h2>
            <?php the_title(); ?>
        </h2>
        <?php 
        if(has_post_thumbnail()){
          the_post_thumbnail('medium');  
        } ?>

        <div>
            <?php the_content(""); ?>
        </div>
        <?php echo("Team"); ?>
        <a href="<?php the_permalink(); ?>">Read more</a>        
        <?php
	endwhile;
else :
	echo wpautop( 'Sorry, no posts were found' );
endif;
?>
</main>
<?php get_footer(); ?>