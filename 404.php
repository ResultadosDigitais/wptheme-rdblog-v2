<?php get_header(); ?>

<div class="container">
  <div class="pure-g-r">
    <div id="content" class="pure-u-2-3">
      <article class="blog-post white-container">
        <h3>404 - Página não encontrada</h3>
        <p>Gostaria de voltar para a <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">página inicial?</a></p>
      </article>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>