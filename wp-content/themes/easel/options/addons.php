<div id="easel-addons">
	<form method="post" id="myForm-general" enctype="multipart/form-data" action="?page=easel-options">
	<?php wp_nonce_field('update-options') ?>
		<div class="easel-options">

			<table class="widefat">
				<thead>
					<tr>
						<th colspan="3"><?php _e('Addons','easel'); ?></th>
					</tr>
				</thead>
				<?php if (!isset($easel_options['non_members_message'])) $easel_options['non_members_message'] = __('There is members only content here.', 'easel'); ?>
				<tr class="alternate">
					<th scope="row"><label for="enable_addon_membersonly"><?php _e('Members Only','easel'); ?></label><br /><label for="non_members_message"><?php _e('Message to give to non-members.','easel'); ?></label></th>
					<td>
						<input id="enable_addon_membersonly" name="enable_addon_membersonly" type="checkbox" value="1" <?php checked(true, $easel_options['enable_addon_membersonly']); ?> />
					</td>
					<td>
						<?php _e('Enabled the members only shortcode [members]content[/members] - you can configure who is a member in the user editor.  Those with access will be able to see the content.','easel'); ?><br />
						<br />
						<input id="non_members_message" name="non_members_message" size="100" type="text" value="<?php echo stripcslashes($easel_options['non_members_message']); ?>" />
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="enable_addon_page_options"><?php _e('Additional Page Options','easel'); ?></label></th>
					<td>
						<input id="enable_addon_page_options" name="enable_addon_page_options" type="checkbox" value="1" <?php checked(true, $easel_options['enable_addon_page_options']); ?> />
					</td>
					<td>
						<?php _e('Extra options for the page-editor which include removal of sidebars for display.','easel'); ?>
					</td>
				</tr>
				<tr class="alternate">
					<th scope="row"><label for="enable_addon_playingnow"><?php _e('Playing Now','easel'); ?></label></th>
					<td>
						<input id="enable_addon_playingnow" name="enable_addon_playingnow" type="checkbox" value="1" <?php checked(true, $easel_options['enable_addon_playingnow']); ?> />
					</td>
					<td>
						<?php _e('The "Music" post type, this post type allows you to seperate music selections and post about music/bands seperate from regular posts; includes a [latest music] widget that lists off the latest posts in the music post type.','easel'); ?>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="enable_addon_showcase"><?php _e('Comic Showcase','easel'); ?></label></th>
					<td>
						<input id="enable_addon_showcase" name="enable_addon_showcase" type="checkbox" value="1" <?php checked(true, $easel_options['enable_addon_showcase']); ?> />
					</td>
					<td>
						<?php _e('The "Showcase" post type, this post type is specifically for creating posts that are relevant to comics, and showcasing which comics you read and who makes them and what type of comic they are.  Includes a [latest showcase] widget that lists off the latest posts in the showcase post type.','easel'); ?>
					</td>
				</tr>
				<?php if ($easel_options['enable_addon_showcase']) { ?>
				<tr class="alternate">
					<th scope="row"><label for="enable_addon_showcase_slider"><?php _e('Comic Showcase Slider','easel'); ?></label></th>
					<td>
						<input id="enable_addon_showcase_slider" name="enable_addon_showcase_slider" type="checkbox" value="1" <?php checked(true, $easel_options['enable_addon_showcase_slider']); ?> />
					</td>
					<td>
						<?php _e('Enable a slider on the homepage of a random set of Showcases.','easel'); ?>
					</td>
				</tr>
				<?php } ?>
				<tr>
					<th scope="row"><label for="enable_addon_commpress"><?php _e('CommPress - Casts','easel'); ?></label></th>
					<td>
						<input id="enable_addon_commpress" name="enable_addon_commpress" type="checkbox" value="1" <?php checked(true, $easel_options['enable_addon_commpress']); ?> />
					</td>
					<td>
						<?php _e('The CommPress MediaCast post type, displays podcast/mediacast posts in a navigational box right above the blog loop that stays static.','easel'); ?>
						<h4><?php _e('Recommended Plugins','easel'); ?></h4>
							<ol>
								<li><a href="http://wordpress.org/extend/plugins/vipers-video-quicktags/">Viper's Video Quicktags</a> by <a href="http://www.viper007bond.com/wordpress-plugins/vipers-video-quicktags/">Viper007bond</a></li>
								<li><a href="http://wordpress.org/extend/plugins/audio-player/">Audio Player</a> by <a href="http://wpaudioplayer.com/">Martin Laine</a></li>
								<li><a href="http://wordpress.org/extend/plugins/comicpress-companion/">Theme Companion</a> by <a href="http://frumph.net">Philip M. Hofer (Frumph)</a></li>
							</ol>
					</td>
				</tr>
			</table>
<!--
			<table class="widefat">
				<thead>
					<tr>
						<th colspan="3"><?php _e('Custom Post Types','easel'); ?></th>
					</tr>
				</thead>
				<tr class="alternate">
					<?php if (!isset($easel_options['enable_wprewrite_posttype_control'])) $easel_options['enable_wprewrite_posttype_control'] = false; ?>
					<th scope="row"><label for="enable_wprewrite_posttype_control"><?php _e('WP Rewrite Control','easel'); ?></label></th>
					<td>
						<input id="enable_wprewrite_posttype_control" name="enable_wprewrite_posttype_control" type="checkbox" value="1" <?php checked(true, $easel_options['enable_wprewrite_posttype_control']); ?> />
					</td>
					<td>
						<?php _e('When enabled, Easel will create additional wp-rewrite rules for all of the custom post types that it finds enabled, including plugin based ones.   To initiate the rewrite rules go to the settings -> permalinks screen.  This will only work if you have custom permalinks enabled.','easel'); ?>
					</td>
				</tr>
				<tr style="background: #fcffc7">
					<td scope="row" colspan="3">
						<?php _e('Remember with custom post types, you will need to go to settings -> permalinks and click "save" to enable them to work properly and reinitilize the permalink structure regardless of using the additional wp-rewrite rules option.','easel'); ?>
					</td>
				</tr>
			</table>
// -->
		</div>

		<div class="easel-options-save">
			<div class="easel-major-publishing-actions">
				<div class="easel-publishing-action">
					<input name="easel_save_addons" type="submit" class="button-primary" value="Save Settings" />
					<input type="hidden" name="action" value="easel_save_addons" />
				</div>
				<div class="clear"></div>
			</div>
		</div>

	</form>

</div>

