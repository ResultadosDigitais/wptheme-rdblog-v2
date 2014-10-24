<?php get_header(); ?>

<div class="container">
  <div class="pure-g-r">
    <?php get_sidebar(); ?>
    <div id="content" class="pure-u-17-24 loop-posts">
      <?php include (TEMPLATEPATH . '/loop.php'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
