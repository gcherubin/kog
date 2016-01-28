<li><?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=advert' ); ?>
</li>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>