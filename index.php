<?php get_header(); ?>

<?php if ( is_home() ) { ?>
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
          <div class="container">
            <h1><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            <a href="<?php the_permalink(); ?>" class="btn" alt="<?php the_title(); ?>">Saiba mais</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
<?php } else {} ?>

<div class="container">
  <div class="pure-g-r">

    <?php get_sidebar(); ?>

    <div id="content" class="pure-u-17-24 loop-posts">
      <?php include (TEMPLATEPATH . '/loop.php'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
