<?php get_header(); ?>
<div class="main">
	<?php if (have_posts()) while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><?php the_title(); ?> <?php edit_post_link(__('Edit this entry', 'lightweight_personal'), '', ''); ?></h1>
		<?php the_content(); ?>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
		<p class="pages"><?php wp_link_pages(); ?></p>
	</article>
	<?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>