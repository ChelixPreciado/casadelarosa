<?php get_header(); ?>
<div class="main">
	<?php if (have_posts()) : ?>
	
			<h1><?php echo get_search_query();?></h1>
			
		<?php while (have_posts()) : the_post(); ?>
			<!-- Start: Post -->
			<article <?php post_class(); ?>>
				<p class="post-meta"><span class="icon date"></span> <?php the_time( get_option( 'date_format' ) ) ?>, <span class="icon author"></span> <?php the_author(); ?> <span class="icon cats"></span><?php the_category(", "); ?>, <?php if ( comments_open() ) : ?> <?php comments_popup_link('<span class="icon comments"></span> 0', '<span class="icon comments"></span> 1', '<span class="icon comments"></span> %'); ?> <?php endif; ?></p>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <?php edit_post_link(__('Edit this entry', 'lightweight_personal'), '', ''); ?></h2>
				<?php the_post_thumbnail(); ?>
				<?php the_excerpt(); ?>
				<p class="more"><a href="<?php the_permalink() ?>"><?php _e( ' ', 'lightweight_personal' );?></a></p>
				<?php if(has_tag()): ?><p class="tags"><span class="icon tags"></span><?php the_tags(""); ?></p><?php endif; ?>
			</article>
			<!-- End: Post -->
		<?php endwhile; ?>

		<p class="pagination">
			<span class="prev"><?php next_posts_link(__('Previous Posts', 'lightweight_personal')) ?></span>
			<span class="next"><?php previous_posts_link(__('Next posts', 'lightweight_personal')) ?></span>
		</p>
	<?php else : ?>
	<h1><?php echo get_search_query();?></h1>
	<div class="post">
		<p><?php _e( 'No posts found. Try a different search?', 'lightweight_personal' ); ?></p>
		<?php get_search_form(); ?>
	</div>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>