<?php
/*
Template Name: Blog
*/

get_header(); ?>

<!--SECTION TITLE BAR-->
<div id="sectionTitleContainer">
<h1 id="sectionTitle">Blog</h1>
</div>
<!--/SECTION TITLE BAR-->

<!--CONTENT CONTAINER-->
<div id="contentContainer">



<!--CONTENT-->
<div id="content">

	<?php


	// Display the latest posts

	query_posts('post_type=post&order=desc&paged=' . get_query_var('paged'));

	?>
	<?php if (have_posts()) : ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

	<!--SIDEBAR-->
	<div id="sidebar">
	<h1 id="submenuTitle">Blog Posts</h1>
	<ul id="submenu">
	<li><h3>Recent Posts</h3></li>
	<?php wp_get_archives('type=postbypost&limit=10'); ?>
    <li><h3 style="margin-top: 20px;">Archive</h3>
	<?php collapsArch(); ?>
	</ul>
	</div>
	<!--/SIDEBAR-->

<div class="clear"></div>
</div>
<!--/CONTENT CONTAINER-->

<?php get_footer(); ?>
