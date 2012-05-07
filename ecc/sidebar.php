	<!--SIDEBAR-->
	<div id="sidebar">
<?php

	if (is_single()) {
?>
	<h1 id="submenuTitle">Blog Posts</h1>
	<ul id="submenu">
	<li><h3>Recent Posts</h3></li>
	<?php wp_get_archives('type=postbypost&limit=10'); ?>
	
	<li><h3 style="margin-top: 20px;">Category</h3></li>
	<li><?php the_category("</li>\n\t<li>"); ?></li>
    <li><h3 style="margin-top: 20px;">Archive</h3>
	<?php collapsArch(); ?>
	</li>
	</ul>
<?php
	}
	else if (is_page()) {
		$children = wp_list_pages('depth=1&title_li=&echo=0&child_of=' . $post->ID);

		// If there are child posts, display them here
		if ($children) {

?>
	<h1 id="submenuTitle"><?php the_title(); ?> Menu</h1>
		<ul id="submenu">
			<?php echo $children; ?>
			<?php wp_list_bookmarks('category_name=' . $post->post_title . '&title_li=&categorize=0'); ?>
		</ul>
<?php

		}

		// Otherwise, if this is a child post, display its siblings
		else if ($post->post_parent) {
			$children = wp_list_pages('depth=1&title_li=&echo=0&child_of=' . $post->post_parent);

			$parentPost = get_post($post->post_parent);

?>
	<h1 id="submenuTitle"><?php echo $parentPost->post_title; ?> Menu</h1>
		<ul id="submenu">
			<?php echo $children; ?>
			<?php wp_list_bookmarks('category_name=' . $parentPost->post_title . '&title_li=&categorize=0'); ?>
		</ul>
	
<?php

		}

		// On the individual events pages, show the list of events
		else if (is_page('Events') && isset($_GET['event_id'])) {

?>
		<h1 id="submenuTitle">Events Menu</h1>
		<ul id="submenu">
			<?php dbem_get_events_list(); ?>
		</ul>
<?php

		}
	}

?>
	</div>
	<!--/SIDEBAR-->
