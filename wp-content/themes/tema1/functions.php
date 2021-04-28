<?php
 if(function_exists('register_nav_menus')){
     register_nav_menus(array('superior'=>'Menu Principal Superior'));
 }

 /**Add clase de bootstrapt */
 add_filter('nav_menu_link_attributes','clase_menu_invento',10,3);

 function clase_menu_invento($atts,$item,$args){
     $class='nav-link';
     $atts['class']=$class;
     return $atts;
 }
 
 /*Agregar imagen destacada */
if (function_exists('add_theme_support')){/**Si existe soporte agg */
    add_theme_support('post-thumbnails');
}

/*Agregando sidebar */
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
?>

