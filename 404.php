<?php
/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */

get_header();
?>

<div id="main-content" class="clearfix">
	
		<div class="container">
	
			<div class="col-600 left">
						
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
					<div class="post-meta clearfix">
				
						<h3 class="post-title left">Ooops, Page Not Found !</h3>
						
						
						
					</div><!-- End post-meta -->
					
					<div class="post-box">
					
						<div class="post-content">
					
							<h2>This page is no longer available.</h2>
							<p>This page has either been removed, or was possibly never been created. <br> See the list of the recent posts published.</p>
							
				<?php query_posts( 'posts_per_page=5' ); ?>			
 				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>					
				<div <?php post_class(); ?>>			
					<div class="post-meta clearfix">				
						<h3 class="post-title left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<div style="clear:both"></div>
						<div class="date"><?php the_time( 'l F j, Y' ) ?></div>
					</div><!-- End post-meta -->
					
					<div class="post-box">					
						<div class="post-content">		
										
													
							<div class="post-image">
								
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo catch_that_image() ?>&amp;w=600&h=400&amp;zc=1" alt="<?php the_title(); ?>"/></a>
							</div>							
													
							<div class="post-intro">							
								<?php the_excerpt(); ?>								
							</div><!-- End post-intro -->							
						</div><!-- End post-content -->
						
						<div class="post-footer clearfix">						
							<div class="continue-reading">
								<a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" rel="bookmark" title="Continue Reading <?php the_title_attribute(); ?>">Continue Reading</a>
							</div>							
							<div class="category-menu">	
								<b>Posted in</b> <?php the_category(', '); ?>								
															
							</div><!-- End category -->													
						</div><!-- End post-footer -->					
					</div><!-- End post-box -->					
				</div><!-- End post -->
							
				<?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>			
														
						</div><!-- End post-content -->
											
					</div><!-- End post-box -->
					
				</div><!-- End post -->

			</div><!-- End col-580 (Left Column) -->
			
			<div class="col-320 right">
			
				<ul id="sidebar">
				
					<?php get_sidebar(); ?>
					
				</ul><!-- End sidebar -->   
								
			</div><!-- End col-340 (Right Column) -->
			
		</div><!-- End container -->
		
	</div><!-- End main-content -->

<?php get_footer(); ?>
