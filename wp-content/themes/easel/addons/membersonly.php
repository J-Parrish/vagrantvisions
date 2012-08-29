<?php
/**
 * Members Only
 * by Philip M. Hofer (Frumph)
 * http://frumph.net/
 * 
 * Displays content that only registered users that are marked members can see.
 * 
 * example:  [members]Only members can read this.[/members]
 * 
 * 
 */

add_shortcode( 'members', 'shortcode_for_easel_members_only' );
add_shortcode( 'member', 'shortcode_for_easel_members_only' );
add_action( 'edit_user_profile' , 'easel_profile_members_only' );
add_action( 'show_user_profile' , 'easel_profile_members_only' );
add_action( 'personal_options_update', 'easel_profile_members_only_save' );
add_action( 'edit_user_profile_update', 'easel_profile_members_only_save' );

function shortcode_for_easel_members_only( $atts, $content = null ) {
	global $post;
	$this_ID = get_current_user_id();
	$returninfo = '<div class="non-members-post"><p>'.easel_themeinfo('non_members_message').'</p></div>';
	if ( !empty($this_ID) && !empty($content) ) {
		$is_member = get_user_meta($this_ID, 'easel-is-member', true);
		if ($is_member || current_user_can('manage_options')) {
//			$content = str_replace('<p>', '', $content);
//			$content = str_replace('</p>', '', $content);
			$returninfo = "<div class=\"members-post\">$content</div>\r\n";
		}
	}
	return $returninfo;
}

function easel_profile_members_only() { 
	global $profileuser, $errormsg;
	$easel_is_member = get_user_meta($profileuser->ID,'easel-is-member', true);
	if (empty($easel_is_member)) $easel_is_member = 0;
	$site_name = get_option('blogname');
	if (is_multisite()) {
		$current_site = get_current_site();
		if (!isset($current_site->site_name)) {
			$site_name = ucfirst( $current_site->domain );
		} else {
			$site_name = $current_site->site_name;
		}
	}
	?>
	<div style="border: solid 1px #aaa; background: #eee; padding: 0 10px 10px;">
	<h3><?php _e('Member of','easel'); ?> <?php echo $site_name; ?></h3>
	<table class="form-table">
	<tr>
		<th><label for="Memberflag"><?php _e('Member?','easel'); ?></label></th>
		<td> 
	<?php 
	if (current_user_can('edit_users') || is_super_admin()) { ?>
			<input id="easel-is-member" name="easel-is-member" type="checkbox" value="1" <?php checked(true, $easel_is_member); ?> />		
	<?php } else {
		if ($easel_is_member) { 
			echo 'Is Member';
		} else {
			echo 'Not a Member';
		}
	}
	?>
		</td>
	</tr>
	</table>
	</div>
	<br />
	<br />
<?php }

function easel_profile_members_only_save($this_id) {
	if (current_user_can('edit_users', $this_id)) {
		if (isset($_POST['easel-is-member'])) {
			$easel_is_member = (bool)($_POST['easel-is-member'] == 1 ? 1 : 0 );
		} else {
			$easel_is_member = 0;
		}
		update_user_meta($this_id, 'easel-is-member', $easel_is_member);
	}
}

function easel_is_member() {
	if (is_super_admin()) return true;
	$this_ID = get_current_user_id();
	if (!empty($this_ID)) {
		$is_member = get_user_meta($this_ID, 'easel-is-member', true);
		if (empty($is_member)) $is_member = false;
		if ($is_member || current_user_can('manage_options')) {
			return true;
		}
	}
	return false;
}

add_filter('body_class','easel_members_only_body_class');

function easel_members_only_body_class($classes = array()) {
	$this_ID = get_current_user_id();
	if (!empty($this_ID)) {
		$is_member = get_user_meta($this_ID, 'easel-is-member', true);
		if ($is_member) {
			$classes[] = 'member';
		} else {
			$classes[] = 'non-member';
		}
	} else 
		$classes[] = 'non-member';
	return $classes;
}

