<?php 
get_header();

if (have_posts()) {
	while (have_posts()) : the_post();
		easel_display_post();
	endwhile;
	easel_pagination();
}

get_footer();
?>