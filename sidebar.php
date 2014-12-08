<div id="sidebar" class="pure-u-1-3">
  <?php if ( is_archive() || is_search() && is_option_setted('webprofile_feedburner') ) { ?>
    <div class="white-container sidebar-widget">
      <h3>Assine nossos posts</h3>
      <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php theme_webprofile_feedburner(); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
        <p>
          <input type="text" placeholder="Endereço de email" name="email"/>
          <input type="submit" value="Enviar"/>
          <input type="hidden" value="<?php theme_webprofile_feedburner(); ?>" name="uri"/><input type="hidden" name="loc" value="pt_BR"/>
        </p>
      </form>
    </div>
  <?php } ?>
  <?php if ( is_option_setted('webprofile_twitter') || is_option_setted('webprofile_facebook') || is_option_setted('webprofile_gplus_id') || is_option_setted('webprofile_linkedin_id') ) { ?>
    <div class="white-container sidebar-widget">
      <h3>Siga nas redes sociais</h3>
      <?php if ( is_option_setted('webprofile_twitter') ) { ?>
        <p>
          <a href="http://twitter.com/<?php theme_webprofile_twitter(); ?>" class="twitter-follow-button" data-lang="pt">Siga @<?php theme_webprofile_twitter(); ?></a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
        </p>
      <?php } ?>
      <?php if ( is_option_setted('webprofile_linkedin_id') ) { ?>
        <p>
          <script src="//platform.linkedin.com/in.js" type="text/javascript">lang: pt_BR</script>
          <script type="IN/FollowCompany" data-id="<?php theme_webprofile_linkedin_id(); ?>" data-counter="right"></script>
        </p>
      <?php } ?>
      <?php if ( is_option_setted('webprofile_gplus_id') ) { ?>
        <p>
          <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
          <g:plus href="https://plus.google.com/<?php theme_webprofile_gplus_id(); ?>" width="200" height="69"></g:plus>
        </p>
      <?php } ?>
      <?php if ( is_option_setted('webprofile_facebook') ) { ?>
        <p>
          <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F<?php theme_webprofile_facebook(); ?>&amp;width=240&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=272" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:272px; background: #fff;" allowTransparency="true"></iframe>
        </p>
      <?php } ?>
    </div>
  <?php } ?>
  <?php dynamic_sidebar( 'sidebar' ); ?>
</div>
