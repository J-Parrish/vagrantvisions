<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<?php if (!easel_themeinfo('disable_default_design')) { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-default.css" type="text/css" media="screen" />
<?php } ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<meta name="Easel" content="<?php echo easel_themeinfo('version'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Project Wonderful Ad Box Loader -->
<!-- Put this after the <body> tag at the top of your page -->
<script type="text/javascript">
   (function(){function pw_load(){
      if(arguments.callee.z)return;else arguments.callee.z=true;
      var d=document;var s=d.createElement('script');
      var x=d.getElementsByTagName('script')[0];
      s.type='text/javascript';s.async=true;
      s.src='//www.projectwonderful.com/pwa.js';
      x.parentNode.insertBefore(s,x);}
   if (window.attachEvent){
    window.attachEvent('DOMContentLoaded',pw_load);
    window.attachEvent('onload',pw_load);}
   else{
    window.addEventListener('DOMContentLoaded',pw_load,false);
    window.addEventListener('load',pw_load,false);}})();
</script>
<!-- End Project Wonderful Ad Box Loader -->
<div id="page-head"><?php do_action('easel-page-head'); ?></div>
<div id="page-wrap">
	<div id="page">
		<?php easel_get_sidebar('above-header'); ?>
		<div id="header">
			<div class="header-info">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
				<div class="description"><?php bloginfo('description') ?></div>
			</div>
			<?php easel_get_sidebar('header'); ?>
			<div class="clear"></div>
		</div>

<?php 
if (!easel_themeinfo('disable_default_menubar') && function_exists('easel_menubar')) easel_menubar();
if (easel_themeinfo('enable_breadcrumbs')) easel_breadcrumbs();
easel_get_sidebar('menubar');
get_template_part('layout', 'head');
?>