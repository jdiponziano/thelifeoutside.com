<?php

function virtue_register_sidebar($name, $id){
  register_sidebar(array('name'=>$name,
    'id' => $id,
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget' => '</div></section>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
}
add_action('widgets_init', 'virtue_register_sidebars');


?>