<?php
/**
* Create Logo Setting and Upload Control
*/
function oneoldbikerdude2022_customizer_settings($wp_customize) {

  $wp_customize->add_section( 'oneoldbikerdude2022_homepage_hero_image' , array(
    'title'      => __( 'Homepage Hero Image', 'oneoldbikerdude2022' ),
    'priority'   => 30,
  ) );
}
add_action('customize_register', 'oneoldbikerdude2022_customizer_settings');