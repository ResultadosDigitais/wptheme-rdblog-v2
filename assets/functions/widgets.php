<?php
function rd_widgets() {
  register_sidebar( array(
    'name' => 'Barra Lateral',
    'id' => 'sidebar',
    'before_widget' => '<div class="white-container sidebar-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
}

add_action( 'widgets_init', 'rd_widgets' );
?>