<?php

/*Register new menu*/

register_nav_menus(array(
    'top'    => 'Верхнее меню',
    'bottom' => 'Нижнее меню',
    'info'   => 'Инфо',
    'uslugi' => 'Услуги'
));


/*register custom post type "Металлопрокат"*/

add_action( 'init', 'tochno_register_prokat_init' ); // Использовать функцию только внутри хука init

function tochno_register_prokat_init() {
    $labels = array(
        'name' => 'Категория',
        'singular_name' => 'Категория', // админ панель Добавить->Функцию
        'add_new' => 'Добавить Категорию',
        'add_new_item' => 'Добавить новую Категорию', // заголовок тега <title>
        'edit_item' => 'Редактировать Категорию',
        'new_item' => 'Новая Категория',
        'all_items' => 'Все Категории',
        'view_item' => 'Просмотр Категории на сайте',
        'search_items' => 'Искать Категории',
        'not_found' =>  'Категорий не найдено.',
        'not_found_in_trash' => 'В корзине нет Категорий.',
        'menu_name' => 'Категории' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'publicly_queryable'  => false,
        'hierarchical' => true,
        'taxonomies' => array('category'),
        'show_in_rest' => true,
        'public' => true,
        'exclude_from_search' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'show_in_admin_bar' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-cart', // иконка в меню
        'menu_position' => 2, // порядок в меню
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields', 'excerpt')
    );
    register_post_type('prokat', $args);
}
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wtpro_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'smaxpro' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'smaxpro' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wtpro_widgets_init' );

/**
 * Enqueue styles.
 */
function wtpro_styles() {
    // Add custom fonts, used in the main stylesheet.

    wp_enqueue_style( 'smaxpro-base-style', get_stylesheet_uri(), array(), null );


    // Register component styles that are printed as needed.
    wp_register_style( 'smaxpro-front-page', get_theme_file_uri( '/css/front-page.css' ), array(), null );
    wp_register_style( 'smaxpro-cat', get_theme_file_uri( '/css/cat.css' ), array(), null );
    wp_register_style( 'smaxpro-blog', get_theme_file_uri( '/css/blog.css' ), array(), null );
    wp_register_style( 'smaxpro-single', get_theme_file_uri( '/css/single.css' ), array(), null );
    wp_register_style( 'smaxpro-archive', get_theme_file_uri( '/css/archive.css' ), array(), null );
    wp_register_style( 'smaxpro-404', get_theme_file_uri( '/css/404.css' ), array(), null );
    wp_register_style( 'smaxpro-blogpost', get_theme_file_uri( '/css/single-blogpost.css' ), array(), null );
    wp_register_style( 'smaxpro-glide', get_theme_file_uri( '/js/glide/glide.core.min.css' ), array(), null );
    wp_register_style( 'smaxpro-mfp', get_theme_file_uri( '/js/mfp/magnific-popup.css' ), array(), null );
}
add_action( 'wp_enqueue_scripts', 'wtpro_styles' );



/**
 * Enqueue scripts.
 */
function wtpro_scripts() {

    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, false );
    wp_enqueue_script( 'jquery');

    wp_register_script('theia', get_theme_file_uri('/js/theia-sticky-sidebar.min.js'), false, null, false );
    wp_register_script('van', get_theme_file_uri('js/vanilla-tilt.min.js'), false, null, false );
    wp_register_script('tilt', get_theme_file_uri('js/tilt.js'), false, null, false );
    wp_register_script('glide', get_theme_file_uri('js/glide/glide.min.js'), false, null, false );
    wp_register_script('mfp', get_theme_file_uri('js/mfp/jquery.magnific-popup.min.js'), false, null, false );

    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', 'jquery', null, true );


}
add_action( 'wp_enqueue_scripts', 'wtpro_scripts' );

require get_template_directory() . '/pluggable/lazyload/lazyload.php';


