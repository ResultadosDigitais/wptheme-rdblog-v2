<aside class="social">
  <?php if (function_exists('btn_vert_tweet')) : ?>
    <?php btn_vert_tweet(); ?>
  <?php endif; ?>
  <?php if (function_exists('btn_vert_fblike')) : ?>
    <?php btn_vert_fblike(); ?>
  <?php endif; ?>
  <?php if (function_exists('btn_vert_gplusone')) : ?>
    <?php btn_vert_gplusone(); ?>
  <?php endif; ?>
  <?php if (function_exists('btn_vert_linkedin')) : ?>
    <?php btn_vert_linkedin(); ?>
  <?php endif; ?>
  <?php if (function_exists('wp_email')) : ?>
    <?php email_link(); ?>
  <?php endif; ?>
</aside>