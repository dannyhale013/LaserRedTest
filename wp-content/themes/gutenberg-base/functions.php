<?php
/**
 * gutenberg-starter-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gutenberg-starter-theme
 */

if ( ! function_exists( 'gutenberg_starter_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gutenberg_starter_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gutenberg-starter-theme, use a find and replace
		 * to change 'gutenberg-starter-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gutenberg-starter-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gutenberg-starter-theme' ),
			'menu-footer' => esc_html__( 'Footer', 'gutenberg-starter-theme' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gutenberg_starter_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gutenberg_starter_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gutenberg_starter_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'gutenberg_starter_theme_content_width', 0 );

/**
 * Register Google Fonts
 */
function gutenberg_starter_theme_fonts_url() {
	$fonts_url = '';

	/*
	 *Translators: If there are characters in your language that are not
	 * supported by Noto Serif, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$notoserif = esc_html_x( 'on', 'Noto Serif font: on or off', 'gutenberg-starter-theme' );

	if ( 'off' !== $notoserif ) {
		$font_families = array();
		$font_families[] = 'Noto Serif:400,400italic,700,700italic';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Enqueue scripts and styles.
 */
function gutenberg_starter_theme_scripts() {
	wp_enqueue_style( 'gutenberg-starter-theme-fonts', gutenberg_starter_theme_fonts_url() );

	$style_ver = filemtime( get_stylesheet_directory() . '/compiled/css/min/style.css' );

	if(!is_admin()) {
		wp_enqueue_style('theme-styles', get_template_directory_uri() . '/compiled/css/min/style.css', array(), $style_ver);
	}


	$script_ver = filemtime( get_template_directory() . '/compiled/js/bundle.js' );

	if(!is_admin()) {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
		wp_enqueue_script( 'bundle-js',  get_template_directory_uri() . '/compiled/js/bundle.js', array(), $script_ver, true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gutenberg_starter_theme_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Theme Settings
 */
require get_template_directory() . '/inc/theme-options.php';


//use [htmlelements] in content area to have all this output this is great for testing blog posts
function seed_sc_htmltest() {
	return '
	<h1>Header One</h1>

	<p>Lorem ipsum <em>emphasised text</em> dolor sit amet, <strong>strong text</strong> consectetur adipisicing elit, <abbr title="">abbreviated text</abbr> sed do eiusmod tempor <acronym title="">acronym text</acronym> incididunt ut labore et dolore magna aliqua. Ut <q>quoted text</q> enim ad minim veniam, quis nostrud exercitation <a href="/">link text</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute <del>deleted text</del> <ins>inserted text</ins> irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <code>code text</code> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<blockquote>
	<p>Blockquote. Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
	</blockquote>

	<h2>Header 2</h2>

	<p>Extended paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<ol>
	<li>Ordered list</li>
	<li>Item 2 Consectetur adipisicing elit</li>
	<li>Item 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
	<li>Item 4</li>
	<li>Item 5</li>
	</ol>

	<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<h3>Header 3</h3>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

	<ul>
	<li>Unordered list</li>
	<li>Consectetur adipisicing elit</li>
	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
	<li>Item</li>
	<li>Item</li>
	<li>Item</li>
	</ul>

	<p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

	<pre><code>pre and code pair {
    margin: $sp-unit 0;
    padding: $sp-unit;
    background: $bg-alt;
    overflow-x: auto;
}</code></pre>
	<img src="https://via.placeholder.com/600x400">
	<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/TnzFRV1LwIo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa nulla veritatis beatae ullam quas repellendus praesentium corporis deserunt ab porro alias debitis voluptatum, dignissimos adipisci, dolor laborum minus hic!</p>

	<h4>Header 4</h4>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

	<dl>
	<dt>Definition list</dt>
	<dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
	commodo consequat.</dd>
	<dt>Lorem ipsum dolor sit amet</dt>
	<dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
	<dt>Lorem ipsum dolor sit amet</dt>
	<dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
	<dt>Lorem ipsum dolor sit amet</dt>
	<dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
	</dl>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

	<table summary="Table summary">
		<thead>
			<tr>
				<th>Header</th><th>Header</th><th>Header</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Content</td><td>1</td><td>a</td>
			</tr>
			<tr>
				<td>Content</td><td>2</td><td>b</td>
			</tr>
			<tr>
				<td>Content</td><td>3</td><td>c</td>
			</tr>
			<tr>
				<td>Content</td><td>4</td><td>d</td>
			</tr>
			<tr>
				<td>Content</td><td>5</td><td>e</td>
			</tr>
			<tr>
				<td>Content</td><td>6</td><td>f</td>
			</tr>
		</tbody>
	</table>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa nulla veritatis beatae ullam quas repellendus praesentium corporis deserunt ab porro alias debitis voluptatum, dignissimos adipisci, dolor laborum minus hic!</p>

	<table summary="Table summary">
		<thead>
			<tr>
				<th>Header</th><th>Header</th><th>Header</th><th>Header</th><th>Header</th><th>Header</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Wide Content</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
			</tr>
			<tr>
				<td>Wide Content</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
			</tr>
			<tr>
				<td>Wide Content</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
			</tr>
			<tr>
				<td>Wide Content</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
			</tr>
		</tbody>
	</table>';
	
}
add_shortcode( 'htmlelements', 'seed_sc_htmltest' );

//wraps tables in a wrapper for overflow fixes
function table_wrap($content) {
	$content = str_replace('<table', '<div class="table-wrapper"><table', $content);
	$content = str_replace('</table>', '</table></div>', $content);
    return $content;
}
add_filter('the_content', 'table_wrap');
add_filter('acf_the_content', 'table_wrap');

//wraps iframes in a wrapper for responsive
function iframe_wrap($content) {
	$content = str_replace('<iframe', '<div class="iframe-wrapper"><iframe', $content);
	$content = str_replace('</iframe>', '</iframe></div>', $content);
    return $content;
}
add_filter('the_content', 'iframe_wrap');
add_filter('acf_the_content', 'iframe_wrap');

//register acf blocks
function register_acf_block_types() {

	acf_register_block_type(array(
        'name'              => 'Today block',
        'title'             => __('Today block'),
        'description'       => __('A Today block.'),
        'render_template'   => '/acf-blocks/today.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'Today', 'product' ),
		'mode'				=> 'edit',
	));

	acf_register_block_type(array(
        'name'              => 'two col block',
        'title'             => __('two col block'),
        'description'       => __('A two col block.'),
        'render_template'   => '/acf-blocks/two-col.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'two col', 'product' ),
		'mode'				=> 'edit',
	));

	acf_register_block_type(array(
        'name'              => 'quote block',
        'title'             => __('quote block'),
        'description'       => __('A quote block.'),
        'render_template'   => '/acf-blocks/quote.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'quote', 'product' ),
		'mode'				=> 'edit',
	));

	acf_register_block_type(array(
        'name'              => 'Events block',
        'title'             => __('Events block'),
        'description'       => __('A Events block.'),
        'render_template'   => '/acf-blocks/events.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'Events' ),
		'mode'				=> 'edit',
	));

	acf_register_block_type(array(
        'name'              => 'Lastest News block',
        'title'             => __('Lastest News block'),
        'description'       => __('A Lastest News block.'),
        'render_template'   => '/acf-blocks/news.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'Lastest News' ),
		'mode'				=> 'edit',
	));

	acf_register_block_type(array(
        'name'              => 'Info block',
        'title'             => __('Info block'),
        'description'       => __('A Info block.'),
        'render_template'   => '/acf-blocks/info-block.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'large', 'info' ),
		'mode'				=> 'edit',
	));

}
// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function post_type_events_init() {
	$labels = array(
	  'name'               => _x( 'Events', 'post type general name' ),
	  'singular_name'      => _x( 'Events', 'post type singular name' ),
	  'add_new'            => _x( 'Add New', 'Events' ),
	  'add_new_item'       => __( 'Add New Events' ),
	  'edit_item'          => __( 'Edit Events' ),
	  'new_item'           => __( 'New Events' ),
	  'all_items'          => __( 'All Events' ),
	  'view_item'          => __( 'View Events' ),
	  'search_items'       => __( 'Search Events' ),
	  'not_found'          => __( 'No Events found' ),
	  'not_found_in_trash' => __( 'No Events found in the Trash' ), 
	  'parent_item_colon'  => '',
	  'menu_name'          => 'Events'
  );
  
  $args = array(
	  'labels'        => $labels,
	  'description'   => 'Events',
	  'public'        => true,
	  'show_ui'        => true,
	  'capability_type'  => 'post',
	  'menu_position' => 5,
	  'supports'      => array( 'title' , 'thumbnail', 'editor', 'page-attributes'),
	  'has_archive'   => true,
  );   
  
  register_post_type( 'events', $args );   
  }
  add_action( 'init', 'post_type_events_init' );

  add_filter('wp_nav_menu_objects', 'custom_wp_nav_menu_objects', 10, 2);

function custom_wp_nav_menu_objects( $items, $args ) {
	
	foreach( $items as $item ) {
		
		$left_graphic_colour = get_field('left_graphic_colour', $item);
		$left_graphic_title = get_field('left_graphic_title', $item);
		$left_graphic_image = get_field('left_graphic_image', $item)['url'];
		$link_image = get_field('link_image', $item)['url'];

		if( $left_graphic_title && $left_graphic_image && $left_graphic_colour) {
			$menuTitle = $item->title;
			$item->title = '<div class="sub-menu__main-container" style="background-color:' . $left_graphic_colour . '">';
			$item->title .= '<div class="sub-menu__main-content">';
			$item->title .= '<h5>' . $left_graphic_title . '</h5>';
			$item->title .= '<p>' . $menuTitle . '</p>';
			$item->title .= '</div>';
			$item->title .= '<div class="sub-menu__main-image" style="background-image:url(' . $left_graphic_image . ')"></div>';
			$item->title .= '</div>';
		} else if ($link_image) {
			$menuTitle = $item->title;
			$item->title = '<div class="sub-menu__link-container">';
			$item->title .= '<div class="sub-menu__link-image" style="background-image:url('. $link_image . ')"></div>';
			$item->title .= '<p>' . $menuTitle . '</p>';
			$item->title .= '</div>';
		}
		
	}

	return $items;
}