<?php get_header(); ?>
	
<div class="post type-page post-404">
	<div class="post-head"></div>
	<div class="post-content">
		<h2 class="page-title"><?php _e('Page Not Found','easel'); ?></h2>
		<div class="entry">
			<p><a href="<?php echo site_url(); ?>"><?php _e('Click here to return to the home page','easel'); ?></a> <?php _e('or try a search:','easel'); ?></p>
			<p><?php get_search_form(); ?></p>
		</div>
	</div>
	<div class="post-foot"></div>
</div>

<?php get_footer(); ?>