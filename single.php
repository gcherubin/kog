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
			
				<?php
					if (have_posts()) : 
						while (have_posts()) : the_post(); $category = get_the_category();
				?>
							
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
					<div class="post-meta clearfix">
				
						<h3 class="post-title left"><?php the_title(); ?></h3>
						<div style="clear:both"></div>
						<div class="date"><?php the_time( 'l F j, Y' ) ?></div>
						
					</div><!-- End post-meta -->
					
					<div class="post-box">
					
						<div class="page-content clearfix">
						
							<div class="clearfix">
						
								
								
								<?php the_content( '' ); ?>
								
								
								<?php wp_link_pages( array( 'before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number' ) ); ?>
															
									<br />
								
							</div>
																				
						</div><!-- End post-content -->
																	
					</div><!-- End post-box -->
					
				</div><!-- End post -->				

				
								
				<?php
						endwhile;
					endif;
				?>
				 <div class="post-navigation clear">
                <?php
                    $prev_post = get_adjacent_post(true, '', true);
                    $next_post = get_adjacent_post(true, '', false); ?>
                    <?php if ($prev_post) : $prev_post_url = get_permalink($prev_post->ID); $prev_post_title = $prev_post->post_title; ?>
                        <a class="post-prev" href="<?php echo $prev_post_url; ?>"><span><?php echo $prev_post_title; ?></span></a>
                    <?php endif; ?>
                    <?php if ($next_post) : $next_post_url = get_permalink($next_post->ID); $next_post_title = $next_post->post_title; ?>
                        <a class="post-next" href="<?php echo $next_post_url; ?>"><span><?php echo $next_post_title; ?></span></a>
                    <?php endif; ?>
                
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

