<?php

	function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'primary') {
    $classes[] = 'mamurjor class include files';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);


function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="mamurjor class include files"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');


?>