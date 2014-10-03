<footer>
  <div id="top-footer">
    <div class="container">
      <section id="dynamic-footer" class="pure-g-r">
        <div class="pure-u-3-5">
          <div class="l-box">
            <h3><?php bloginfo('name') ?></h3>
            <p>
              <?php if ( is_option_setted('footer_desc') ) { theme_footer_desc(); } ?>
            </p>
          </div>
        </div>
        <div class="pure-u-2-5">
          <div id="social-icons" class="l-box">
            <ul>
              <?php if ( is_option_setted('url_social_facebook') ) { ?>
                <li><a href="<?php theme_url_social_facebook(); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
              <?php } ?>

              <?php if ( is_option_setted('url_social_twitter') ) { ?>
                <li><a href="<?php theme_url_social_twitter(); ?>" title="Twitter" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
              <?php } ?>

              <?php if ( is_option_setted('url_social_gplus') ) { ?>
                <li><a href="<?php theme_url_social_gplus(); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
              <?php } ?>

              <?php if ( is_option_setted('url_social_linkedin') ) { ?>
                <li><a href="<?php theme_url_social_linkedin(); ?>" title="LinkedIn" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
              <?php } ?>

              <?php if ( is_option_setted('url_social_youtube') ) { ?>
                <li><a href="<?php theme_url_social_youtube(); ?>" title="YouTube" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
              <?php } ?>

              <?php if ( is_option_setted('url_social_flickr') ) { ?>
                <li><a href="<?php theme_url_social_flickr(); ?>" title="Flickr" target="_blank"><i class="fa fa-flickr"></i></a></li>
              <?php } ?>

              <?php if ( is_option_setted('url_social_pinterest') ) { ?>
                <li><a href="<?php theme_url_social_pinterest(); ?>" title="Pinterest" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
              <?php } ?>

              <?php if ( is_option_setted('url_social_instagram') ) { ?>
                <li><a href="<?php theme_url_social_instagram(); ?>" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <?php } ?>

              <?php if ( is_option_setted('webprofile_feedburner') ) { ?>
                <li><a href="http://feeds.feedburner.com/<?php theme_webprofile_feedburner(); ?>" class="rss-icon" target="_blank"><i class="fa fa-rss-square"></i></a></li>
              <?php } else { ?>
                <li><a href="<?php bloginfo('rss2_url'); ?>" class="rss-icon" target="_blank"><i class="fa fa-rss-square"></i></a></li>
              <?php } ?>

              <?php if ( is_option_setted('url_social_mail') ) { ?>
                <li><a href="mailto:<?php theme_url_social_mail(); ?>"><i class="fa fa-envelope"></i></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div id="bottom-footer">
    <div class="container">
      <div class="l-box">
        <p class="copyright">Copyright © <?php echo date("Y"); ?> | <?php bloginfo('name'); ?>, Todos os Direitos Reservados.</p>
      </div>
    </div>
  </div>
</footer>

<span id="scroll-top">
  <a class="scrollup" style="display: inline;">
    <i class="fa fa-caret-up"></i>
  </a>
</span>
</div><!--#main-->

<?php wp_footer(); ?>

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17276574-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>
