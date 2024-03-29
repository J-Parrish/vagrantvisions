<?php
/**
 * 
 * Author: Philip M. Hofer (Frumph)
 * Author URI: http://frumph.net/
 * Version: 1.0.8
 * 
 */

add_filter('body_class','easel_body_class');

function easel_body_class($classes = '') {
	global  $current_user, $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone, $post, $wp_query, $easel_is_signup;
	
	get_currentuserinfo();
	
	if (!empty($user_ID)) {
		$user_login = addslashes($current_user->user_login);
		if (!empty($user_login)) $classes[] = 'user-'.$user_login;
	} else {
		$classes[] = 'user-guest';
	}
	
	if (easel_is_signup()) $classes[] = 'signup';

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie';
	else $classes[] = 'unknown';
	if($is_iphone) $classes[] = 'iphone';


// Hijacked from the hybrid theme, http://themehybrid.com/
	if (is_single()) {
		foreach ( (array)get_the_category( $wp_query->post->ID ) as $cat ) :
			$classes[] = 'single-category-' . sanitize_html_class( $cat->slug, $cat->term_id );
		endforeach;
		$classes[] = 'single-author-' . get_the_author_meta( 'user_nicename', $wp_query->post->post_author );
	}

	if (is_page()) {
		if ( isset($wp_query->query_vars['pagename']) )
			$classes[] = 'page-' . $wp_query->query_vars['pagename'];
	}

	if ( is_single() && is_sticky( $post->ID ) ) {
		$classes[] = 'sticky-post';
	}

// NOT hijacked from anything, doi! people should do this.
	$rightnow = date('Gi');
	$ampm = date('a');
	$classes[] = $ampm;

	if ((int)$rightnow > 559 && (int)$rightnow < 1800) $classes[] = 'day';
	if ((int)$rightnow < 600 || (int)$rightnow > 1759) $classes[] = 'night';
	
	if ((int)$rightnow > 2329 || (int)$rightnow < 0030) $classes[] = 'midnight';
	if ((int)$rightnow > 0559 && (int)$rightnow < 1130) $classes[] = 'morning';
	if ((int)$rightnow > 1129 && (int)$rightnow < 1230) $classes[] = 'noon';
	if ((int)$rightnow > 1759 && (int)$rightnow < 2330) $classes[] = 'evening';
	
	$classes[] = strtolower(date('D'));

	if ( is_attachment() ) {
		$classes[] = 'attachment attachment-' . $wp_query->post->ID;
		$mime_type = explode( '/', get_post_mime_type() );
		foreach ( $mime_type as $type ) :
			$classes[] = 'attachment-' . $type;
		endforeach;
	}
	
	if (easel_sidebars_disabled()) $classes[] = 'wide';
	
	$layout = easel_themeinfo('layout');
	if (empty($layout)) $layout = '3c';
	$classes[] = 'layout-'.$layout;

	return $classes;
}

add_filter('post_class','easel_post_class');

function easel_post_class($classes = '') {
	global $post;
	static $post_alt;

	$args = array(
		'entry_tax' => array( 'category', 'post_tag' )
	);

	/* Microformats. */
	$classes[] = 'uentry';
	
	/* Post alt class. */
	$classes[] = 'postonpage-' . ++$post_alt;
	
	if ( $post_alt % 2 )
		$classes[] = 'odd';
	else
		$classes[] = 'even';
	
	/* Sticky class (only on home/blog page). */
	if( is_sticky() && is_home() )
		$classes[] = 'sticky';
	
	/* Author class. */
	if ( !is_attachment() )
		$classes[] = 'post-author-' . sanitize_html_class( get_the_author_meta( 'user_nicename' ), get_the_author_meta( 'ID' ) );
	
	/* User-created classes. */
	if ( !empty( $class ) ) :
		if ( !is_array( $class ) )
			$class = preg_split( '#\s+#', $class );
		$classes = array_merge( $classes, $class );
	endif;

	/* Password-protected posts. */
	if ( post_password_required() )
		$classes[] = 'protected';

	return $classes;
}

add_filter('comment_class','easel_comment_class');

function easel_comment_class($classes = '') {
	/*
	* http://microid.org
	*/
	$email = get_comment_author_email();
	$url = get_comment_author_url();
	if(!empty($email) && !empty($url)) {
		$microid = 'microid-mailto+http:sha1:' . sha1(sha1('mailto:'.$email).sha1($url));
		$classes[] = $microid;
	}
	return $classes;
}

?>