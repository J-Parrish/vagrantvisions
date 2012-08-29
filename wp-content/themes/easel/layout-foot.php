			<?php if (!easel_sidebars_disabled()) easel_get_sidebar('under-blog'); ?>
		</div>
		<div id="column-foot"></div>
<?php 
if (!easel_is_signup() && !easel_sidebars_disabled()) {
	if (easel_is_layout('3cl,3cr')) get_sidebar('left');
	if (easel_is_layout('2cr,3c,3cr')) get_sidebar('right');
}
?>
		<div class="clear"></div>
	</div>
	<div id="subcontent-wrapper-foot"><?php do_action('easel-subcontent-wrapper-foot'); ?></div>
</div>
<div id="content-wrapper-foot"><?php do_action('easel-content-wrapper-foot'); ?></div>
