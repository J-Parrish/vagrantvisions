<?php

function comic_list_init() {
	
	$labels = array(
		'name' => __('Showcase List', 'easel'),
		'singular_name' => __('Showcase', 'easel'),
		'add_new' => __('Add New', 'easel'),
		'add_new_item' => __('Add New Showcase', 'easel'),
		'edit_item' => __('Edit Showcase','easel'),
		'edit' => __('Edit', 'easel'),
		'new_item' => __('New Showcase', 'easel'),
		'view_item' => __('View Showcase', 'easel'),
		'search_items' => __('Search Showcases','easel'),
		'not_found' =>  __('No Showcases found', 'easel'),
		'not_found_in_trash' => __('No howcases found in Trash', 'easel'), 
		'view' =>  __('View Showcase', 'easel'),
		'parent_item_colon' => ''
	);
	
	register_post_type(
		'showcase', 
		array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'_edit_link' => 'post.php?post=%d',
			'capability_type' => 'post',
			'rewrite' => array( 'slug' => 'showcase', 'with_front' => true ),
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'author', 'trackbacks', 'comments', 'thumbnail' )
	));
			
	  $labels = array(
		'name' => __( 'Genres', 'easel' ),
		'singular_name' => __( 'Genre', 'easel' ),
		'search_items' =>  __( 'Search Genres', 'easel' ),
		'popular_items' => __( 'Popular Genres', 'easel' ),
		'all_items' => __( 'All Genres', 'easel' ),
		'parent_item' => __( 'Parent Genre', 'easel'),
		'parent_item_colon' => __( 'Parent Genre:', 'easel' ),
		'edit_item' => __( 'Edit Genre', 'easel'), 
		'update_item' => __( 'Update Genre', 'easel'),
		'add_new_item' => __( 'Add New Genre', 'easel'),
		'new_item_name' => __( 'New Genre Name', 'easel' ),
	  ); 	

	  register_taxonomy('genre',array('showcase'), array(
		'hierarchical' => false,
		'public' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'genre' ),
	  ));
	
	  $labels = array(
		'name' => __( 'Styles', 'easel' ),
		'singular_name' => __( 'Style', 'easel' ),
		'search_items' =>  __( 'Search Styles', 'easel' ),
		'popular_items' => __( 'Popular Styles', 'easel' ),
		'all_items' => __( 'All Styles', 'easel' ),
		'parent_item' => __( 'Parent Style', 'easel' ),
		'parent_item_colon' => __( 'Parent Style:', 'easel' ),
		'edit_item' => __( 'Edit Style', 'easel' ), 
		'update_item' => __( 'Update Style', 'easel' ),
		'add_new_item' => __( 'Add New Style', 'easel' ),
		'new_item_name' => __( 'New Style Name', 'easel' ),
	  ); 	

	  register_taxonomy('style',array('showcase'), array(
		'hierarchical' => false,
		'public' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'style' ),
	  ));
	
	  $labels = array(
		'name' => __( 'Authors', 'easel' ),
		'singular_name' => __( 'Author', 'easel' ),
		'search_items' =>  __( 'Search Authors', 'easel' ),
		'popular_items' => __( 'Popular Authors', 'easel' ),
		'all_items' => __( 'All Authors', 'easel' ),
		'parent_item' => __( 'Parent Author', 'easel' ),
		'parent_item_colon' => __( 'Parent Author:', 'easel' ),
		'edit_item' => __( 'Edit Author', 'easel' ), 
		'update_item' => __( 'Update Author', 'easel' ),
		'add_new_item' => __( 'Add New Author', 'easel' ),
		'new_item_name' => __( 'New Author Name', 'easel' ),
	  ); 	

	  register_taxonomy('authors',array('showcase'), array(
		'hierarchical' => false,
		'public' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'authors' ),
	  ));

	  $labels = array(
		'name' => __( 'Languages', 'easel' ),
		'singular_name' => __( 'Language', 'easel' ),
		'search_items' =>  __( 'Search Languages', 'easel' ),
		'popular_items' => __( 'Popular Languages', 'easel' ),
		'all_items' => __( 'All Languages', 'easel' ),
		'parent_item' => __( 'Parent Language', 'easel' ),
		'parent_item_colon' => __( 'Parent Language:', 'easel' ),
		'edit_item' => __( 'Edit Language', 'easel' ), 
		'update_item' => __( 'Update Language', 'easel' ),
		'add_new_item' => __( 'Add New Language', 'easel' ),
		'new_item_name' => __( 'New Language', 'easel' ),
	  ); 	

	  register_taxonomy('language',array('showcase'), array(
		'hierarchical' => false,
		'public' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'language' ),
	  ));
	
	  $labels = array(
		'name' => __( 'Designers', 'easel' ),
		'singular_name' => __( 'Designer', 'easel' ),
		'search_items' =>  __( 'Search Designers', 'easel' ),
		'popular_items' => __( 'Popular Designers', 'easel' ),
		'all_items' => __( 'All Designers', 'easel' ),
		'parent_item' => __( 'Parent Designer', 'easel' ),
		'parent_item_colon' => __( 'Parent Designer:', 'easel' ),
		'edit_item' => __( 'Edit Designer', 'easel' ), 
		'update_item' => __( 'Update Designer', 'easel' ),
		'add_new_item' => __( 'Add New Designer', 'easel' ),
		'new_item_name' => __( 'New Designer Name', 'easel' ),
	  ); 	

	  register_taxonomy('designer',array('showcase'), array(
		'hierarchical' => false,
		'public' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'designer' ),
	  ));

	  $labels = array(
		'name' => __( 'CMS Used', 'easel' ),
		'singular_name' => __( 'CMS', 'easel' ),
		'search_items' =>  __( 'Search CMS\'s', 'easel' ),
		'popular_items' => __( 'Popular CMS\'s', 'easel' ),
		'all_items' => __( 'All CMS\'s', 'easel' ),
		'parent_item' => __( 'Parent CMS', 'easel' ),
		'parent_item_colon' => __( 'Parent CMS:', 'easel' ),
		'edit_item' => __( 'Edit CMS', 'easel' ), 
		'update_item' => __( 'Update CMS', 'easel' ),
		'add_new_item' => __( 'Add New CMS', 'easel' ),
		'new_item_name' => __( 'New CMS Name', 'easel' ),
	  ); 	

	  register_taxonomy('cms',array('showcase'), array(
		'hierarchical' => false,
		'public' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'cms' ),
	  ));
	
	  $labels = array(
		'name' => __( 'Twitter Names', 'easel' ),
		'singular_name' => __( 'Twitter User', 'easel' ),
		'search_items' =>  __( 'Search Twitter Users', 'easel' ),
		'popular_items' => __( 'Popular Twitter Users', 'easel' ),
		'all_items' => __( 'All Twitter Users', 'easel' ),
		'parent_item' => __( 'Parent Twitter', 'easel' ),
		'parent_item_colon' => __( 'Parent Twitter:', 'easel' ),
		'edit_item' => __( 'Edit Twitter Name', 'easel' ), 
		'update_item' => __( 'Update Twitter Name', 'easel' ),
		'add_new_item' => __( 'Add New Twitter Name', 'easel' ),
		'new_item_name' => __( 'New Twitter Name', 'easel' ),
	  ); 	

	  register_taxonomy('twitter',array('showcase'), array(
		'hierarchical' => false,
		'public' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'show_tagcloud' => true,
		'rewrite' => array( 'slug' => 'twitter' ),
	  ));

	register_taxonomy_for_object_type('genre', 'showcase');
	register_taxonomy_for_object_type('style', 'showcase');
	register_taxonomy_for_object_type('authors', 'showcase');
	register_taxonomy_for_object_type('language', 'showcase');
	register_taxonomy_for_object_type('designer', 'showcase');
	register_taxonomy_for_object_type('cms', 'showcase');
	register_taxonomy_for_object_type('twitter', 'showcase');
	if (easel_themeinfo('enable_addon_showcase_slider')) {
		wp_enqueue_script( 'slider', easel_themeinfo('themeurl') . '/js/jquery.cycle.js', array( 'jquery' ), 0.1, true );
//		wp_enqueue_style('jQuery-Slider', easel_themeinfo('themeurl') . '/js/slide.css');
	}
}

add_action('init', 'comic_list_init');

add_action('easel-post-info', 'showcase_display_post_text');

function showcase_display_post_text() {
	global $post;
	if ($post->post_type == 'showcase') {
		echo showcase_display_authors();
		echo showcase_display_showcase_link();
	}
}

add_action('easel-post-extras', 'showcase_display_post_extras');

function showcase_display_post_extras() {
	global $post;
	if ($post->post_type == 'showcase' && !is_archive() && !is_search()) {
		echo showcase_display_styles();
		echo showcase_display_genres();
		echo showcase_display_language();
		echo showcase_display_designer();
		echo showcase_display_cms();
		echo showcase_display_twitter();
	}
}

add_action('easel-post-foot', 'showcase_display_edit_link');

function showcase_display_edit_link() {
	global $post;
	if ($post->post_type == 'showcase') {
		edit_post_link(__('<br />Edit this showcase.','easel'), '', ''); 
	}
}

function showcase_display_authors() {
	global $post;
	$before = '<div class="authors">By ';
	$sep = ', '; 
	$after = '</div>';
	$output = get_the_term_list( $post->ID, 'authors', $before, $sep, $after );
	return $output;
}

function showcase_display_styles() {
	global $post;
	$before = '<div class="styles">Style: ';
	$sep = ', '; 
	$after = '</div>';
	$output = get_the_term_list( $post->ID, 'style', $before, $sep, $after );
	return $output;
}

function showcase_display_genres() {
	global $post;
	$before = '<div class="genre">Genre: ';
	$sep = ', '; 
	$after = '</div>';
	$output = get_the_term_list( $post->ID, 'genre', $before, $sep, $after );
	return $output;
}

function showcase_display_designer() {
	global $post;
	$before = '<div class="designer">Site Designed By: ';
	$sep = ', '; 
	$after = '</div>';
	$output = get_the_term_list( $post->ID, 'designer', $before, $sep, $after );
	return $output;
}

function showcase_display_cms() {
	global $post;
	$before = '<div class="cms">Site Powered By: ';
	$sep = ', '; 
	$after = '</div>';
	$output = get_the_term_list( $post->ID, 'cms', $before, $sep, $after );
	return $output;
}

function showcase_display_twitter() {
	global $post;
	$before = '<div class="twitter">Twitter: ';
	$sep = ', '; 
	$after = '</div>';
	$output = get_the_twitter_list( $post->ID, 'twitter', $before, $sep, $after );
	return $output;
}

function get_the_twitter_list( $id = 0, $taxonomy, $before = '', $sep = '', $after = '' ) {
	$terms = get_the_terms( $id, $taxonomy );

	if ( is_wp_error( $terms ) )
		return $terms;

	if ( empty( $terms ) )
		return false;

	foreach ( $terms as $term ) {
		$term_links[] = '<a href="http://www.twitter.com/'.$term->name.'">' . $term->name . '</a>';
	}

	return $before . join( $sep, $term_links ) . $after;
}

function showcase_display_language() {
	global $post;
	$before = '<div class="language">Language: ';
	$sep = ', '; 
	$after = '</div>';
	$output = get_the_term_list( $post->ID, 'language', $before, $sep, $after );
	return $output;
}

function showcase_display_showcase_link() {
	global $post;
	$showcase_link = get_post_meta( $post->ID, 'url', true );
	if (!empty($showcase_link)) {
		$output = '<div class="url">';
		$output .= 'URL: <a href="'.$showcase_link.'" target="_blank">'.$showcase_link.'</a>';
		$output .= '</div>';
		return $output;
	}
	return '';
}

function showcase_display_showcase_rsslink() {
	global $post;
	$showcase_rsslink = get_post_meta( $post->ID, 'rss', true );
	if (!empty($showcase_rsslink)) { ?>
	<div class="rsslink">
		<h4>Latest RSS Feed</h4>
		<?php wp_widget_rss_output($showcase_rsslink, array('items' => 1, 'show_summary' => true)); ?>
	</div>
	<?php
	}
}

function showcase_lastpostmodified()
{
    $lastpostmodified = wp_cache_get( "lastpostmodified:custom:server", 'timeinfo' );
    if ( $lastpostmodified ) return $lastpostmodified;
    global $wpdb;
    $add_seconds_server = date('Z');
    $lastpostmodified = $wpdb->get_var("SELECT  DATE_ADD(post_modified_gmt, INTERVAL '$add_seconds_server' SECOND) FROM $wpdb->posts WHERE post_status = 'publish' ORDER  BY post_modified_gmt DESC LIMIT 1");
    wp_cache_set( "lastpostmodified:custom:server", $lastpostmodified, 'timeinfo', 3600 );
    return $lastpostmodified;
}

add_filter('get_lastpostmodified', 'showcase_lastpostmodified');


/*
Widget Name: Latest Showcase Widget
Description: Display a list of links of the latest comics.
Author: Philip M. Hofer (Frumph)
Version: 1.03
*/
class showcase_latest_showcase_widget extends WP_Widget {
	
	function showcase_latest_showcase_widget($skip_widget_init = false) {
		if (!$skip_widget_init) {
			$widget_ops = array('classname' => __CLASS__, 'description' => __('Display a list of the latest showcase comics','easel') );
			$this->WP_Widget(__CLASS__, __('Latest Showcase','easel'), $widget_ops);
		}
	}
	
	function widget($args, $instance) {
		global $post;
		extract($args, EXTR_SKIP); 
		Protect();
		echo $before_widget;
		$title = empty($instance['title']) ? __('Latest Showcase','easel') : apply_filters('widget_title', $instance['title']); 
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; }; 
		$latestcomics = get_posts('numberposts=5&post_type=showcase'); ?>
		<ul>
		<?php foreach($latestcomics as $post) : ?>
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
register_widget('showcase_latest_showcase_widget');

add_filter('easel_display_post_calendar', 'showcase_filter_display_post_calendar');

function showcase_filter_display_post_calendar($post_calendar) {
	global $post;
	if ($post->post_type == 'showcase') $post_calendar = '';
	return $post_calendar;
}

add_filter('easel_display_post_category', 'showcase_filter_display_post_category');

function showcase_filter_display_post_category($post_category) {
	global $post;
	if ($post->post_type == 'showcase') $post_category = '';
	return $post_category;
}

if (easel_themeinfo('enable_addon_showcase_slider')) {
	add_action('easel-narrowcolumn-area','showcase_filter_display_slider');
}

function showcase_filter_display_slider() { 
	global $wp_query, $post;
	if (is_home() && !easel_is_signup() && !is_paged()) {
	Protect();
	$showcase_query = array(
				'posts_per_page' => 5,
				'post_type' => array('showcase'),
				'orderby' => 'rand'
		);
?>
		<!-- Begin feature slider. -->
		<div id="slider-container">

			<div id="slider">

				<?php $loop = new WP_Query( $showcase_query ); ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="feature">
					<?php 
						$link = get_post_meta( $post->ID, 'url', true );
						if (empty($link)) $link = get_permalink();
						echo "<div class=\"post-image\"><center><a href=\"".$link."\" rel=\"bookmark\" title=\"Link to ".get_the_title()."\">".get_the_post_thumbnail($post->ID,'full')."</a></center></div>\r\n";
					?>	
						<div class="entry-summary">
							<h2 class="slider-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
						</div>

					</div>

				<?php endwhile; ?>

			</div>

			<div class="slider-controls">
				<a class="slider-prev" title="<?php esc_attr_e( 'Previous Post', 'hybrid-news' ); ?>"><?php _e( 'Previous', 'hybrid-news' ); ?></a>
				<a class="slider-pause" title="<?php esc_attr_e( 'Pause', 'hybrid-news' ); ?>"><?php _e( 'Pause', 'hybrid-news' ); ?></a>
				<a class="slider-next" title="<?php esc_attr_e( 'Next Post', 'hybrid-news' ); ?>"><?php _e( 'Next', 'hybrid-news' ); ?></a>
			</div>

		</div>
<?php 
		UnProtect();
	}
}

function old_showcase_filter_display_slider() {
	global $wp_query, $post;
	if (is_home()) {
	Protect();
	$showcase_query = array(
				'posts_per_page' => 1,
				'post_type' => array('showcase'),
				'orderby' => 'rand'
		);
?>
<div id="slider">
	<div id="mygallery" class="stepcarousel">
		<div class="belt">
			<?php $posts = &query_posts($showcase_query); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="panel">
					<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php 
						$link = get_post_meta( $post->ID, 'url', true );
						if (empty($link)) $link = get_permalink();
						echo "<div class=\"post-image\"><center><a href=\"".$link."\" rel=\"bookmark\" title=\"Link to ".get_the_title()."\">".get_the_post_thumbnail($post->ID,'full')."</a></center></div>\r\n";
					?>
					<div class="clear"></div>
					<?php the_excerpt(); ?>
				</div>
			<?php endwhile; else: ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php
	UnProtect();
	}
}

?>
