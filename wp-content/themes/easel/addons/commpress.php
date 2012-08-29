<?php

function commpress_init() {
	
	$labels = array(
			'name' => __('Casts', 'easel'),
			'singular_name' => __('Cast', 'easel'),
			'add_new' => __('Add New', 'easel'),
			'add_new_item' => __('Add New Cast', 'easel'),
			'edit_item' => __('Edit Cast', 'easel'),
			'edit' => _x('Edit', 'casts', 'easel'),
			'new_item' => __('New Cast', 'easel'),
			'view_item' => __('View Cast', 'easel'),
			'search_items' => __('Search Casts', 'easel'),
			'not_found' =>  __('No casts found', 'easel'),
			'not_found_in_trash' => __('No casts found in Trash', 'easel'), 
			'view' =>  __('View Cast', 'easel'),
			'parent_item_colon' => ''
	);	
	
	register_post_type(
		'casts', 
		array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'_edit_link' => 'post.php?post=%d',
			'capability_type' => 'post',
			'rewrite' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'trackbacks', 'comments', 'thumbnail' )
		)
	);
	
	$labels = array(
			'name' => __( 'Tags', 'easel' ),
			'singular_name' => __( 'Tag', 'easel' ),
			'search_items' =>  __( 'Search Tags', 'easel' ),
			'popular_items' => __( 'Popular Tags', 'easel' ),
			'all_items' => __( 'All Tags', 'easel' ),
			'parent_item' => __( 'Parent Tag', 'easel' ),
			'parent_item_colon' => __( 'Parent Tag:', 'easel' ),
			'edit_item' => __( 'Edit Tag', 'easel' ), 
			'update_item' => __( 'Update Tag', 'easel' ),
			'add_new_item' => __( 'Add New Tag', 'easel' ),
			'new_item_name' => __( 'New Tag Name', 'easel' ),
	); 	

	register_taxonomy('cast-tag',array('casts'), array(
		'hierarchical' => false,
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'cast-tag' ),
	));

	$labels = array(
			'name' => __( 'Guests', 'easel' ),
			'singular_name' => __( 'Guest', 'easel' ),
			'search_items' =>  __( 'Search Guests', 'easel' ),
			'popular_items' => __( 'Popular Guests', 'easel' ),
			'all_items' => __( 'All Guests', 'easel' ),
			'parent_item' => __( 'Parent Guest', 'easel' ),
			'parent_item_colon' => __( 'Parent Guest:', 'easel' ),
			'edit_item' => __( 'Edit Guest', 'easel' ), 
			'update_item' => __( 'Update Guest', 'easel' ),
			'add_new_item' => __( 'Add New Guest', 'easel' ),
			'new_item_name' => __( 'New Guest Name', 'easel' ),
	); 	

	register_taxonomy('cast-guest',array('casts'), array(
		'hierarchical' => false,
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'cast-guest' ),
	));
	
	$labels = array(
			'name' => __( 'Audience', 'easel' ),
			'singular_name' => __( 'Audience', 'easel' ),
			'search_items' =>  __( 'Search Audience', 'easel' ),
			'popular_items' => __( 'Popular Audience', 'easel' ),
			'all_items' => __( 'All Audience', 'easel' ),
			'parent_item' => __( 'Parent Audience', 'easel' ),
			'parent_item_colon' => __( 'Parent Audience:', 'easel' ),
			'edit_item' => __( 'Edit Audience', 'easel' ), 
			'update_item' => __( 'Update Audience', 'easel' ),
			'add_new_item' => __( 'Add New Audience', 'easel' ),
			'new_item_name' => __( 'New Audience Name', 'easel' ),
	); 	

	register_taxonomy('cast-audience',array('casts'), array(
		'hierarchical' => false,
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'cast-audience' ),
	));
	
	$labels = array(
			'name' => __( 'Hosts', 'easel' ),
			'singular_name' => __( 'Host', 'easel' ),
			'search_items' =>  __( 'Search Hosts', 'easel' ),
			'popular_items' => __( 'Popular Host', 'easel' ),
			'all_items' => __( 'All Hosts', 'easel' ),
			'parent_item' => __( 'Parent Host', 'easel' ),
			'parent_item_colon' => __( 'Parent Host:', 'easel' ),
			'edit_item' => __( 'Edit Host', 'easel' ), 
			'update_item' => __( 'Update Host', 'easel' ),
			'add_new_item' => __( 'Add New Host', 'easel' ),
			'new_item_name' => __( 'New Host Name', 'easel' ),
	); 	

	register_taxonomy('cast-host',array('casts'), array(
		'hierarchical' => false,
		'public' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'host' ),
	));

	$labels = array(
			'name' => __( 'Show', 'easel' ),
			'singular_name' => __( 'Show', 'easel' ),
			'search_items' =>  __( 'Search Shows', 'easel' ),
			'popular_items' => __( 'Popular Shows', 'easel' ),
			'all_items' => __( 'All Shows', 'easel' ),
			'parent_item' => __( 'Parent Show', 'easel' ),
			'parent_item_colon' => __( 'Parent Show:', 'easel' ),
			'edit_item' => __( 'Edit Show', 'easel' ), 
			'update_item' => __( 'Update Show', 'easel' ),
			'add_new_item' => __( 'Add New Show', 'easel' ),
			'new_item_name' => __( 'New Show Name', 'easel' ),
	); 	

	register_taxonomy('cast-show',array('casts'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'cast-show' ),
	));

	register_taxonomy_for_object_type('cast-host', 'casts');
	register_taxonomy_for_object_type('cast-guest', 'casts');
	register_taxonomy_for_object_type('cast-tag', 'casts');
	register_taxonomy_for_object_type('cast-audience', 'casts');
	register_taxonomy_for_object_type('cast-show', 'casts');

}

add_action('init', 'commpress_init');

add_action('easel-post-info', 'commpress_display_hosts');

if (!function_exists('commpress_display_hosts')) {
	function commpress_display_hosts() {
		global $post;
		if ($post->post_type == 'casts') {
			$before = '<div class="casts-hosts">With Host(s): ';
			$sep = ', '; 
			$after = '</div>';
			$output = get_the_term_list( $post->ID, 'cast-host', $before, $sep, $after );
			if (!empty($output)) echo $output;
		}
	}
}

add_action('easel-post-info', 'commpress_display_guests');

if (!function_exists('commpress_display_guests')) {
	function commpress_display_guests() {
		global $post;
		if ($post->post_type == 'casts') {
			$before = '<div class="casts-guests">With Guest(s): ';
			$sep = ', '; 
			$after = '</div>';
			$output = get_the_term_list( $post->ID, 'cast-guest', $before, $sep, $after );
			if (!empty($output)) echo $output;
		}
	}
}

add_action('easel-post-extras', 'commpress_display_audience');

if (!function_exists('commpress_display_audience')) {
	function commpress_display_audience() {
		global $post;
		if ($post->post_type == 'casts') {
			$before = '<div class="casts-audience">Audience: ';
			$sep = ', '; 
			$after = '</div>';
			$output = get_the_term_list( $post->ID, 'cast-audience', $before, $sep, $after );
			if (!empty($output)) echo $output;
		}
	}
}

// Injections

add_filter('easel_display_post_category', 'commpress_display_cast_show');

// TODO: Make this actually output a chapter set that the comic is in, instead of the post-type
function commpress_display_cast_show($post_show) {
	global $post;
	if ($post->post_type == 'casts') {
		$before = '<div class="casts-show"> ';
		$sep = ', '; 
		$after = '</div>';
		$post_show = get_the_term_list( $post->ID, 'cast-show', $before, $sep, $after );
	}
	return $post_show;
}

add_action('easel-post-extras', 'commpress_display_cast_tags');

if (!function_exists('commpress_display_cast_tags')) {
	function commpress_display_cast_tags() {
		global $post;
		if ($post->post_type == 'casts') {
			$before = '<div class="cast-tags">'.__('&#9492; Tags: ','easel');
			$sep = ","; 
			$after = '</div>';
			$output = get_the_term_list( $post->ID, 'cast-tag', $before, $sep, $after );
			if (!empty($output)) echo $output;
		}
	}
}

add_action('easel-narrowcolumn-area', 'commpress_display_cast');

function commpress_display_cast() {
	global $wp_query, $post;
	if (!is_paged() && is_home()) { 
		Protect();
		$cast_args = array(
				'posts_per_page' => 1,
				'post_type' => 'casts'
				);
		$wp_query->in_the_loop = true; $castFrontpage = new WP_Query(); $castFrontpage->query($cast_args);
		while ($castFrontpage->have_posts()) : $castFrontpage->the_post();
			easel_display_post();
		endwhile;
		UnProtect();
	}
}

// Navigation

function easel_commpress_get_first_cast() {
	return easel_commpress_get_terminal_post_of_casts(true);
}

function easel_commpress_get_first_cast_permalink() {
	$terminal = easel_commpress_get_first_cast();
	return !empty($terminal) ? get_permalink($terminal->ID) : false;
}

function easel_commpress_get_last_cast() {
	return easel_commpress_get_terminal_post_of_casts(false);
}

function easel_commpress_get_last_cast_permalink() {
	$terminal = easel_commpress_get_last_cast();
	return !empty($terminal) ? get_permalink($terminal->ID) : false;
}

function easel_commpress_get_previous_cast() {
	return easel_get_adjacent_post_type(true, 'casts');
}

function easel_commpress_get_previous_cast_permalink() {
	$prev_cast = easel_commpress_get_previous_cast();
	
	if (is_object($prev_cast)) {
		if (isset($prev_cast->ID)) {
			return get_permalink($prev_cast->ID);
		}
	}
	return false;
}

function easel_commpress_get_next_cast() {
	return easel_get_adjacent_post_type(false, 'casts');
}

function easel_commpress_get_next_cast_permalink() {
	$next_cast = easel_commpress_get_next_cast();
	if (is_object($next_cast)) {
		if (isset($next_cast->ID)) {
			return get_permalink($next_cast->ID);
		}
	}
	return false;
}

function easel_commpress_get_terminal_post_of_casts($first = true) {
	
	$sortOrder = $first ? "asc" : "desc";	
	
	$args = array(
		'order' => $sortOrder,
		'posts_per_page' => 1,
		'post_type' => 'casts'
		);

	$terminalComicQuery = new WP_Query($args);
	
	$terminalPost = false;
	if ($terminalComicQuery->have_posts()) {
		$terminalPost = reset($terminalComicQuery->posts);
	}
	return $terminalPost;
}

add_action('easel-post-foot', 'easel_commpress_display_navigation');

if (!function_exists('easel_commpress_display_navigation')) {
	function easel_commpress_display_navigation() {
		global $post, $wp_query;
		if ($post->post_type == 'casts' && !is_archive() && !is_search()) {
			$first_cast = easel_commpress_get_first_cast_permalink();
			$first_text = __('&lsaquo;&lsaquo; First','easel');
			$last_cast = easel_commpress_get_last_cast_permalink();
			$last_text = __('Last &rsaquo;&rsaquo;','easel'); 
			$next_cast = easel_commpress_get_next_cast_permalink();
			$next_text = __('Next &rsaquo;','easel');
			$prev_cast = easel_commpress_get_previous_cast_permalink();
			$prev_text = __('&lsaquo; Prev','easel');
			?>
			<div id="casts-nav-wrapper">
				<div class="casts-nav">
					<div class="casts-nav-base casts-nav-first"><?php if ( get_permalink() != $first_cast ) { ?><a href="<?php echo $first_cast ?>"><?php echo $first_text; ?></a><?php } else { echo $first_text; } ?></div>
					<div class="casts-nav-base casts-nav-previous"><?php if ($prev_cast) { ?><a href="<?php echo $prev_cast ?>"><?php echo $prev_text; ?></a><?php } else { echo $prev_text; } ?></div>
					<div class="casts-nav-base casts-nav-last"><?php if ( get_permalink() != $last_cast ) { ?><a href="<?php echo $last_cast ?>"><?php echo $last_text; ?></a><?php } else { echo $last_text; } ?></div>
					<div class="casts-nav-base casts-nav-next"><?php if ($next_cast) { ?><a href="<?php echo $next_cast ?>"><?php echo $next_text; ?></a><?php } else { echo $next_text; } ?></div>					
				<div class="clear"></div>
				</div>
			</div>
			<?php
		}
	}
}

add_action('easel-post-foot', 'commpress_display_edit_link');
	
function commpress_display_edit_link() {
	global $post;
	if ($post->post_type == 'casts') {
		edit_post_link(__('<br />Edit Cast','comiceasel'), '', ''); 
	}
}

// Widgets

class easel_latest_casts_widget extends WP_Widget {
	
	function easel_latest_casts_widget($skip_widget_init = false) {
		if (!$skip_widget_init) {
			$widget_ops = array('classname' => __CLASS__, 'description' => __('Display a list of the latest Media Casts','easel') );
			$this->WP_Widget(__CLASS__, __('Latest Media Casts','easel'), $widget_ops);
		}
	}
	
	function widget($args, $instance) {
		global $post;
		extract($args, EXTR_SKIP); 
		Protect();
		echo $before_widget;
		$title = empty($instance['title']) ? __('Latest Media Cast','easel') : apply_filters('widget_title', $instance['title']); 
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; }; 
		$latestmusic = get_posts('numberposts=5&post_type=casts'); ?>
		<ul>
		<?php foreach($latestmusic as $post) : ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
		<?php
		UnProtect();
		echo $after_widget;
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}
	
	function form($instance) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$title = strip_tags($instance['title']);
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','easel'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
		<?php
	}
}
register_widget('easel_latest_casts_widget');

?>