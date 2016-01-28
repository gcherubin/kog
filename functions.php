<?php
/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h5 class="widgettitle">',
        'after_title' => '</h5>',
    ));
	
if ( !is_admin() ) wp_deregister_script('jquery');
	
/* Featured News Widget
/* ----------------------------------------------*/	

function featured_news() {

	$settings = get_option( 'widget_featured_news' );  
	$number = $settings[ 'number' ];
	$category = $settings[ 'category' ];

?>

	<li id="featured-news"><h5>Featured News</h5>
		<ul>
			
			<?php
				$recent = new WP_Query( 'showposts=' . $number . '&category_name=' . $category );
				while( $recent->have_posts() ) : $recent->the_post(); 
					global $post; global $wp_query;
			?>
		
			<li class="clearfix">
				<?php if( get_post_meta( $post->ID, "image_value", true ) ) : ?>
							
					<div class="sidebar-preview">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo get_post_meta( $post->ID, "image_value", true ); ?>&amp;w=109&amp;h=60&amp;zc=1" alt="<?php the_title(); ?>" />
						</a>
					</div>
							
				<?php endif; ?>
				<div class="sidebar-content">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					<span><a href="<?php the_permalink(); ?>/#comments" title="Read Comments"><?php comments_number('0 Comments', '1 Comment', '% Comments' );?></a></span>
				</div>
			</li>
			
			<?php
				endwhile;
			?>
			
		</ul>
		<a href="<?php echo get_category_link( get_cat_id( $category ) ); ?>" class="sidebar-read-more">Read More &raquo;</a>
	</li>

<?php

}

function featured_news_admin() {
	
	$settings = get_option( 'widget_featured_news' );

	if( isset( $_POST[ 'update_featured_news' ] ) ) {
		$settings[ 'number' ] = strip_tags( stripslashes( $_POST[ 'widget_featured_news_number' ] ) );
		$settings[ 'category' ] = strip_tags( stripslashes( $_POST[ 'widget_featured_news_category' ] ) );
		
		update_option( 'widget_featured_news', $settings );
	}
?>
	<p>
		<label for="widget_featured_news_number">How many items would you like to display?</label><br />
		<select id="widget_featured_news_number" name="widget_featured_news_number">
			<?php
				$settings = get_option( 'widget_featured_news' );  
				$number = $settings[ 'number' ];
				
				$numbers = array( "1", "2", "3", "4", "5", "6", "7", "8", "9", "10" );
				foreach ($numbers as $num ) {
					$option = '<option value="' . $num . '" ' . ( $number == $num? " selected=\"selected\"" : "") . '>';
						$option .= $num;
					$option .= '</option>';
					echo $option;
				}
			?>
		</select>
	</p>
	<p>
		<label for="widget_featured_news_category">Which Category is Featured?</label><br />
		<select id="widget_featured_news_category" name="widget_featured_news_category">
			<?php
				$settings = get_option( 'widget_featured_news' );  
				$category = $settings[ 'category' ];
				
				$categories= get_categories();
				foreach ($categories as $cat) {
					$option = '<option value="'.$cat->cat_name.'" ' . ( $category == $cat->category_nicename ? " selected=\"selected\"" : "") . '>';
						$option .= $cat->cat_name;
					$option .= '</option>';
					echo $option;
				}
			?>
		</select>
	</p>
	<input type="hidden" id="update_featured_news" name="update_featured_news" value="1" />

<?php

}

/* Recent News Widget
/* ----------------------------------------------*/	

function recent_news() {

	$settings = get_option( 'widget_recent_news' );  
	$number = $settings[ 'number' ];
	$home = $settings[ 'home' ];
	
	if( is_front_page() ) {
		if( $home == "Yes" ) {
			$show = true;
		} else {
			$show = false;
		}
	} else {
		$show = true;
	}
	
?>

	<?php if( $show ) : ?> 

	<li id="recent-news"><h5>Recent News</h5>
		<ul>
			
			<?php
				$recent = new WP_Query( 'showposts=' . $number );
				while( $recent->have_posts() ) : $recent->the_post(); 
					global $post; global $wp_query;
			?>
		
			<li class="clearfix">
				<?php if( get_post_meta( $post->ID, "image_value", true ) ) : ?>
							
					<div class="sidebar-preview">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo get_post_meta( $post->ID, "image_value", true ); ?>&amp;w=109&amp;h=60&amp;zc=1" alt="<?php the_title(); ?>" />
						</a>
					</div>
							
				<?php endif; ?>
				<div class="sidebar-content">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					<span><a href="<?php the_permalink(); ?>/#comments" title="Read Comments"><?php comments_number('0 Comments', '1 Comment', '% Comments' );?></a></span>
				</div>
			</li>
			
			<?php
				endwhile;
			?>
			
		</ul>
		<a href="<?php bloginfo( 'rss2_url' ); ?>" class="sidebar-read-more-rss">RSS Feed &raquo;</a>
	</li>
	
	<?php endif; ?>

<?php

}

function recent_news_admin() {
	
	$settings = get_option( 'widget_recent_news' );

	if( isset( $_POST[ 'update_recent_news' ] ) ) {
		$settings[ 'number' ] = strip_tags( stripslashes( $_POST[ 'widget_recent_news_number' ] ) );
		$settings[ 'home' ] = strip_tags( stripslashes( $_POST[ 'widget_recent_news_home' ] ) );
		
		update_option( 'widget_recent_news', $settings );
	}
?>
	<p>
		<label for="widget_recent_news_number">How many items would you like to display?</label><br />
		<select id="widget_recent_news_number" name="widget_recent_news_number">
			<?php
				$settings = get_option( 'widget_recent_news' );  
				$number = $settings[ 'number' ];
				
				$numbers = array( "1", "2", "3", "4", "5", "6", "7", "8", "9", "10" );
				foreach ($numbers as $num ) {
					$option = '<option value="' . $num . '" ' . ( $number == $num? " selected=\"selected\"" : "") . '>';
						$option .= $num;
					$option .= '</option>';
					echo $option;
				}
			?>
		</select>
	</p>
	<p>
		<label for="widget_recent_recent_home">Show on Homepage?</label><br />
		<select id="widget_recent_recent_home" name="widget_recent_news_home">
			<?php
				$settings = get_option( 'widget_recent_news' );  
				$home = $settings[ 'home' ];
				
				$options = array( "Yes", "No" );
				foreach( $options as $op ) {
					$option = '<option value="' . $op . '" ' . ( $home == $op ? " selected=\"selected\"" : "") . '>';
						$option .= $op;
					$option .= '</option>';
					echo $option;
				}
			?>
		</select>
	</p>
	<input type="hidden" id="update_recent_news" name="update_recent_news" value="1" />

<?php

}

/* Sponsored Ad Widget
/* ----------------------------------------------*/	

function sponsored_ad() {

	$settings = get_option( 'widget_sponsored_ad' );  
	$code = $settings[ 'code' ];
	$title = $settings[ 'title' ];
	
?>

	<li id="sponsored-ad">
		<p class="sponsored-ad"><?php echo $title; ?></p>
						
		<?php echo $code; ?>
	</li><!-- End sponsored-ad -->
	
<?php

}

function sponsored_ad_admin() {

	$settings = get_option( 'widget_sponsored_ad' );

	if( isset( $_POST[ 'widget_sponsored_ad' ] ) ) {
		$settings[ 'code' ] = stripslashes( $_POST[ 'widget_code' ] );
		$settings[ 'title' ] = strip_tags( stripslashes( $_POST[ 'widget_code_title' ] ) );
		update_option( 'widget_sponsored_ad', $settings );
	}
	
	$settings = get_option( 'widget_sponsored_ad' );  
	$code = $settings[ 'code' ];
	$title = $settings[ 'title' ];
?>
	<p>
		<label for="widget_code_title">Ad Titles</label><br />
		<input type="text" name="widget_code_title" id+"widget_code_title" value="<?php echo $title; ?>" />
	<p>
		<label for="widget_code">Place Ad Code Below:</label><br />
		<textarea name="widget_code" id="widget_code" cols="" rows="6" style="width:290px;"><?php echo $code; ?></textarea>
	</p>
	<input type="hidden" id="widget_sponsored_ad" name="widget_sponsored_ad" value="1" />

<?php

}

register_sidebar_widget( 'Magazeen Sponsored Ad', 'sponsored_ad' );
register_widget_control( 'Magazeen Sponsored Ad', 'sponsored_ad_admin', 300, 200 );

register_sidebar_widget( 'Magazeen Featured News', 'featured_news' );
register_widget_control( 'Magazeen Featured News', 'featured_news_admin', 300, 200 );

register_sidebar_widget( 'Magazeen Recent News', 'recent_news' );
register_widget_control( 'Magazeen Recent News', 'recent_news_admin', 300, 200 );


// CUSTOM ADMIN LOGIN HEADER LOGO //
   function my_custom_login_logo() {
    echo '<style type="text/css">body.login {background: #fff !important;} h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo_kog.gif) !important; width:300px !important;height:200px !important} </style>';
   }
   add_action('login_head', 'my_custom_login_logo');


// CUSTOM ADMIN LOGIN HEADER LINK & ALT TEXT
   function change_wp_login_url() {
    echo bloginfo('url');  // OR ECHO YOUR OWN URL
   }
   function change_wp_login_title() {
    echo get_option('blogname'); // OR ECHO YOUR OWN ALT TEXT
   }
   add_filter('login_headerurl', 'change_wp_login_url');
   add_filter('login_headertitle', 'change_wp_login_title');


/* Custom Write Panel
/* ----------------------------------------------*/

$meta_boxes =
	array(
		"image" => array(
			"name" => "image",
			"type" => "text",
			"std" => "",
			"title" => "Image",
			"description" => "Using the \"<em>Add an Image</em>\" button, upload an image and paste the URL here. Images will be resized. This is the Article's main image and will automatically be sized.")
	);

function meta_boxes() {
	global $post, $meta_boxes;
	
	echo'
		<table class="widefat" cellspacing="0" id="inactive-plugins-table">
		
			<tbody class="plugins">';
	
			foreach($meta_boxes as $meta_box) {
				$meta_box_value = get_post_meta($post->ID, $pre.'_value', true);
				
				if($meta_box_value == "")
					$meta_box_value = $meta_box['std'];
				
				echo'<tr>
						<td width="100" align="center">';		
							echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
							echo'<h2>'.$meta_box['title'].'</h2>';
				echo'	</td>
						<td>';
							echo'<input type="text" name="'.$meta_box['name'].'_value" value="'.get_post_meta($post->ID, $meta_box['name'].'_value', true).'" size="100%" /><br />';
							echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].' Visit the <a href="'.get_bloginfo('template_directory').'/readme.html" title="View ReadMe">README</a> for more information.</label></p>';
				echo'	</td>
					</tr>';
			}
	
	echo'
			</tbody>
		</table>';		
}

function create_meta_box() {
	global $theme_name;
	if ( function_exists('add_meta_box') ) {
		add_meta_box( 'new-meta-boxes', 'Magazeen Post Options', 'meta_boxes', 'post', 'normal', 'high' );
	}
}

function save_postdata( $post_id ) {
	global $post, $meta_boxes;
	
	foreach($meta_boxes as $meta_box) {
		// Verify
		if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
			return $post_id;
		}
	
		if ( 'page' == $_POST['post_type'] ) {
			if ( !current_user_can( 'edit_page', $post_id ))
				return $post_id;
		} else {
			if ( !current_user_can( 'edit_post', $post_id ))
				return $post_id;
		}
	
		$data = $_POST[$meta_box['name'].'_value'];
		
		if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
			add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
		elseif($data != get_post_meta($post_id, $pre.'_value', true))
			update_post_meta($post_id, $meta_box['name'].'_value', $data);
		elseif($data == "")
			delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
	}
}


add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');

/* Custom Settings Page
/* ----------------------------------------------*/

$themename = "Magazeen";
$pre = "mag";

$options = array();

$functions_path = TEMPLATEPATH . '/inc/functions/';

define( OPTION_FILES, 'base.php' );

function startit() {
	global $themename, $options, $pre, $functions_path;
		
	if (function_exists('add_menu_page')) {
		$basename = basename( OPTION_FILES );
	
		// Create the main Menu
		add_menu_page( $themename . ' Options', $themename . ' Options', 8, $basename, 'build_options' );
		
		// Basic Options (Default Sub tab)
		add_submenu_page( $basename, __( $themename . ' Options &raquo; General' ), __( 'Basic Options' ), 8, 'base.php', 'build_options' );
					
	}
}

function build_options() {
	global $themename, $pre, $functions_path;
			
	$page = $_GET["page"];
	
	include( $functions_path . '/options/' . $page );
			
	if ( 'save' == $_REQUEST['action'] ) {
				
		foreach ($options as $value) {
			if( isset( $_REQUEST[ $value['id'] ] ) ) { 
				update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
			} else { 
				delete_option( $value['id'] ); 
			} 
		}
	} 
		
	include( $functions_path . '/build.php' );
}

add_action('admin_menu', 'startit');



// Get URL of first image in a post
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];

// no image found display default image instead
if(empty($first_img)){
$first_img = "/images/default.jpg";
}
return $first_img;
}

add_theme_support( 'menus' );


?>