<?php
require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
register_nav_menus(
    array(
        'header-upper-menu' => 'Header upper Menu',
        'header-menu' => 'Header Menu',
        'footer-menu1' => 'footer Menu1',
        'footer-menu2' => 'footer Menu2',
      
    )
);
function limit_content_chr($content, $limit = 100)
{
	return mb_strimwidth(strip_tags($content), 0, $limit, '...');
}
add_theme_support('post-thumbnails' );
add_theme_support( 'title-tag');
add_action('init', 'gp_register_taxonomy_for_object_type');
function gp_register_taxonomy_for_object_type()
{
    register_taxonomy_for_object_type('post_tag', 'products');
};
function twenty_twenty_one_widgets_init()
{

    register_sidebar(
        array(
            'name'          => esc_html__('Footer 1', 'twentytwentyone'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__('Footer 2', 'twentytwentyone'),
            'id'            => 'sidebar-2',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h5 class="">',
            'after_title'   => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__('Footer 3', 'twentytwentyone'),
            'id'            => 'sidebar-3',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h5 class="">',
            'after_title'   => '</h5>',
        )
    );
}
add_action('widgets_init', 'twenty_twenty_one_widgets_init');

