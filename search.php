<?php
/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */

get_header(); ?>

	<div id="main-content" class="clearfix">
	
		<div class="container">
	
			<div class="col-600 left">
				
				<?php
					if (have_posts()) :
				?>
				
				<div <?php post_class(); ?>>
			
					<div class="post-meta clearfix">
				
						<h3 class="post-title">Search Results</h3>
						
						<p class="post-info right">
							You Searched &quot;<?php the_search_query(); ?>&quot;
						</p>
						
					</div><!-- End post-meta -->
					
					<div class="post-box">
					
						<div class="post-content">
						
							<p>Below is a list of related searches. If you can not find what you are looking for, please try a different keyword.</p>
								
						</div><!-- End post-content -->
						
						
					
					</div><!-- End post-box -->
					
				</div><!-- End post -->
					
				<?php		
					while (have_posts()) : the_post(); $category = get_the_category();
				?>
				
				<div <?php post_class( ); ?>>
			
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
					
				</div><!-- End archive -->
				
				<?php
						endwhile;
				?>
					<div class="navigation clearfix">
						<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					</div>
				<?php
					else : 
				?>
				
					<div <?php post_class(); ?>>
			
						<div class="post-meta clearfix">
					
							<h3 class="post-title">No Results</h3>
							
							<p class="post-info right">
								You Searched &quot;<?php the_search_query(); ?>&quot;
							</p>
							
						</div><!-- End post-meta -->
						
						<div class="post-box">
						
							<div class="post-content">
							
								<p>No results were found with those keywords. Try some of the links below, or search with a different keyword.</p>
								
								<h2>Archives</h2>
								
								<ul>
									<?php wp_get_archives(); ?>
								</ul>
									
							</div><!-- End post-content -->
							
							<div class="post-footer">
							
								<?php echo get_search_form(); ?>
								
							</div>
						
						</div><!-- End post-box -->
						
					</div><!-- End post -->
				
				<?php
					endif;
				?>
				
			</div><!-- End col-580 (Left Column) -->
			
			<div class="col-320 right">
			
				<ul id="sidebar">
				
					<?php get_sidebar(); ?>
					
				</ul><!-- End sidebar -->   
								
			</div><!-- End col-340 (Right Column) -->
			
		</div><!-- End container -->
		
	</div><!-- End main-content -->

<?php get_footer(); ?>