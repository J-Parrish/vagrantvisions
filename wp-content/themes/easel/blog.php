<?php
/*
Template Name: Blog
*/
get_header();

Protect();
$blog_query = array(
		'paged' => get_query_var('paged')
		);
$posts = &query_posts($blog_query);
if (have_posts()) {
	while (have_posts()) : the_post();
		easel_display_post();
	endwhile;
	easel_pagination();
}
UnProtect();

get_footer();
?>