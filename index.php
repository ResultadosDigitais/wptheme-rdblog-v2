<?php get_header(); ?>

<div id="carousel" class="owl-carousel">
  <?php $featured_posts = new WP_Query( 'category_name=featured&posts_per_page=3' ); ?>
  <?php while ( $featured_posts->have_posts() ) : $featured_posts->the_post(); ?>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <div class="slide" style="background-image:url('<?php echo $image[0]; ?>');">
    <?php else : ?>
      <div class="slide">
    <?php endif; ?>
      <div class="about">
        <h1><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <a href="<?php the_permalink(); ?>" class="btn" alt="<?php the_title(); ?>">Saiba mais</a>
      </div>
    </div>
  <?php endwhile; ?>
</div>

<div class="container">
  <div class="pure-g-r">

    <?php get_sidebar(); ?>

    <div id="content" class="pure-u-4-5 loop-posts">
      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
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
                <span class="category">
                  <i class="fa fa-folder-open"></i>
                  <?php the_category(', ') ?>
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
      <?php endwhile; ?>

      <?php rd_pagination(); ?>

      <?php else : ?>
        Nenhum resultado encontrado.
      <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
