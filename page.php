<?php get_header(); ?>

<div class="container">
  <div class="pure-g-r">
    <?php get_sidebar(); ?>
    <div id="content" class="pure-u-4-5">
      <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="blog-post white-container">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </article>
      <?php endwhile; else : ?>
        <article class="blog-post white-container">
          Nenhuma publicação encontrada.
        </article>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
