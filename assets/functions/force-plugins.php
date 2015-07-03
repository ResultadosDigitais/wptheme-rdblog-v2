<?php

//AUTOMATIC PLUGIN ACTIVATION
require_once dirname( __FILE__ ) . '/plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
    $plugins = array(
        array(
            'name'               => 'Google Analytics',
            'slug'               => 'google-analytics-for-wordpress',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Akismet',
            'slug'               => 'akismet',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Disqus Comment System',
            'slug'               => 'disqus-comment-system',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Feedburner Plugin',
            'slug'               => 'feedburner-plugin',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Contact Form 7',
            'slug'               => 'contact-form-7',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Wordpress GZip Compression',
            'slug'               => 'wordpress-gzip-compression',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'WP Smush it',
            'slug'               => 'wp-smushit',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'WP Super Cache',
            'slug'               => 'wp-super-cache',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Force Strong Passwords',
            'slug'               => 'force-strong-passwords',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Limit Login Attempts',
            'slug'               => 'limit-login-attempts',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Google Authenticator',
            'slug'               => 'google-authenticator',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'WP DB Backup',
            'slug'               => 'wp-db-backup',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'All in One SEO Pack',
            'slug'               => 'all-in-one-seo-pack',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Wordpress SEO',
            'slug'               => 'wordpress-seo',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Google Sitemap Generator',
            'slug'               => 'google-sitemap-generator',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Headspace2',
            'slug'               => 'headspace2',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Digg Digg',
            'slug'               => 'digg-digg',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Theme Preview',
            'slug'               => 'theme-preview',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Wordpress Mobile Pack',
            'slug'               => 'wordpress-mobile-pack',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'WP Pagenavi',
            'slug'               => 'wp-pagenavi',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'WP No Category Base',
            'slug'               => 'wp-no-category-base',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Yet Another Related Posts Plugin',
            'slug'               => 'yet-another-related-posts-plugin',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'YOLink Search',
            'slug'               => 'yolink-search',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Redirection',
            'slug'               => 'redirection',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'Wordpress Importer',
            'slug'               => 'wordpress-importer',
            'required'           => true,
            'force_activation'   => true,
        ),
        array(
            'name'               => 'WP Email',
            'slug'               => 'wp-email',
            'required'           => true,
            'force_activation'   => true,
        ),
    );

    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}

add_filter( 'auto_update_plugin', '__return_true' );