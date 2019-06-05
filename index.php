<?php
get_header(); 
?>



<div class="team_history">
<?php
$args = array('page_id'=>77);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) { 
		$the_query->the_post();?> 



	<h2><?php the_title(); ?> </h2>
    <?php 
  
        }

} ?>
</div>






<div class="news">
<?php
$args = array('cat'=>1, 'post_per_page'=> 10 );
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) { 
		$the_query->the_post();?> 



	<h2><?php the_title(); ?> </h2>
    <?php 
  
        }

} ?>
</div>
<?php 

get_footer();
