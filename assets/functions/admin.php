<?php

if (!function_exists('get_theme_option')) {
  function get_theme_option($option = '', $_echo = true) {
    $options = get_option('rd-mkt_theme_options');
    $r = $options[$option];
    if ($_echo) { echo $r; } else { return $r; }
  }
}

if (!function_exists('theme_logo_url')) {
  function theme_logo_url($_echo = true) {
    get_theme_option('logo_url', $_echo);
  }
}

if (!function_exists('theme_header_desc')) {
  function theme_header_desc($_echo = true) {
    get_theme_option('header_desc', $_echo);
  }
}

if (!function_exists('theme_footer_desc')) {
  function theme_footer_desc($_echo = true) {
    get_theme_option('footer_desc', $_echo);
  }
}

if (!function_exists('theme_webprofile_twitter')) {
  function theme_webprofile_twitter($_echo = true) {
    get_theme_option('webprofile_twitter', $_echo);
  }
}

if (!function_exists('theme_webprofile_facebook')) {
  function theme_webprofile_facebook($_echo = true) {
    get_theme_option('webprofile_facebook', $_echo);
  }
}

if (!function_exists('theme_webprofile_linkedin_id')) {
  function theme_webprofile_linkedin_id($_echo = true) {
    get_theme_option('webprofile_linkedin_id', $_echo);
  }
}

if (!function_exists('theme_webprofile_gplus_id')) {
  function theme_webprofile_gplus_id($_echo = true) {
    get_theme_option('webprofile_gplus_id', $_echo);
  }
}

if (!function_exists('theme_webprofile_form')) {
  function theme_webprofile_form($_echo = true) {
    get_theme_option('webprofile_form', $_echo);
  }
}

if (!function_exists('theme_url_social_facebook')) {
  function theme_url_social_facebook($_echo = true) {
    get_theme_option('url_social_facebook', $_echo);
  }
}

if (!function_exists('theme_url_social_twitter')) {
  function theme_url_social_twitter($_echo = true) {
    get_theme_option('url_social_twitter', $_echo);
  }
}

if (!function_exists('theme_url_social_gplus')) {
  function theme_url_social_gplus($_echo = true) {
    get_theme_option('url_social_gplus', $_echo);
  }
}

if (!function_exists('theme_url_social_linkedin')) {
  function theme_url_social_linkedin($_echo = true) {
    get_theme_option('url_social_linkedin', $_echo);
  }
}

if (!function_exists('theme_url_social_youtube')) {
  function theme_url_social_youtube($_echo = true) {
    get_theme_option('url_social_youtube', $_echo);
  }
}

if (!function_exists('theme_url_social_flickr')) {
  function theme_url_social_flickr($_echo = true) {
    get_theme_option('url_social_flickr', $_echo);
  }
}

if (!function_exists('theme_url_social_pinterest')) {
  function theme_url_social_pinterest($_echo = true) {
    get_theme_option('url_social_pinterest', $_echo);
  }
}

if (!function_exists('theme_url_social_instagram')) {
  function theme_url_social_instagram($_echo = true) {
    get_theme_option('url_social_instagram', $_echo);
  }
}

if (!function_exists('theme_url_social_mail')) {
  function theme_url_social_mail($_echo = true) {
    get_theme_option('url_social_mail', $_echo);
  }
}

function is_option_setted($option){
  return !is_string_null_or_empty( get_theme_option($option, false) );
}

function is_string_null_or_empty($question){
  return (!isset($question) || trim($question)==='');
}

?>
