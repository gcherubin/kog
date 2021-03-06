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
						while (have_posts()) : the_post(); $category = get_the_category();
				?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
					
				
						<h3 class="post-title "><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						
						
						
					
					
					<div class="post-box">
					
						<div class="page-content">
					
							<?php the_content( '' ); ?>
							
						</div><!-- End post-content -->
											
					</div><!-- End post-box -->
					
				</div><!-- End post -->
				
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
				<?php
						endwhile;
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
