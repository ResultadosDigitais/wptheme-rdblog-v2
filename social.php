<aside class="social">
  <?php if (function_exists('btn_vert_tweet')) : ?>
    <div class="social-media"><?php btn_vert_tweet(); ?></div>
  <?php endif; ?>
  <?php if (function_exists('btn_vert_fblike')) : ?>
    <div class="social-media"><?php btn_vert_fblike(); ?></div>
  <?php endif; ?>
  <?php if (function_exists('btn_vert_gplusone')) : ?>
    <div class="social-media"><?php btn_vert_gplusone(); ?></div>
  <?php endif; ?>
  <?php if (function_exists('btn_vert_linkedin')) : ?>
    <div class="social-media"><?php btn_vert_linkedin(); ?></div>
  <?php endif; ?>
  <?php if (function_exists('wp_email')) : ?>
    <div class="social-media"><?php email_link(); ?></div>
  <?php endif; ?>
</aside>
