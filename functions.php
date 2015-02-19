<?php //Opening PHP tag

//  Prevent Page Scroll When Clicking the More Link
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

// Create the function, so you can use it
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function awesome_2014_customize_register() {

global $wp_customize;

//add extended featured content section

//add controls
$wp_customize->add_setting( 'num_posts_grid', array( 'default' => '6' ) );
$wp_customize->add_setting( 'num_posts_slider', array( 'default' => '6' ) );
$wp_customize->add_setting( 'layout_mobile', array( 'default' => 'grid' ) );

$wp_customize->add_control( 'num_posts_grid', array(
	'label' => __( 'Number of posts for grid', 'text-domain'),
	'section' => 'featured_content',
	'settings' => 'num_posts_grid',
) );

$wp_customize->add_control( 'num_posts_slider', array(
	'label' => __( 'Number of posts for slider', 'text-domain'),
	'section' => 'featured_content',
	'settings' => 'num_posts_slider',
) );

$wp_customize->add_control( 'layout_mobile', array(
	'label' => __( 'Layout for mobile devices', 'text-domain'),
	'section' => 'featured_content',
	'settings' => 'layout_mobile',
	'type' => 'select',
	'choices' => array(
	'grid' => 'Grid',
	'slider' => 'Slider',
),
) );
}

add_action( 'customize_register', 'awesome_2014_customize_register' );


// ensure mobile layout is used 

function awesome_2014_theme_mod( $value ) {

if ( wp_is_mobile() ){
		return get_theme_mod( 'layout_mobile', 'grid' );
	} else {
		return $value;
	}
}

add_filter( 'theme_mod_featured_content_layout', 'awesome_2014_theme_mod' );

// http://premium.wpmudev.org/blog/how-to-make-twenty-fourteen-or-any-other-wp-theme-super/

?>