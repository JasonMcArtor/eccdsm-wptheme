<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="Evangelical Covenant Church, Pleasant Hill, Iowa" />

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/print.css" rel="stylesheet" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="shortcut icon" href="/favicon.ico" />
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.innerfade.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/theme.js"></script>
</head>

<body>


<!--WRAPPER-->
<div id="main">


<div id="print-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/global/ECC-Logo.png" alt="ECC Logo" /></div>


<!--HEADER-->
<div id="header">

<h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

<ul id="menu">
<?php wp_list_pages('depth=1&title_li=&exclude=4'); ?>
</ul>

<div class="clear"></div>
</div>
<!--/HEADER-->

