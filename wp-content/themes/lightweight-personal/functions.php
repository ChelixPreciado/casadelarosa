<?php
if ( ! isset( $content_width ) )
$content_width = 720;

add_action( 'after_setup_theme', 'lightweight_personal_setup' );

function lightweight_personal_setup() {

add_editor_style();
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

set_post_thumbnail_size( 240, 160, true ); // Default size

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain('lightweight_personal', get_template_directory() . '/languages');	
	
register_nav_menus(
	array(
	  'primary' => __('Header Menu', 'lightweight_personal'),
	  'secondary' => __('Footer Menu', 'lightweight_personal')
	)
);
	
}


function lightweight_personal_widgets() {

register_sidebar(array(
	'name' => __( 'Sidebar Widget Area', 'lightweight_personal'),
	'id' => 'sidebar-widget-area',
	'description' => __( 'The sidebar widget area', 'lightweight_personal'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3><span>',
	'after_title' => '</span></h3>',
));	

register_sidebar(array(
	'name' => __( 'Footer Widget Area 1', 'lightweight_personal'),
	'id' => 'footer-widget-area-1',
	'description' => __( 'The footer widget area 1', 'lightweight_personal'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3><span>',
	'after_title' => '</span></h3>',
));	
register_sidebar(array(
	'name' => __( 'Footer Widget Area 2', 'lightweight_personal'),
	'id' => 'footer-widget-area-2',
	'description' => __( 'The footer widget area 2', 'lightweight_personal'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3><span>',
	'after_title' => '</span></h3>',
));	
register_sidebar(array(
	'name' => __( 'Footer Widget Area 3', 'lightweight_personal'),
	'id' => 'footer-widget-area-3',
	'description' => __( 'The footer widget area 3', 'lightweight_personal'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3><span>',
	'after_title' => '</span></h3>',
));	
register_sidebar(array(
	'name' => __( 'Footer Widget Area 4', 'lightweight_personal'),
	'id' => 'footer-widget-area-4',
	'description' => __( 'The footer widget area 4', 'lightweight_personal'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3><span>',
	'after_title' => '</span></h3>',
));			
}

add_action ( 'widgets_init', 'lightweight_personal_widgets' );

//Multi-level pages menu
function lightweight_personal_page_menu() {
if (is_page()) { $highlight = "page_item"; } else {$highlight = "menu-item current-menu-item"; }
echo '<ul class="menu">';
wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=3');
echo '</ul>';
}

//Where the post has no post title, but must still display a link to the single-page post view.
add_filter('the_title', 'lightweight_personal_title');

function lightweight_personal_title($title) {
    if ($title == '') {
        return 'Untitled';
    } else {
        return $title;
    }
}

function lightweight_personal_filter_wp_title( $title ) {
	global $page, $paged;
    // Get the Site Name
    $site_name = get_bloginfo( 'name' );
    // Prepend name
    $filtered_title = $title .' | '. $site_name;
    
    // Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ){
		$filtered_title = $site_name .' | '.$site_description;       
    }
    
    // Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) $filtered_title .= ' | ' . sprintf( __( 'Page %s', 'lightweight_personal'), max( $paged, $page ) );
    // Return the modified title
    return $filtered_title;
}
// Hook into 'wp_title'
add_filter( 'wp_title', 'lightweight_personal_filter_wp_title' );

//Enqueued scripts
function lightweight_personal_scripts(){
	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); 
}
add_action( 'wp_enqueue_scripts', 'lightweight_personal_scripts' );


function lightweight_personal_add_my_stylesheet() {
	wp_register_style( 'lightweight_personal_main_style', get_stylesheet_uri(), false, 1.4 );
    wp_enqueue_style( 'lightweight_personal_main_style' );
}

add_action( 'wp_enqueue_scripts', 'lightweight_personal_add_my_stylesheet' );    
//Enqueued scripts
function my_scripts_method() {
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.0');				
		global $is_IE;
		if ( $is_IE ) {
			wp_enqueue_script( 'html5', get_bloginfo('template_directory').'/js/html5.js' );
		}		
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
?>