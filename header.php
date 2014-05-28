<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>

  <meta http-equiv="imagetoolbar" content="no" />
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <?php wp_head(); ?>

  <?php if ( is_option_setted('webprofile_feedburner') ) { ?>
    <link rel="alternate" type="application/rss+xml" title="Feed RSS" href="http://feeds.feedburner.com/<?php theme_webprofile_feedburner(); ?>" />
  <?php } else { ?>
    <link rel="alternate" type="application/rss+xml" title="Feed RSS" href="<?php bloginfo('rss2_url'); ?>" />
  <?php } ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/font-awesome.min.css" />

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/mexin.js"></script>
</head>
<body>

<div id="main">
  <header id="top-header">
    <div class="container">
      <div class="pure-g-r">
        <div class="pure-u-1-3">
          <div class="l-box">
            <hgroup>
              <?php if ( is_option_setted('logo_url') ) { ?>
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                  <img src="<?php theme_logo_url(); ?>" alt="<?php bloginfo('name'); ?>" />
                </a>
              <?php } else { ?>
                <h1><?php bloginfo('name'); ?></h1>
              <?php } ?>
            </hgroup>
          </div>
        </div>

        <div class="pure-u-2-3">
          <div class="l-box">
            <nav id="primary-nav">
              <?php wp_nav_menu( array(
                  'theme_location' => 'header-menu',
                  'menu_class' => '',
                  'menu_id' => ''
                ));
              ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

<?php if (is_archive()) { ?>

  <section id="headline">
    <div class="container">
      <h3>
        <?php if (is_category()) { ?>
          <?php single_cat_title(); ?>
        <?php } elseif( is_tag() ) { ?>
          Tag: <?php single_tag_title(); ?>
        <?php } elseif (is_day()) { ?>
          Arquivo: <?php the_time('F jS, Y'); ?>
        <?php } elseif (is_month()) { ?>
          Arquivo: <?php the_time('F, Y'); ?>
        <?php } elseif (is_year()) { ?>
          Arquivo: <?php the_time('Y'); ?>
        <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
          Blog
        <?php } ?>
      </h3>
    </div>
  </section>

<?php } elseif( is_search() ) { ?>

  <section id="headline">
    <div class="container">
      <h3>Resultados da Pesquisa: "<?php echo get_search_query(); ?>"</h3>
    </div>
  </section>

<?php } else { ?>

  <section id="about-subscribe">
    <div class="container">
      <div class="pure-g-r">
        <div class="pure-u-2-3">
          <div class="l-box">
            <h2><?php if ( is_option_setted('header_desc') ) { theme_header_desc(); } ?></h2>
          </div>
        </div>
        <div class="pure-u-1-3">
          <div class="l-box">
            <?php if ( is_option_setted('webprofile_feedburner') ) { ?>
              <h3>Assine nossos posts</h3>
              <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php theme_webprofile_feedburner(); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                <p>
                  <input type="text" placeholder="Endereço de email" name="email"/>
                  <input type="submit" value="Enviar"/>
                  <input type="hidden" value="<?php theme_webprofile_feedburner(); ?>" name="uri"/><input type="hidden" name="loc" value="pt_BR"/>
                </p>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php } ?>