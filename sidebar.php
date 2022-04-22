<aside class="secondary-column" role="complementary">

  <?php

  if(is_single() && in_category('Rides')) {
    get_template_part('sidebar-templates/sidebar', 'ride');
  } else if(is_shop() || is_product_category() || is_product()) {
    get_template_part('sidebar-templates/sidebar', 'shop');
  } else {
    get_template_part('sidebar-templates/sidebar', 'default');
  }

  ?>
</aside>