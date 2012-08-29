<?php

function playingnow_init() {
	
	$labels = array(
		'name' => __('Music List', 'easel'),
		'singular_name' => __('Music', 'easel'),
		'add_new' => __('Add New', 'easel'),
		'add_new_item' => __('Add New Music', 'easel'),
		'edit_item' => __('Edit Music', 'easel'),
		'edit' => __('Edit', 'easel'),
		'new_item' => __('New Music', 'easel'),
		'view_item' => __('View Music', 'easel'),
		'search_items' => __('Search Music', 'easel'),
		'not_found' =>  __('No Music found', 'easel'),
		'not_found_in_trash' => __('No Music found in Trash', 'easel'), 
		'view' =>  __('View Music', 'easel'),
		'parent_item_colon' => ''
	);
	
	register_post_type(
		'music', 
		array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'rewrite' => true,
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'author', 'trackbacks', 'comments', 'thumbnail' )
	));
			
	  $labels = array(
			'name' => __( 'Group', 'easel' ),
			'singular_name' => __( 'Group', 'easel' ),
			'search_items' =>  __( 'Search Groups', 'easel' ),
			'popular_items' => __( 'Popular Groups', 'easel' ),
			'all_items' => __( 'All Groups', 'easel' ),
			'parent_item' => __( 'Parent Group', 'easel' ),
			'parent_item_colon' => __( 'Parent Group:', 'easel' ),
			'edit_item' => __( 'Edit Group', 'easel' ), 
			'update_item' => __( 'Update Group', 'easel' ),
			'add_new_item' => __( 'Add New Group', 'easel' ),
			'new_item_name' => __( 'New Group Name', 'easel' ),
	  ); 	

	  register_taxonomy('group',array('music'), array(
		'hierarchical' => false,
		'public' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'group' ),
	  ));
	

	register_taxonomy_for_object_type('group', 'music');
}

add_action('init', 'playingnow_init');


add_action('easel-post-info', 'playingnow_display_post_text');

function playingnow_display_post_text() {
	global $post;
	if ($post->post_type == 'music') {
		echo playingnow_display_group();
	}
}

add_action('easel-post-foot', 'playingnow_display_edit_link');

function playingnow_display_edit_link() {
	global $post;
	if ($post->post_type == 'music') {
		edit_post_link(__('<br />Edit this Music.','easel'), '', ''); 
	}
}

function playingnow_display_group() {
	global $post;
	$before = '<div class="group">Artist/Group: ';
	$sep = ', '; 
	$after = '</div>';
	$output = get_the_term_list( $post->ID, 'group', $before, $sep, $after );
	return $output;
}

class latest_playingnow_widget extends WP_Widget {
	
	function latest_playingnow_widget($skip_widget_init = false) {
		if (!$skip_widget_init) {
			$widget_ops = array('classname' => __CLASS__, 'description' => __('Display a list of the latest showcase comics','easel') );
			$this->WP_Widget(__CLASS__, __('Latest Music','easel'), $widget_ops);
		}
	}
	
	function widget($args, $instance) {
		global $post;
		extract($args, EXTR_SKIP); 
		Protect();
		echo $before_widget;
		$title = empty($instance['title']) ? __('Latest Music','easel') : apply_filters('widget_title', $instance['title']); 
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; }; 
		$latestmusic = get_posts('numberposts=5&post_type=music'); ?>
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
register_widget('latest_playingnow_widget');

add_filter('easel_display_post_category', 'playingnow_filter_display_post_category');

function playingnow_filter_display_post_category($post_category) {
	global $post;
	if ($post->post_type == 'music') $post_category = '';
	return $post_category;
}

?>