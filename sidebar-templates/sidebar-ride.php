<div id="sidebar-ride">

  <div class="sidebar-widget ride-ratings">
    <h3>Ratings</h3>
    <div class="flex">
      <div class="rating-container">
        <h4 class="rating-title">Overall</h4>
        <div class="rating-level">
          <? $overall = get_field('rating-overall'); ?>
          <? //echo $overall; ?>
          <? echo get_star_rating($overall); ?>
        </div>
      </div>
      <div class="rating-container">
        <h4 class="rating-title">Enjoyment</h4>
        <div class="rating-level">
          <? $enjoyment = get_field('rating-enjoyment'); ?>
          <? //echo $enjoyment; ?>
          <? echo get_star_rating($enjoyment); ?>
        </div>
      </div>
      <div class="rating-container">
        <h4 class="rating-title">Scenery</h4>
        <div class="rating-level">
          <? $scenery = get_field('rating-scenery'); ?>
          <? //echo $scenery; ?>
          <? echo get_star_rating($scenery); ?>
        </div>
      </div>
      <div class="rating-container">
        <h4 class="rating-title">Tourism</h4>
        <div class="rating-level">
          <? $tourism = get_field('rating-tourism'); ?>
          <? //echo $tourism; ?>
          <? echo get_star_rating($tourism); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="sidebar-widget ride-map">
    <?
    $image = get_field('ride_map');
    $size = $image['sizes'][ 'medium' ];
    if( !empty( $image ) ): ?>
      <a href="<?php echo esc_url($image['sizes'][ 'large' ]); ?>" data-featherlight="image"><img class="img-fluid" src="<?php echo esc_url($size); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></a>
    <?php endif; ?>
  </div>

  <div class="sidebar-widget ride-elevation">
    <?
    $image = get_field('elevation');
    $size = $image['sizes'][ 'medium' ];
    if( !empty( $image ) ): ?>
      <a href="<?php echo esc_url($image['sizes'][ 'large' ]); ?>" data-featherlight="image"><img class="img-fluid" src="<?php echo esc_url($size); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></a>
    <?php endif; ?>
  </div>

  <?php if (get_field('directions')) { ?>

    <div class="sidebar-widget ride-directions">
      <h3>Directions</h3>
      <?php the_field('directions'); ?>
    </div>

  <?php } ?>

  <div class="popular-posts">
    <h3>Popular Posts</h3>
    <?php dynamic_sidebar( 'left-sidebar' );?>
      <!-- <ul class="list-unstyled">
        <li><a class="popular-link" href="/rides/spirit-lake-highway-to-mount-st-helens/">Spirit Lake Highway to Mt St Helens</a></li>
        <li><a class="popular-link" href="/rides/silver-falls-state-park-motorcycle-ride/">Silver Falls State Park Motorcycle Ride</a></li>
        <li><a class="popular-link" href="/rides/oregon-mount-hood-loop-motorcycle-ride/">Oregon Mount Hood Loop Motorcycle Ride</a></li>
        <li><a class="popular-link" href="/muscular-dystrophy/2021-mda-virtual-muscle-walk/">2021 MDA Virtual Muscle Walk</a></li>
        <li><a class="popular-link" href="/rides/larch-mountain-and-sherrard-point/">Larch Mountain and Sherrard Point</a></li>
        <li><a class="popular-link" href="/rides/washington-state-stonehenge-war-memorial/">Washington State Stonehenge War Memorial</a></li>
      </ul> -->
    </div>

  </div>