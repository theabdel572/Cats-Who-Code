<?php
register_sidebar(array(
    'name'          => _('Sidebar cat blog 1'),
    'id'            => 'cat-sidebar-1',
    'description'   => 'Widgets here will be on the right of the site.',
    'class'         => '',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div><!-- .widget -->',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

register_sidebar(array(
    'name'          => _('Sidebar cat blog 2'),
    'id'            => 'cat-sidebar-2',
    'description'   => 'Widgets here will be on the right of the site.',
    'class'         => '',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div><!-- .widget -->',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

register_nav_menu('main', 'Main navigation menu');
?>