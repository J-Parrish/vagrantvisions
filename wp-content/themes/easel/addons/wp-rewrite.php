<?php

$permalink_structure = get_option('permalink_structure');

add_action( 'generate_rewrite_rules', 'easel_rewrite_rules' );

/*
if (is_admin() && ($pagenow == 'options-permalink.php') && ($permalink_structure !== '') ) {	
	add_action( 'admin_notices', 'easel_permalink_rewrite_info' );
}
*/

if (!is_admin() && ($permalink_structure !== '')) {
	add_action( 'parse_query', 'easel_parse_query', 100 );
}


function easel_is_post_type($post_type) {
	if ( is_array($post_type) )	{	// multiple post types 
		$post_type = array_diff($post_type, array('post'));
		if ( count($post_type) > 1 )	// not a custom post type archive
			return false;
		// $post_type = reset($post_type);
	}
	if ( !is_string($post_type) )
		return;
	if ($post_type == 'post') return;
	$post_type = get_post_type_object( $post_type );
	if ( !is_null( $post_type ) && ($post_type->public == true) ) 
		return $post_type;		
	return false;
}

function easel_is_custom_post_type_archive( $post_type = '' ) {
	global $wp_query;
	
	if ( !isset($wp_query->is_custom_post_type_archive) || !$wp_query->is_custom_post_type_archive ) 
		return false;
	
	if ( empty($post_type) || $post_type == get_query_var('post_type') )
		return true;
		
	return false;
}

function easel_permalink_rewrite_info() { ?>
	<div class="error">
		<h4><?php _e('Easel - Rewrite Rules Updated!','easel'); ?></h4>
	</div>
<?php }

function easel_rewrite_rules( $wp_rewrite ) {
	$args = array(
			'public' => true,
			'_builtin' => false
			);
	$output = 'names';
	$operator = 'and';
	
	$post_types = get_post_types( $args , $output , $operator );
	$feed = get_default_feed();

	foreach ( $post_types as $ptype ) :
		$this_type = get_post_type_object( $ptype );
		$type_slug = $this_type->rewrite['slug'];
		if (!empty($type_slug)) {
			$new_rules = array( 
					$type_slug.'/([0-9]+)/([0-9]{1,2})/([0-9]{1,2})/?$' => 'index.php?post_type='.$ptype.'&year=' . $wp_rewrite->preg_index(1) . '&monthnum=' . $wp_rewrite->preg_index(2) . '&day=' . $wp_rewrite->preg_index(3),
					$type_slug.'/([0-9]+)/([0-9]{1,2})/?$' => 'index.php?post_type='.$ptype.'&year=' . $wp_rewrite->preg_index(1) . '&monthnum=' . $wp_rewrite->preg_index(2),
					$type_slug.'/([0-9]+/?$)' => 'index.php?post_type='.$ptype.'&year=' . $wp_rewrite->preg_index(1),
					$type_slug.'/page/?([0-9]{1,})/?$' => 'index.php?post_type='.$ptype.'&paged='.$wp_rewrite->preg_index(1),
					$type_slug.'/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type='.$ptype.'&feed='.$wp_rewrite->preg_index(1),
					$type_slug.'/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type='.$ptype.'&feed='.$wp_rewrite->preg_index(1),
					$type_slug.'/?$' => 'index.php?post_type='.$ptype,
					);
			
			$wp_rewrite->rules = array_merge($new_rules, $wp_rewrite->rules);
		}
		endforeach;
}

function easel_parse_query( $wp_query ) {
	if ( !isset($wp_query->query_vars['post_type']) )
		return;
	
	$post_type = $wp_query->query_vars['post_type'];
	if (!empty($post_type)) {
		if ( get_query_var('name') || !easel_is_post_type($post_type) || is_robots() || is_feed() || is_trackback() )
			return;
		
		$wp_query->is_home = false;	// correct is_home variable
		$wp_query->is_archive = true;
		$wp_query->is_custom_post_type_archive = true; // define new query variable
	}
}

?>