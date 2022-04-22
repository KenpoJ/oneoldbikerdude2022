<div id="sidebar-default">

  <div class="sidebar-widget search-container">
    <?php get_search_form(); ?>
  </div>

  <div class="sidebar-widget sidebar-bio">
    <img class="img-round" src="/wp-content/uploads/2020/12/jason-lyman-one-old-biker-dude-about-e1606972299181.jpg">
    <h3>One Old Biker Dude</h3>
    <ul class="sidebar-social">
      <li>
        <a href="https://www.facebook.com/OneOldBikerDude/" target="_blank"><i class="fab fa-facebook-square fa-3x" aria-hidden="true"></i></a>
      </li>
      <li>
        <a href="https://www.instagram.com/oneoldbikerdude/" target="_blank"><i class="fab fa-instagram-square fa-3x" aria-hidden="true"></i></a>
      </li>
      <li>
        <a href="https://twitter.com/OneOldBikerDud1" target="_blank"><i class="fab fa-twitter-square fa-3x" aria-hidden="true"></i></a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UCV4Lej7hP67avPWDL8WwW6g" target="_blank"><i class="fab fa-youtube-square fa-3x" aria-hidden="true"></i></a>
      </li>
    </ul>
  </div>

  <div class="sidebar-widget recent-posts-container">
    <h3>Recent Posts</h3>
    <?php 
    $args = array(
      'numberposts' => 5
    );
    echo '<ul>';
    $recent_posts = wp_get_recent_posts($args); 
    foreach($recent_posts as $post) {
      echo '<li><span class="date">'.get_the_date().'</span><br><a href="' . get_permalink($post["ID"]) . '">' . ( __($post["post_title"])).'</a></li> ';
    }
    echo '</ul>';
    ?>
  </div>

  <div class="sidebar-widget recent-comments-container">
    <h3>Recent Comments</h3>
    
    <?php bg_recent_comments(); ?>
  </div>

  <div class="sidebar-widget product-preview">
    <h3>Popular Products</h3>
    <ul class="products">
      <?php
        $args = array(
          'post_type' => 'product',
          'posts_per_page' => 6,
          'orderby' => 'popularity'
          );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
          while ( $loop->have_posts() ) : $loop->the_post();
            wc_get_template_part( 'content', 'product' );
          endwhile;
        } else {
          echo __( 'No products found' );
        }
        wp_reset_postdata();
      ?>
    </ul>

  </div>

</div>