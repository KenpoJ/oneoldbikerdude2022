      <footer id="footer" role="contentinfo">

        <div id="footer-menu" class="">
          <?php wp_nav_menu( 
            array( 
              'theme_location' => 'footer-menu', 
              'link_before' => '<span itemprop="name">', 
              'link_after' => '</span>' 
            ) 
          ); ?>
        </div>

        <div class="social-links">
          <a href="https://www.facebook.com/OneOldBikerDude" title="Facebook Page" target="_blank" rel="noopener"><i class="fab fa-facebook-square fa-2x"></i></a>
          <a href="https://www.youtube.com/channel/UCV4Lej7hP67avPWDL8WwW6g" title="YouTube Channel" target="_blank" rel="noopener"><i class="fab fa-youtube fa-2x"></i></a>
          <a href="https://www.instagram.com/oneoldbikerdude/" title="Instagram Account" target="_blank" rel="noopener"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="https://twitter.com/OneOldBikerDud1" title="Twitter Page" target="_blank" rel="noopener"><i class="fab fa-twitter-square fa-2x"></i></a>
        </div>

        <div id="copyright">
          &copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        </div>

      </footer>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>