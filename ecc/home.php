<?php
/*
Template Name: Home
*/

/*another change*/
get_header(); ?>

<!--FEATURES-->
<div id="featureContainer">

	<div id="features">
	<div id="featuredSlides">
	<?php

	// Retrieve all the pages

	$pages = get_posts(array('post_type' => 'page', 'numberposts' => -1));

	// Output the post thumbnail for each page

	foreach ($pages as $post) {
		setup_postdata($post);
	
		$featured = get_post_meta(get_the_ID(), 'featured', true);
		if ($featured !== 'yes')
			continue;
	?>

	<div class="slide">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<?php
	}

	?>

	</div>
	<?php

	// Retrieve the latest podcast post

	$podcasts = get_posts(array(
		'numberposts' => 1,
		'category_name' => 'Podcast',
		'orderby' => 'date',
		'order' => 'DESC',
	));

	$post = array_pop($podcasts);
	setup_postdata($post);

	?>

    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <div class="clear"></div>
    </div>
    
    <!--FEATURE BUTTONS-->
	<ul id="featuredBtns">
		<li><a href="/about/what-to-expect/">I&#8217;m New Here</a></li>
    	<li><a href="/contact/" class="two">Location &amp; Services</a></li>
  	  <li class="last"><a href="/connect/" class="three">Get Connected</a></li>
	</ul>
	<!--/FEATURE BUTTONS-->

<div class="clear"></div>
</div>
<!--/FEATURES-->

<!--CONTENT CONTAINER-->
<div id="contentContainer">



<!--CONTENT-->
<div id="content">

	<?php

	// Grab the content for this (the home page) and display it before the post list

	$topContent = get_posts('page_id=4&post_type=page');

	$post = array_pop($topContent);
	setup_postdata($post);

	the_content();

	?>
</div>

	<!--SIDEBAR-->
	<div id="sidebar">
	<ul id="submenu">
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
	<?php endif; ?>
	</ul>
	</div>
	<!--/SIDEBAR-->

<div class="clear"></div>
</div>
<!--/CONTENT CONTAINER-->

<?php get_footer(); ?>
