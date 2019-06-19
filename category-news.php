<?php get_header();?>

<div class="container-fluid mt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-12 posts">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="article">
                        <div class="article-img-container">
                            <div class="inside">
                                <div class="article-img">
                                    <?php if(has_post_thumbnail()){ the_post_thumbnail(); } ?>
                                    <div class="article-img-overlay">
                                        <a href="<?php the_permalink(); ?>">A</a>                 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="article-info">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="date-time-author">
                                <div class="date">12.12.2019</div>
                                <div class="divider"></div>
                                <div class="author"><span>by </span><a href="#">author</a></div>
                            </div>
                            <?php the_excerpt(""); ?>
                        </div>
                    </div>    
                <?php endwhile; else : echo wpautop( 'Sorry, no posts were found' ); endif; ?>
            </div>
            <div class="col-xl-4 col-lg-4 bg-error">

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>