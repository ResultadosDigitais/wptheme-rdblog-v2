<?php get_header(); ?>

<div class="container">
  <div class="pure-g-r">
    <div id="content" class="pure-u-2-3">
      <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="blog-post white-container">
          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        </article>
      <?php endwhile; else : ?>
        <article class="blog-post white-container">
          Nenhuma publicação encontrada.
        </article>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
