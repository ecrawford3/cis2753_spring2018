<?php
get_header();
while ( have_posts() ) : the_post();
?>
<h2> <?php the_title(); ?> </h2>
<?php the_content();
//$custom = get_post_custom($post->ID);
//echo $custom['staff_directory_firstname'];

endwhile;
/*$args = array(
	'post_type' => 'Staff Directory',
);

$myStaff = new WP_Query( $args );
while  ( $myStaff->have_posts() ) : $myStaff->the_post();
the_title();
the_content();
endwhile;*/
?>