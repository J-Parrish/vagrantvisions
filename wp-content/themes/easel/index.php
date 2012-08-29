<?php get_header();

if (!easel_themeinfo('disable_blog_on_homepage')) {
	Protect();

	$blog_query = array(
			'posts_per_page' => (int)easel_themeinfo('home_post_count'),
			'paged' => get_query_var('paged')
			);

	$posts = &query_posts($blog_query);
	if (have_posts()) {
		while (have_posts()) : the_post();
			easel_display_post();
		endwhile;
		if (easel_themeinfo('enable_comments_on_homepage') && (easel_themeinfo('home_post_count') == '1')) {
			$withcomments = true;
			comments_template('', true);
		} else 
			easel_pagination();
	}	
	UnProtect();
}

get_footer(); ?>