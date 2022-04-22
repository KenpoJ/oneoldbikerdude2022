<?php
/**
* Template Name: Shop Template
*
* @package WordPress
* @subpackage OneOldBikerDude2022
* @since One Old Biker Dude 2022 1.0
*/
get_header();
?>

<div class="container page-container">

  <main id="content" class="store-container" role="main">

    <?php echo do_shortcode( '[products limit="9" columns="3"]' ); ?>

    <?php //edit_post_link(); ?>
  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>