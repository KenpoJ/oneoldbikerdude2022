<?php get_header(); ?>
<main id="content" role="main">
<?php if ( have_posts() ) : custom_post_types_get_custom_template(); endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</main>
<?php get_footer(); ?>