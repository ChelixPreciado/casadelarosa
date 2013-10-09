
	</div></section>

<?php if(is_front_page() & !is_paged() ) { ?>
<p class="theme"><a href="http://wordpress.org/"><?php _e('WordPress', 'lightweight_personal'); ?></a> <?php _e('theme created by', 'lightweight_personal');?> <a href="http://thememotive.com/"><?php _e('ThemeMotive', 'lightweight_personal');?></a>.</p>
<?php } ?>

	<footer>
		<div><div class="clearfix widgets">
        	<div class="cols">
				<div  class="col">
					<?php dynamic_sidebar('footer-widget-area-1'); ?>
				</div >
				<div  class="col">
					<?php dynamic_sidebar('footer-widget-area-2'); ?>
				</div >
			</div>
            <div class="cols">
				<div  class="col">
					<?php dynamic_sidebar('footer-widget-area-3'); ?>
				</div >
				<div  class="col">
					<?php dynamic_sidebar('footer-widget-area-4'); ?>
				</div >
			</div>
        </div >
		<?php wp_nav_menu( array('fallback_cb' => 'lightweight_personal_page_menu', 'container' => false, 'menu' => 'secondary', 'depth' => '1', 'theme_location' => 'secondary', 'link_before' => '', 'link_after' => '') ); ?>
	</footer>
	
<?php wp_footer(); ?>	
</body>
</html>