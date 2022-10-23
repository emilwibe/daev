<?php
if (!defined('ABSPATH')) {
  exit;
}
?>
<nav class="flex">
<ul class="mode-toggle-container">

  <li>
    <button class="mode-toggle mode-toggle-dark" id="mode-toggle-dark"></button>
  </li>
</ul>
</nav>
  

<?php
wp_nav_menu([
  'menu' => 'nav_primary',
  'container' => 'nav',
  'container_class' => 'nav primary',
  'container_id' => 'nav-primary',
  'echo'  => true,
  'fallback_cb' => 'wp_page_menu',
  'before'  => '',
  'after' => '',
  'link_before' => '',
  'link_after'  => '',
  'items_wrap'  => '<ul id="%1$s" class="%2$s lg-flex lg-static lg-p-0">%3$s</ul>',
  'item_spacing'  => 'preserve',
  'depth' => 0,
  'walker'  => new Daev_Nav_Primary_Walker(),
  'theme_location' => '',
]);

get_template_part( 'tp/nav/nav-toggle' );