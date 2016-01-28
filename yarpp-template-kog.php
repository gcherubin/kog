<?php /*
Example template for use with post thumbnails
Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<h3 style="font-size:1.7em !important">Related Posts</h3>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			
<div <?php post_class( ); ?>>
	<div class="post-content">		
		<div class="post-meta clearfix smallc">
			<div class="post-image-small">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo catch_that_image() ?>&amp;w=180&h=100&amp;zc=1" alt="<?php the_title(); ?>"/></a>
			</div>
			<h3 class="post-title-small left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<div class="date"><?php the_time( 'l F j, Y' ) ?></div>
		</div>	
		
	</div><!-- End post-meta -->
</div><!-- End archive -->
<?php endwhile; endif; ?>

