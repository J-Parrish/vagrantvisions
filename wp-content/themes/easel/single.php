<?php 
get_header();

if (is_active_sidebar('blog')) get_sidebar('blog');

if (have_posts()) {

	while (have_posts()) : the_post();
		easel_display_post();	
	endwhile;
	
} else { ?>

	<div <?php post_class(); ?>>
		<div class="post-head"></div>
		<div class="post">
			<p><?php _e('Sorry, post is not found.','easel'); ?></p>
			<div class="clear"></div>
		</div>
		<div class="post-foot"></div>
	</div>
	<?php
}

get_footer();
?>