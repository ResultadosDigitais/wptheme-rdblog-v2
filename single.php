<?php get_header(); ?>

<div class="container">
  <div class="pure-g-r">
    <?php get_sidebar(); ?>
    <div id="content" class="pure-u-17-24 single-post">
      <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="blog-post white-container">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
          <h3><?php the_title(); ?></h3>
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
          <?php include (TEMPLATEPATH . '/social.php'); ?>
          <div class="content"><?php the_content(); ?></div>
          <?php echo get_post_meta($post->ID, 'banner-cta', true) ?>
          <div class="post-meta" style="margin: 0;">
            <span class="category">
              <i class="fa fa-folder-open"></i>
              <?php the_category(', ') ?>
            </span>
          </div>
        </article>
        <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
      <?php endwhile; else : ?>
        <article class="blog-post white-container">
          Nenhuma publicação encontrada.
        </article>
      <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
