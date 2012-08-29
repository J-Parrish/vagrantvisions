<?php

add_action('wp_head', 'easel_facebook_comic_thumbnail');

function easel_facebook_comic_thumbnail() {
	global $post;
	if (!empty($post) && $post->post_type == 'post') {
		$post_image_id = get_post_thumbnail_id($post->ID);
		$thumbnail = wp_get_attachment_image_src( $post_image_id, 'thumbnail', false);
		if (is_array($thumbnail)) { 
			$thumbnail = reset($thumbnail);
			echo '<meta property="og:image" content="'.$thumbnail.'" />'."\r\n";	
		}	
	}	
}

if (!function_exists('easel_display_facebook_like')) {
	function easel_add_facebook_meta() { 
		global $post;
		echo '<meta property="og:url" content="'.get_permalink().'" />'."\r\n";
		echo '<meta property="og:site_name" content="'.get_bloginfo('name').'" />'."\r\n";
		echo '<meta property="og:type" content="article" />'."\r\n";
		if (is_single()) {
			echo '<meta property="og:title" content="'.get_the_title().'" />'."\r\n";
		} 
		echo '<meta property="og:description" content="'.get_bloginfo('description').'" />'."\r\n";

	}
}

if (easel_themeinfo('facebook_meta'))
	add_action('wp_head', 'easel_add_facebook_meta');

if (!function_exists('easel_display_facebook_like')) {
	function easel_display_facebook_like($content) {
		global $post, $wp_query;
		if (!is_page()) {
			$content .= '<span class="facebook-like"><fb:like layout="box_count" show_faces="false" width="45" href="'.get_permalink().'"></fb:like></span>';
		}
		return $content;
	}
}

if (easel_themeinfo('facebook_like_blog_post')) 
	add_action('the_content', 'easel_display_facebook_like');

?>