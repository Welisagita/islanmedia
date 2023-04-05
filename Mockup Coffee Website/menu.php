<?php
$menu_data = file_get_contents('menu.json');
$menu_items = json_decode($menu_data);

foreach ($menu_items->items as $item) {
    echo '<div class="menu-item">';
    echo '<img src="images/' . $item->image . '">';
    echo '<h3>' . $item->name . '</h3>';
    echo '</div>';
}
?>