<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
	<meta name="viewport" content="width=1032" />
	<title><?php if ( is_home() ) { ?><? bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?><?php if ( is_single() ) { ?><?php wp_title(''); ?> | <? bloginfo('name'); ?><?php } ?><?php if ( is_page() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?><?php if ( is_category() ) { ?><?php single_cat_title(); ?> | <? bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?> </title>
	
	<?php
	$thumb = get_post_meta($post->ID,'_thumbnail_id',false);
	$thumb = wp_get_attachment_image_src($thumb[0], false);
	$thumb = $thumb[0];
	$default_img = get_bloginfo('stylesheet_directory').'/images/default_icon.jpg'; 
	?>
 
	<?php if(is_single() || is_page()) { ?>
	<meta name="Description" content="<?php
	while(have_posts()):the_post();
	$out_excerpt = str_replace(array("\r\n", "\r", "\n"), "", get_the_excerpt());
	echo apply_filters('the_excerpt_rss', $out_excerpt);
	endwhile; 	?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php single_post_title(''); ?> | <? bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php
	while(have_posts()):the_post();
	$out_excerpt = str_replace(array("\r\n", "\r", "\n"), "", get_the_excerpt());
	echo apply_filters('the_excerpt_rss', $out_excerpt);
	endwhile; 	?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>"/>
	<meta property="og:image" content="<?php echo catch_that_image() ?>" />
	<?php  } else { ?>
	<meta name="Description" content="<?php single_cat_title(); ?> | <?php bloginfo('description'); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
	<meta property="og:description" content="<?php single_cat_title(); ?> | <?php bloginfo('description'); ?>" />
	<meta property="og:image" content="<?php if ( $thumb[0] == null ) { echo $default_img; } else { echo $thumb; } ?>" />
	<?php  }  ?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/pngfix.js"></script>
	<?php
	if ( is_home() ) { ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#featured').slides({
				preload: false,
				play: 4000,
				pause: 2000,
				hoverPause: true,
			    effect: 'slide'
			});
		});
	</script>
	<?php } else { ?>
   <?php }
	?> 

	<?php wp_head(); ?>
	
	
	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20603153-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="header">
		
		<div class="container clearfix">
		
			<div id="logo">
				<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo_kog-worldwide.png" alt="<?php bloginfo( 'name' ); ?>" height="200" class="logo_3"></a>	
				<!-- <img src="<?php bloginfo( 'template_directory' ); ?>/images/logo_kog.gif" alt="KIDS OF GRIME" height="200" class="logo_2">	-->	
			</div><!-- End logo -->
			
			
		
		</div><!-- End Container -->
		
	</div><!-- End header -->
	
	<div id="navigation">
	
		<div class="container clearfix">
	
			<?php wp_nav_menu( array( 'menu' => 'main', 'sort_column' => 'menu_order', 'container_class' => 'main' ) ); ?>
			
			
			<!-- <a href="<?php bloginfo( 'rss2_url' ); ?>" class="rss" title="Subscribe to <?php bloginfo( 'name' ); ?> RSS">Subscribe</a> -->
			
		</div><!-- End container -->
		
	</div><!-- End navigation -->
	<div id="banner_h">
	<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=horizontal' ); ?>
	</div>
	
	