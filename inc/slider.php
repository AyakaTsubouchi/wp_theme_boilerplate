<?php
global $post;


$slider_posts = get_posts( array(
  'post_type' => 'slider',
  'posts_per_page' => 1
  
) );

if ( $slider_posts ) {
  foreach ( $slider_posts as $post ) : 
      setup_postdata( $post ); 

	  the_content();

  endforeach;
  wp_reset_postdata();

}
?>