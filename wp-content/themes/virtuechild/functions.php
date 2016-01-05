<?php

add_filter( 'kadence_portfolio_permalink_slug', 'custom_portfolio_slug');

function custom_portfolio_slug() {
	return 'travel-photos-videos';
}

// CHANGES WIDGET HEADINGS TO H3 (INSTEAD OF H1)

add_action( 'after_setup_theme', 'remove_parent_theme_features', 10 );

function remove_parent_theme_features() {
	remove_action( 'init', 'kadence_widgets_init' );
	add_action( 'init', 'tlo_kadence_widgets_init' );
}

function tlo_kadence_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Primary Sidebar', 'virtue' ),
    'id' => 'sidebar-primary',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => "</section>",
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>',
  ) );
}


?>