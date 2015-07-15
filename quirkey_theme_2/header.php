<?php global $is_home; ?>
<?php $is_home = false; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
		
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/quirkey_theme.css" type="text/css" media="screen" charset="utf-8"true>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/quirkey.css" type="text/css" media="screen" charset="utf-8"true>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mate.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="http://code.quirkey.com/stylesheets/syntax.css" type="text/css" media="screen" />
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/quirkey" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	
</head>

<body>
	<div id="container">
		<div id="header_holder">
			<div id="header">
				<div id="logo" class="quirkey_nav_open"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Logo"/></a></div>
				<h1>Quirkey<a href="<?php echo get_settings('home'); ?>/" class="q_blog">Blog</a><span class="description">Est. 2005</span></h1>
			</div>
		</div>
		<div id="main">
