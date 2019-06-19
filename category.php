<?php 
get_header();


?>

<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class="articles-news">
        <div class="articles-news-single">
            <div class="articles-news-single-img">
            <?php 
                if(has_post_thumbnail()){the_post_thumbnail('medium');} 
            ?>
            </div>
            <div class="articles-news-single-info">
            <h2 class="articles-news-single-info-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="articles-news-single-info-details">
                <p class="articles-news-single-info-details-time"><span>date -</span> 12 april 2019</p>
                <p class="articles-news-single-info-details-author"><span>by</span> <a href="#">George Lukas</a></p>
            </div>
            <?php the_content(""); ?>
            </div>
        </div>
    </div>
    <?php
	endwhile;
else :
	echo wpautop( 'Sorry, no posts were found' );
endif;
?>
</div>
<?php



get_footer();

?>