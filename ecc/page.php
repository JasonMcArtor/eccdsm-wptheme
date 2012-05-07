<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!--SECTION TITLE BAR-->
<div id="sectionTitleContainer">
<h1 id="sectionTitle"><?php the_title(); ?></h1>
</div>
<!--/SECTION TITLE BAR-->

<!--CONTENT CONTAINER-->
<div id="contentContainer">

<!--CONTENT-->
<div id="content">
<div class="post" id="post-<?php the_ID(); ?>">

	<div class="entry">
	<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	</div>
</div>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<div class="clear"></div>
</div>
<!--/CONTENT CONTAINER-->

<?php get_footer(); ?>
