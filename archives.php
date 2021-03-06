<?php
/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="main-content" class="clearfix">
	
		<div class="container">
	
			<div class="col-580 left">
						
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
					<div class="post-meta clearfix">
				
						<h3 class="post-title left">Archives</h3>
						
						<p class="post-info right">
							<span>By <?php the_author_posts_link(); ?></span>
						</p>
						
					</div><!-- End post-meta -->
					
					<div class="post-box">
					
						<div class="page-content">
					
							<h2>Archives by Month:</h2>
								<ul>
									<?php wp_get_archives('type=monthly'); ?>
								</ul>
							
							<h2>Archives by Subject:</h2>
								<ul>
									 <?php wp_list_categories( 'title_li=' ); ?>
								</ul>
								
							<br />
														
						</div><!-- End post-content -->
											
					</div><!-- End post-box -->
					
				</div><!-- End post -->

			</div><!-- End col-580 (Left Column) -->
			
			<div class="col-340 right">
			
				<ul id="sidebar">
				
					<?php get_sidebar(); ?>
					
				</ul><!-- End sidebar -->   
								
			</div><!-- End col-340 (Right Column) -->
			
		</div><!-- End container -->
		
	</div><!-- End main-content -->

<?php get_footer(); ?>
