<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <header class="entry-header">

    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <?php get_template_part( 'entry', 'meta' ); ?><!-- .entry-meta -->

  </header><!-- .entry-header -->

  <?php
  if(!in_category('Rides')) {
    the_post_thumbnail('large', array('class' => 'img-fluid text-center')); 
  }
  ?>

  <div class="entry-content">

    <?php the_content(); ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">

    <?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-## -->

