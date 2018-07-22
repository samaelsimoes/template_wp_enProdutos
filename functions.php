<?php
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'menus' );
add_theme_support( 'widgets' );

//permite upload de arquivos svg
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

//cria um menu de navegação
register_nav_menus(
  array( 'responsive' => __( 'responsive', 'theme' ) )
);

register_nav_menus(
  array( 'menu-produtos' => __( 'menu-produtos', 'theme' ) )
);

register_nav_menus(
  array( 'main-menu' => __( 'main-menu', 'theme' ) )
);

register_nav_menus(
  array( 'main-footer' => __( 'main-footer', 'theme' ) )
);

//adiciona campo de descrição das páginas
add_action('init', 'theme_custom_init');


//post supports
function theme_custom_init() {
  add_post_type_support( 'page', 'excerpt' );
  add_post_type_support( 'post', 'excerpt' );
}

//cria uma area de widgets
function theme_widgets_init() {
  register_sidebar( array (
  'name' => __( 'Widgets', 'theme' ),
  'id' => 'primary-widget-area',
  'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
  'after_widget' => "</li>",
  'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

//cria o menu personalizado responsivo
class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu{
  public function start_lvl(&$output, $depth = 0, $args = Array()){}
  
  public function end_lvl(&$output, $depth = 0, $args = Array()){}

  public function start_el(&$output, $item, $depth = 0, $args = Array(), $id = 0){
    $item->title = str_repeat("&nbsp;", $depth * 4) . $item->title;
    parent::start_el($output, $item, $depth, $args);
    $output = str_replace('<li', '<option', $output);
    $output = str_replace('><a href="', ' value="', $output);
  }

  public function end_el(&$output, $item, $depth = 0, $args = Array()){
    $output .= "</option>\n";
  }
}

function custom_post_type_duvidasFrequentes() {

  $labels = array(

    'name'                => _x( 'DuvidasFrequentes', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'DuvidasFrequentes', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Duvidas frequentes','text_domain' ),
  );

  $args = array(

    'label'               => __( 'DuvidasFrequentes', 'text_domain' ),
    'description'         => __( 'Product information pages', 'text_domain' ),
    'labels'              => $labels,
    'taxonomies'          => array( ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'supports'        => array('title', 'editor', 'post-formats')
  );
  
  register_post_type( 'DuvidasFrequentes', $args );
}

add_action( 'init', 'custom_post_type_duvidasFrequentes', 0 );


function custom_post_type_conteudos() {

  $labels = array(

    'name'                => _x( 'conteudos', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'conteudos', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Blog','text_domain' ),
  );

  $args = array(

    'label'               => __( 'conteudos', 'text_domain' ),
    'description'         => __( 'Product information pages', 'text_domain' ),
    'labels'              => $labels,
    'taxonomies'          => array( ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'supports'        => array('title', 'editor', 'post-formats')
  );
  
  register_post_type( 'conteudos', $args );
}

add_action( 'init', 'custom_post_type_conteudos', 0 );


function custom_post_type_quemSomos() {

  $labels = array(

    'name'                => _x( 'QuemSomos', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'QuemSomos', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'QuemSomos','text_domain' ),
  );

  $args = array(

    'label'               => __( 'QuemSomos', 'text_domain' ),
    'description'         => __( 'Product information pages', 'text_domain' ),
    'labels'              => $labels,
    'taxonomies'          => array( ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'supports'        => array('title', 'editor', 'post-formats')
  );
  
  register_post_type( 'quemSomos', $args );
}

add_action( 'init', 'custom_post_type_quemSomos', 0 );
?>
