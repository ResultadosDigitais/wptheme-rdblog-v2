<?php
//FB script
function facebook_script() {
  echo '<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=226762650709944";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, "script", "facebook-jssdk"));</script>';
}
add_action( 'wp_footer', 'facebook_script' );

//Google +1 script
function gplusone_script() {
  echo '<script type="text/javascript">
window.___gcfg = {lang: "pt-BR"};
(function() {
	var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
	po.src = "https://apis.google.com/js/plusone.js";
	var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
})();
</script>';
}
add_action( 'wp_footer', 'gplusone_script' );


function btn_vert_tweet() {
  global $post;
  echo '<p><a href="http://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="vertical" data-url="' . get_permalink($post->ID) . '" data-text="' . get_the_title($post->ID) . '" data-via="' . theme_webprofile_twitter(false) . '">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>';
}

function btn_vert_fblike() {
  global $post;
  echo '<p><div class="fb-like" data-send="false" data-href="' . get_permalink($post->ID) . '" data-layout="box_count" data-width="55" data-show-faces="false"></div></p>';
}

function btn_vert_gplusone() {
  global $post;
  echo '<p><div class="g-plusone" data-size="tall" data-href="' . get_permalink($post->ID) . '"></div></p>';
}

function btn_vert_linkedin() {
  global $post;
  echo '<p><script src="http://platform.linkedin.com/in.js" type="text/javascript"></script><script type="IN/Share" data-url="' . get_permalink($post->ID) . '" data-counter="top"></script></p>';
}
?>