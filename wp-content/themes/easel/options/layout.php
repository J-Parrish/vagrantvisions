<script language="javascript" type="text/javascript">
	function lshowimage(sel,pic) {
	if (!document.images) return
	document.getElementById(pic).src = '<?php echo get_template_directory_uri(); ?>/images/options/'+sel.options[sel.selectedIndex].value+'.png'
	}
</script>
<script language="javascript" type="text/javascript">
	function sshowimage(sel,pic) {
	if (!document.images) return
	document.getElementById(pic).src = '<?php echo get_template_directory_uri(); ?>/images/schemes/'+sel.options[sel.selectedIndex].value+'.jpg'
	}
</script>
<div id="easel-layout">
	<form method="post" id="myForm-layout" enctype="multipart/form-data" action="?page=easel-options">
	<?php wp_nonce_field('update-options') ?>

		<div class="easel-options">

			<table class="widefat" cellspacing="0">
				<thead>
					<tr>
						<th colspan="4"><?php _e('Layout','easel'); ?></th>
					</tr>
				</thead>
				<?php if (!isset($easel_options['layout']) || empty($easel_options['layout'])) $easel_options['layout'] = '3c'; ?>
				<tr class="alternate">
					<th scope="row" style="width:250px"><label for="layout" style="text-align:left"><?php _e('Choose Your Website Layout','easel'); ?></label>
						<select name="layout" id="layout" onchange="lshowimage(this,'easellayout')">
							<option class="level-0" value="3c" <?php if ($easel_options['layout'] == '3c') { ?>selected="selected" <?php } ?>><?php _e('3 Column - Standard','easel'); ?></option>
							<option class="level-0" value="3cl" <?php if ($easel_options['layout'] == '3cl') { ?>selected="selected" <?php } ?>><?php _e('3 Column - Sidebar\'s on left','easel'); ?></option>
							<option class="level-0" value="3cr" <?php if ($easel_options['layout'] == '3cr') { ?>selected="selected" <?php } ?>><?php _e('3 Column - Sidebar\'s on right','easel'); ?></option>
							<option class="level-0" value="2cl" <?php if ($easel_options['layout'] == '2cl') { ?>selected="selected" <?php } ?>><?php _e('2 Column - Sidebar on left','easel'); ?></option>
							<option class="level-0" value="2cr" <?php if ($easel_options['layout'] == '2cr') { ?>selected="selected" <?php } ?>><?php _e('2 Column - Sidebar on right','easel'); ?></option>
						</select>
						<br />
					</th>
					<td>
						<img id="easellayout" src="<?php echo get_template_directory_uri(); ?>/images/options/<?php echo $easel_options['layout']; ?>.png" alt="Layout" />
					</td>
					<td style="vertical-align:middle">
					</td>
				</tr>
			</table>
			<br />

			<table class="widefat nolowermargin" cellspacing="0">
				<thead>
					<tr>
						<th colspan="4"><?php _e('Scheme','easel'); ?></th>
					</tr>
				</thead>
				<tr class="alternate">
					<th scope="row"><label for="disable_default_design"><?php _e('Disable default design','easel'); ?></label></th>
					<td>
						<input id="disable_default_design" name="disable_default_design" type="checkbox" value="1" <?php checked(true, $easel_options['disable_default_design']); ?> />
					</td>
					<td>
						<?php _e('Checking this option will make it so the default scheme does not load.  This makes a completely blank template with no special colors appear.','easel'); ?>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<strong><?php _e('Schemes have been removed and replaced with Child Themes. If you wish to recover the look of your site from a previous version of Easel - they are available from the developer - and soon the WordPress repository.','easel'); ?></strong>
					</td>
				</tr>
			</table>
			<br />
		</div>

		<div class="easel-options-save">
			<div class="easel-major-publishing-actions">
				<div class="easel-publishing-action">
					<input name="easel_save_layout" type="submit" class="button-primary" value="Save Settings" />
					<input type="hidden" name="action" value="easel_save_layout" />
				</div>
				<div class="clear"></div>
			</div>
		</div>

	</form>

</div>
