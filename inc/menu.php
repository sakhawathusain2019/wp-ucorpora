<?php
function ucorpa_nav_menu(){
    wp_nav_menu(array(
       'theme_location' => 'main-menu',
        'container' => 'ul',
        'menu_class' => 'nav mobile-menu navbar-nav',
        'menu_id' => 'nav',
    ));
}
// replace Sub Menu Class for Wp Default sub menu.
function change_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown" /',$menu);
    $menu = preg_replace('/ class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-5"/','/ class="current" /',$menu);
    return $menu;
}
add_filter('wp_nav_menu','change_submenu_class');
