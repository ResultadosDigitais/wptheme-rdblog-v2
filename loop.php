<?php
  global $wpdb;
  if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    $class  = get_post_format();
    $class .= 0 === ( ++$wpdb->current_post % 2 ) ? 'clear-post' : '';
?>

<div <?php post_class( "{$class}" ); ?>>
  <article class="blog-post white-container">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="excerpt">
      <?php the_excerpt(); ?>
    </div>
    <div class="pure-g-r">
      <div class="pure-u-2-3">
        <div class="post-meta">
          <span class="author">
            <i class="fa fa-user"></i>
            <?php the_author(); ?>
          </span>
          <span class="date">
            <i class="fa fa-calendar"></i>
            <?php the_time('d/m/Y') ?>
          </span>
        </div>
      </div>
      <div class="pure-u-1-3">
        <a href="<?php the_permalink(); ?>" class="read-more">
          Leia Mais
        </a>
      </div>
    </div>
  </article>
</div>
<?php } } ?>

<?php rd_pagination(); ?>
