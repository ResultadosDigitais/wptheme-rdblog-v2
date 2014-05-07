<?php if ( post_password_required() ) { return; } ?>

<div id="comments" class="white-container">

  <?php if ( have_comments() ) : ?>

  <h2>Comentários</h2>

  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav id="comment-nav-above" class="comment-navigation" role="navigation">
      <h1>Navegação de Comentários</h1>
      <div class="nav-previous">
        <?php previous_comments_link( __( '&larr; Comentários anteriores', 'rd-mkt' ) ); ?>
      </div>
      <div class="nav-next">
        <?php next_comments_link( __( 'Comentários recentes &rarr;', 'rd-mkt' ) ); ?>
      </div>
    </nav>
  <?php endif; ?>

  <ol class="commentlist">
    <?php
      wp_list_comments( array(
        'style'      => 'ol',
        'short_ping' => true,
        'avatar_size'=> 50,
      ) );
    ?>
  </ol>

  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav id="comment-nav-below" class="comment-navigation" role="navigation">
      <h1>Navegação de Comentários</h1>
      <div class="nav-previous">
        <?php previous_comments_link( __( '&larr; Comentários anteriores', 'rd-mkt' ) ); ?>
      </div>
      <div class="nav-next">
        <?php next_comments_link( __( 'Comentários recentes &rarr;', 'rd-mkt' ) ); ?>
      </div>
    </nav>
  <?php endif; ?>

  <?php if ( ! comments_open() ) : ?>
    <p class="no-comments">Comentários fechados.</p>
  <?php endif; ?>

  <?php endif; ?>

  <?php comment_form(); ?>

</div>
