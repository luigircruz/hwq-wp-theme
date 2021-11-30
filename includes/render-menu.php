<?php
function structure_menu_items_hierarchicaly($parent_id, $items) {
  $h = array();
  foreach($items as &$i) {
    if($i->menu_item_parent != $parent_id) continue;

    $item = array('item' => $i, 'children' => array());
    $item['children'] = structure_menu_items_hierarchicaly($i->ID, $items);
    $h[] = $item;
  }
  return $h;
}

function render_menu($menu_name, $base_class='nav-menu', $separator='__') {
  $locations = get_nav_menu_locations();
  // if not such menu rendering nothing
  if(!array_key_exists($menu_name, $locations)) return;

  $menu = wp_get_nav_menu_object($locations[$menu_name]);
  $menu_items = wp_get_nav_menu_items($menu->term_id);
  $hierachy = structure_menu_items_hierarchicaly(0, $menu_items);

  foreach($hierachy as &$i) {
    $item = &$i['item'];
    $href = !empty($item->url) ? $item->url : '';
    $title = apply_filters('the_title', $item->title, $item->ID);
    $active = ( (stripos($item->url, $_SERVER['SERVER_NAME']) !== false) && $_SERVER['REQUEST_URI'] == parse_url( $item->url, PHP_URL_PATH  )  ) ? $base_class . $separator . 'item--active' : '';
    $target = !empty($item->target) ? ' target="'.$item->target.'"' : '';

    echo sprintf("<a href='%s' class='" . $base_class . $separator . "item %s %s'%s>%s</a>", $href, $active, join(' ', $item->classes), $target, $title);
  }

}
?>
