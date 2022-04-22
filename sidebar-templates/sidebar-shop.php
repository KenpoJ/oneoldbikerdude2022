<div id="sidebar-default">

  <div class="sidebar-widget search-container">
    <?php get_search_form(); ?>
  </div>

  <?php //echo do_shortcode('[products limit="4" on_sale]') ?>

  <h3>Featured Products</h3>
  <?php echo do_shortcode('[products limit="3" featured_products]') ?>

  <h3>Categories</h3>
  <?php echo do_shortcode('[product_categories columns="2" parent="0"]'); ?>

</div>