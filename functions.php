<?php
/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage One Old Biker Dude 2022
 * @since One Old Biker Dude 2022 1.0
 */


function my_theme_enqueue_styles() {
  $parenthandle = 'generic-styles'; 
  $theme = wp_get_theme();
  wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
      );
  wp_enqueue_style( 'child-style', get_stylesheet_uri(),
    array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
      );
  wp_enqueue_script( 'script', 'https://kit.fontawesome.com/53f8f7e502.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 99 );

function add_custom_menu_locations() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'add_custom_menu_locations' );

/**
* Customizer additions.
*/
require 'includes/customizer.php';

if(! function_exists('get_star_rating')) {
  function get_star_rating($num) {
        // echo gettype($num);
    $rating = '';

    if($num == '.5') {
      $rating = '<i class="fas fa-star-half-alt"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>';
    }
    elseif($num == '1') {
      $rating = '<i class="fas fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>';
    }
    elseif($num == '1.5') {
      $rating = '<i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>';
    }
    elseif($num == '2') {
      $rating = '<i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>';
    }
    elseif($num == '2.5') {
      $rating = '<i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>';
    }
    elseif($num == '3') {
      $rating = '<i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>';
    }
    elseif($num == '3.5') {
      $rating = '<i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <i class="far fa-star"></i>';
    }
    elseif($num == '4') {
      $rating = '<i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="far fa-star"></i>';
    }
    elseif($num == '4.5') {
      $rating = '<i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>';
    }
    elseif($num == '5') {
      $rating = '<i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>';
    }

    return $rating;
  }
}

/* @author Baki Goxhaj
 * @link http://wplancer.com/how-to-display-recent-comments-without-using-a-plugin-or-widget/ 
 *
 * @param string/integer $no_comments
 * @param string/integer $comment_len
 * @param string/integer $avatar_size
 * 
 * @echo string $comm
 */
function bg_recent_comments($no_comments = 5, $comment_len = 80, $avatar_size = 48) {
  $comments_query = new WP_Comment_Query();
  $comments = $comments_query->query( array( 'number' => $no_comments ) );
  $comm = '';
  if ( $comments ) : foreach ( $comments as $comment ) :
    $comm .= '<li class="grid">';
    $comm .= '<div class="comment-img">';
    $comm .= get_avatar( $comment->comment_author_email, $avatar_size );
    $comm .= '</div>';
    $comm .= '<div class="comment-text">';
    $comm .= '<a class="author" href="' . get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID . '">';
    $comm .= get_comment_author( $comment->comment_ID ) . ':</a> ';
    $comm .= '<p>' . strip_tags( substr( apply_filters( 'get_comment_text', $comment->comment_content ), 0, $comment_len ) ) . '...</p></div></li>';
  endforeach; else :
  $comm .= 'No comments.';
endif;
echo $comm;
}

function woocommerce_product_category( $args = array() ) {
    $woocommerce_category_id = get_queried_object_id();
  $args = array(
      'parent' => $woocommerce_category_id
  );
  $cats = get_terms( 'product_cat', $args );
  if ( $cats ) {
      echo '<ul id="wc-categories" class="wc-categories">';
      foreach ( $cats as $cat ) {
          echo '<li class="wc-product-category-page">';
              echo '<a href="' .  esc_url( get_term_link( $cat ) ) . '" class="btn-filter ' . $cat->slug . '">';
                echo $cat->name;
              echo '</a>';
          echo '</li>';
      }
      echo '</ul>';
  }
}
add_action( 'woocommerce_archive_description', 'woocommerce_product_category', 10 );

/**
 * Rename "home" in breadcrumb
 */
function wcc_change_breadcrumb_home_text( $defaults ) {
  // Change the breadcrumb home text from 'Home' to 'Apartment'
  $defaults['home'] = 'Store';
  return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );

/**
 * Replace the home link URL
 */
function woo_custom_breadrumb_home_url() {
    return '/shop/';
}
add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );

