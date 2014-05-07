<?php function og_facebook() {
  $thumb = get_the_post_thumbnail($post->ID);
  $pattern= "/(?<=src=['|\"])[^'|\"]*?(?=['|\"])/i";
  preg_match($pattern, $thumb, $thePath);
  $theSrc = $thePath[0];

  echo '<meta property="fb:admins" content="866105373,1204665048" />';
  echo '<meta propert="og:site_name" content="' . bloginfo('name'); . '" />';
}
add_action( 'wp_footer', 'og_facebook' );
?>

<?php if (is_single()) { ?>
  <meta property="og:title" content="<?php echo get_the_title(); ?>"/>
  <meta property="og:type" content="article"/>
  <meta property="og:image" content="<?php echo $theSrc; ?>" />
  <meta property="og:url" content="<?php the_permalink() ?>" />
<?php } else { ?>
  <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
  <?php if ( is_option_setted('logo_url') ) { ?>
    <meta property="og:image" content="<?php theme_logo_url(); ?>" />
  <?php } ?>
  <?php if ( is_option_setted('header_desc') ) { ?>
    <meta property="og:description" content="<?php theme_header_desc(); ?>" />
  <?php } ?>
  <meta property="og:url" content="<?php bloginfo('url'); ?>" />
<?php } ?>