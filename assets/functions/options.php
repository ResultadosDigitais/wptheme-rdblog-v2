<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

function theme_options_init(){
  register_setting( 'rd-mkt_options', 'rd-mkt_theme_options', 'theme_options_validate' );
}

function theme_options_add_page() {
  add_theme_page( __( 'Opções do Tema', 'wptheme-rdblog' ), __( 'Opções do Tema', 'wptheme-rdblog' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

function theme_options_do_page() {
  if ( ! isset( $_REQUEST['settings-updated'] ) )
    $_REQUEST['settings-updated'] = false;

?>

  <div class="wrap">
    <?php screen_icon(); echo "<h2>" . __( ' Opções do Tema', 'wptheme-rdblog' ) . "</h2>"; ?>

    <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
      <div class="updated fade"><p><strong><?php _e( 'Opções Salvas', 'wptheme-rdblog' ); ?></strong></p></div>
    <?php endif; ?>

    <form method="post" action="options.php">
      <?php settings_fields( 'rd-mkt_options' ); ?>
      <?php
        $default_options = array(
          'header_desc' => '',
          'footer_desc' => '',
          'logo_url' => get_bloginfo( 'stylesheet_directory' ) . '/assets/images/logo.png',
          'webprofile_twitter' => '',
          'webprofile_facebook' => '',
          'webprofile_linkedin_id' => '',
          'webprofile_feedburner' => '',
          'url_social_facebook' => 'http://facebook.com/',
          'url_social_twitter' => 'http://twitter.com/',
          'url_social_gplus' => '',
          'url_social_linkedin' => 'http://linkedin.com/in/',
          'url_social_youtube' => '',
          'url_social_flickr' => '',
          'url_social_pinterest' => '',
          'url_social_instagram' => '',
          'url_social_mail' => ''
        );
        $options = get_option( 'rd-mkt_theme_options' );
      ?>

      <table class="form-table">
        <tr valign="top">
          <th scope="row"><?php _e( 'URL da Logo', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[logo_url]" class="regular-text" type="text" name="rd-mkt_theme_options[logo_url]" placeholder="<?php esc_attr_e( $default_options['logo_url'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['logo_url'] : $options['logo_url'] ); ?>" />
            <label class="description" for="rd-mkt_theme_options[logo_url]"></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Descrição do Blog - Cabeçalho', 'wptheme-rdblog' ); ?></th>
          <td>
            <textarea id="rd-mkt_theme_options[header_desc]" class="large-text" cols="40" rows="5" name="rd-mkt_theme_options[header_desc]" placeholder="<?php esc_attr_e( $default_options['header_desc'] ); ?>"><?php echo esc_textarea( ($options['options_edited'] != 'true') ? $default_options['header_desc'] : $options['header_desc'] ); ?></textarea>
            <label class="description" for="rd-mkt_theme_options[header_desc]"><small><?php _e( 'Introdução sobre sua marca ou produto. Aparecerá no cabeçalho.', 'wptheme-rdblog' ); ?></small></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Descrição do Blog - Rodapé', 'wptheme-rdblog' ); ?></th>
          <td>
            <textarea id="rd-mkt_theme_options[footer_desc]" class="large-text" cols="40" rows="5" name="rd-mkt_theme_options[footer_desc]" placeholder="<?php esc_attr_e( $default_options['footer_desc'] ); ?>"><?php echo esc_textarea( ($options['options_edited'] != 'true') ? $default_options['footer_desc'] : $options['footer_desc'] ); ?></textarea>
            <label class="description" for="rd-mkt_theme_options[footer_desc]"><small><?php _e( 'Introdução sobre sua marca ou produto. Aparecerá no rodapé.', 'wptheme-rdblog' ); ?></small></label>
          </td>
        </tr>
      </table>

      <hr />

      <h2>Opções de Integração</h2>

      <table class="form-table">
        <tr valign="top"><th scope="row"><?php _e( 'Twitter - Usuário', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[webprofile_twitter]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_twitter]" placeholder="<?php esc_attr_e( $default_options['webprofile_twitter'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['webprofile_twitter'] : $options['webprofile_twitter'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Facebook - Slug ou ID', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[webprofile_facebook]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_facebook]" placeholder="<?php esc_attr_e( $default_options['webprofile_facebook'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['webprofile_facebook'] : $options['webprofile_facebook'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'LinkedIn - ID', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[webprofile_linkedin_id]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_linkedin_id]" placeholder="<?php esc_attr_e( $default_options['webprofile_linkedin_id'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['webprofile_linkedin_id'] : $options['webprofile_linkedin_id'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Google Plus - ID', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[webprofile_gplus_id]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_gplus_id]" placeholder="<?php esc_attr_e( $default_options['webprofile_gplus_id'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['webprofile_gplus_id'] : $options['webprofile_gplus_id'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Feedburner - Usuário', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[webprofile_feedburner]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_feedburner]" placeholder="<?php esc_attr_e( $default_options['webprofile_feedburner'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['webprofile_feedburner'] : $options['webprofile_feedburner'] ); ?>" />
          </td>
        </tr>
      </table>

      <hr />

      <h2>Opções de Mídias Sociais</h2>

      <table class="form-table">
        <tr valign="top"><th scope="row"><?php _e( 'Facebook URL', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[url_social_facebook]" class="regular-text" type="text" name="rd-mkt_theme_options[url_social_facebook]" placeholder="<?php esc_attr_e( $default_options['url_social_facebook'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['url_social_facebook'] : $options['url_social_facebook'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Twitter URL', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[url_social_twitter]" class="regular-text" type="text" name="rd-mkt_theme_options[url_social_twitter]" placeholder="<?php esc_attr_e( $default_options['url_social_twitter'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['url_social_twitter'] : $options['url_social_twitter'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Google + URL', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[url_social_gplus]" class="regular-text" type="text" name="rd-mkt_theme_options[url_social_gplus]" placeholder="<?php esc_attr_e( $default_options['url_social_gplus'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['url_social_gplus'] : $options['url_social_gplus'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'LinkedIn URL', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[url_social_linkedin]" class="regular-text" type="text" name="rd-mkt_theme_options[url_social_linkedin]" placeholder="<?php esc_attr_e( $default_options['url_social_linkedin'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['url_social_linkedin'] : $options['url_social_linkedin'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'YouTube URL', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[url_social_youtube]" class="regular-text" type="text" name="rd-mkt_theme_options[url_social_youtube]" placeholder="<?php esc_attr_e( $default_options['url_social_youtube'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['url_social_youtube'] : $options['url_social_youtube'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Flickr URL', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[url_social_flickr]" class="regular-text" type="text" name="rd-mkt_theme_options[url_social_flickr]" placeholder="<?php esc_attr_e( $default_options['url_social_flickr'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['url_social_flickr'] : $options['url_social_flickr'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Pinterest URL', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[url_social_pinterest]" class="regular-text" type="text" name="rd-mkt_theme_options[url_social_pinterest]" placeholder="<?php esc_attr_e( $default_options['url_social_pinterest'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['url_social_pinterest'] : $options['url_social_pinterest'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Instagram URL', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[url_social_instagram]" class="regular-text" type="text" name="rd-mkt_theme_options[url_social_instagram]" placeholder="<?php esc_attr_e( $default_options['url_social_instagram'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['url_social_instagram'] : $options['url_social_instagram'] ); ?>" />
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'E-mail', 'wptheme-rdblog' ); ?></th>
          <td>
            <input id="rd-mkt_theme_options[url_social_mail]" class="regular-text" type="text" name="rd-mkt_theme_options[url_social_mail]" placeholder="<?php esc_attr_e( $default_options['url_social_mail'] ); ?>" value="<?php esc_attr_e( ($options['options_edited'] != 'true') ? $default_options['url_social_mail'] : $options['url_social_mail'] ); ?>" />
          </td>
        </tr>
      </table>

      <p class="submit">
        <input type="hidden" name="rd-mkt_theme_options[options_edited]" value="true" />
        <input type="submit" class="button-primary" value="<?php _e( 'Salvar Opções', 'wptheme-rdblog' ); ?>" />
      </p>
    </form>
  </div>

<?php }

function theme_options_validate( $input ) {
  return $input;
}

?>
