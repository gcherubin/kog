<?php
/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */
?>

	<div id="link-back">
	
		<div class="container clearfix">
		
			
			<div class="credits">
				<ul>
					<li><a href="http://www.facebook.com/pages/Kids-of-Grime-Official/177160018995379" target="blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/fb_icon.jpg" alt="Facebook"/></a></li>
					<li><a href="http://twitter.com/kogworldwide" target="blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/tw_icon.jpg" alt="Twitter"/></a></li>
					<li><a href="http://feeds.feedburner.com/KidsOfGrime" target="blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/rss_icon.jpg" alt="Feed RSS"/></a></li>
				</ul>
				</div><?php wp_nav_menu( array( 'menu' => 'footer','sort_column' => 'menu_order', 'container_class' => 'main' ) ); ?></div>
	
	</div><!-- End link-back -->
	
	<?php wp_footer(); ?>
	
</body>
</html>
