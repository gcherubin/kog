<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
	<div id="main-content" class="clearfix">	
		<div class="container">	
			<?php	
				
				if(is_home() && !is_paged()){
				
			?>
			<div class="col-420 left">
				<div id="featured">
				<div class="slides_container">
				<?php query_posts($query_string . 'showposts=5&cat=1240'); ?>
 				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
				<div <?php post_class('medium'); ?>>						
					
					<div class="post-box">					
						<div class="post-content">
							<div class="post-image">								
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo catch_that_image() ?>&amp;w=420&h=315&amp;zc=1" alt="<?php the_title(); ?>"/></a>
							</div>						
						</div><!-- End post-content -->
					</div><!-- End post-box -->	
					
					<div class="post-meta clearfix">				
						<h4 class="post-title left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						<div style="clear:both"></div>
						<div class="date"><?php the_time( 'l F j, Y' ) ?></div>
					</div><!-- End post-meta -->
					
					<div class="post-intro">							
						<?php the_excerpt(); ?>								
					</div><!-- End post-intro -->					
									
				</div><!-- End post -->
				
				<?php endwhile; 
				else: 
				endif; ?>
				</div>
				</div>
			
			</div>
			<div class="col-500 right">
				<?php
					query_posts( 'showposts=1&category__in=1152&orderby=rand' );
					if (have_posts()) : while (have_posts()) : the_post(); $category = get_the_category();				
				?>
				
				<div <?php post_class( 'single '); ?>>			
										
					<div class="post-box">					
						<div class="post-content">					
							<div class="post-image">		
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo catch_that_image() ?>&amp;w=240&amp;h=160&amp;zc=1" alt="<?php the_title(); ?>"/></a>
							</div>							
						</div><!-- End post-content -->						
					</div><!-- End post-box -->	
					<div class="post-meta clearfix small">				
						<h5 class="post-title left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>	
						<div style="clear:both"></div>
						<div class="date"><?php the_time( 'l F j, Y' ) ?></div>					
					</div><!-- End post-meta -->				
				</div><!-- End post -->				
				<?php endwhile; 
				else: 
				endif; ?>
				
				<?php
					query_posts( 'showposts=1&category__in=1173&orderby=rand' );
					if (have_posts()) : while (have_posts()) : the_post(); $category = get_the_category();				
				?>
				
				<div <?php post_class( 'single last '); ?>>			
										
					<div class="post-box">					
						<div class="post-content">					
							<div class="post-image">		
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo catch_that_image() ?>&amp;w=240&amp;h=160&amp;zc=1" alt="<?php the_title(); ?>"/></a>
							</div>							
						</div><!-- End post-content -->						
					</div><!-- End post-box -->	
					<div class="post-meta clearfix small">				
						<h5 class="post-title left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>	
						<div style="clear:both"></div>
						<div class="date"><?php the_time( 'l F j, Y' ) ?></div>					
					</div><!-- End post-meta -->				
				</div><!-- End post -->				
				<?php endwhile; 
				else: 
				endif; ?>
				
				<div style="clear:left"></div>
				
				<?php
					query_posts( 'showposts=1&category__in=1146&orderby=rand' );
					if (have_posts()) : while (have_posts()) : the_post(); $category = get_the_category();				
				?>
				
				<div <?php post_class( 'single '); ?>>			
										
					<div class="post-box">					
						<div class="post-content">					
							<div class="post-image">		
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo catch_that_image() ?>&amp;w=240&amp;h=160&amp;zc=1" alt="<?php the_title(); ?>"/></a>
							</div>							
						</div><!-- End post-content -->						
					</div><!-- End post-box -->	
					<div class="post-meta clearfix small">				
						<h5 class="post-title left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>	
						<div style="clear:both"></div>
						<div class="date"><?php the_time( 'l F j, Y' ) ?></div>					
					</div><!-- End post-meta -->				
				</div><!-- End post -->				
				<?php endwhile; 
				else: 
				endif; ?>
				
				<?php
					query_posts( 'showposts=1&category__in=11&orderby=rand' );
					if (have_posts()) : while (have_posts()) : the_post(); $category = get_the_category();				
				?>
				
				<div <?php post_class( 'single last'); ?>>			
										
					<div class="post-box">					
						<div class="post-content">					
							<div class="post-image">		
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo catch_that_image() ?>&amp;w=240&amp;h=160&amp;zc=1" alt="<?php the_title(); ?>"/></a>
							</div>							
						</div><!-- End post-content -->						
					</div><!-- End post-box -->	
					<div class="post-meta clearfix small">				
						<h5 class="post-title left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>	
						<div style="clear:both"></div>
						<div class="date"><?php the_time( 'l F j, Y' ) ?></div>					
					</div><!-- End post-meta -->				
				</div><!-- End post -->				
				<?php endwhile; 
				else: 
				endif; ?>
				
				
			
			</div>
			<?php
			}
			?>
			<div class="col-600 left">
				<?php query_posts($query_string . '&cat=-1261'); ?>
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
				
				<div class="pager">
				<?php wp_pagenavi(); ?>
				</div>
				
				
			</div><!-- End col-580 (Left Column) -->
			
			<div class="col-320 right">
			
				<ul id="sidebar">
				
					<?php get_sidebar(); ?>
					
				</ul><!-- End sidebar -->   
								
			</div><!-- End col-340 (Right Column) -->
			
		</div><!-- End container -->
		
	</div><!-- End main-content -->

<?php get_footer(); ?>
