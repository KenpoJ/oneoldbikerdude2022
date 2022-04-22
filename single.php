<?php get_header(); ?>

<div class="container page-container">

  <main id="content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'loop-templates/content', 'single' ); ?>

      <?php if ( comments_open() && !post_password_required() ) { 
        get_template_part( 'includes/inc', 'comments' ); 
      } ?>

      <?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
      
    <?php endwhile; endif; ?>

    <footer class="footer">
      <?php get_template_part( 'nav', 'below-single' ); ?>
    </footer>

  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>