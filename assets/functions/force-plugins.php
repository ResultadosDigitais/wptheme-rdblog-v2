<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
require_once dirname( __FILE__ ) . '/plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
    $plugins = [
        [
            'name'               => 'Google Analytics',
            'slug'               => 'google-analytics-for-wordpress',
            'filename'           => 'googleanalytics.php',
            'required'           => true,
            'force_activation'   => true,
        ],
        [
            'name'               => 'Integração RD Station',
            'slug'               => 'integracao-rd-station',
            'filename'           => 'rdstation-wp.php',
            'required'           => true,
            'force_activation'   => true,
        ],
        [
            'name'               => 'Akismet',
            'slug'               => 'akismet',
            'filename'           => 'akismet.php',
            'required'           => true,
            'force_activation'   => true,
        ],
        [
            'name'               => 'Disqus Comment System',
            'slug'               => 'disqus-comment-system',
            'filename'           => 'disqus.php',
            'required'           => true,
            'force_activation'   => true,
        ],
        [
            'name'               => 'Contact Form 7',
            'slug'               => 'contact-form-7',
            'filename'           => 'wp-contact-form-7.php',
            'required'           => true,
            'force_activation'   => true,
        ],
        [
            'name'               => 'Wordpress GZip Compression',
            'slug'               => 'wordpress-gzip-compression',
            'filename'           => 'ezgz.php',
            'required'           => true,
            'force_activation'   => true,
        ],
        [
            'name'               => 'WP Smush it',
            'slug'               => 'wp-smushit',
            'filename'           => 'wp-smush.php',
            'required'           => true,
            'force_activation'   => true,
        ],
        [
            'name'               => 'Wordpress Importer',
            'slug'               => 'wordpress-importer',
            'filename'           => 'wordpress-importer.php',
            'required'           => true,
            'force_activation'   => true,
        ]
    ];

    foreach ($plugins as $plugin) {
        $plugin_dir = $plugin['slug'].'/'.$plugin['filename'];
        if(is_plugin_active($plugin_dir)){
            unset($plugin['force_activation']);
            $plugins = $plugin;
        }
    }

    $config = array(
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Instalar plugins necessários', 'tgmpa' ),
            'menu_title'                      => __( 'Instalar plugins', 'tgmpa' ),
            'installing'                      => __( 'Instalando plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Algo deu errado com a API do plugin.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'Este tema precisa do seguinte plugin: %1$s.', 'Este tema precisa dos seguintes plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'Recomendamos instalar esse plugin: %1$s.', 'Recomendamos instalar esse plugin: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Desculpe, mas você não tem permissões para instalar o plugin %s. Entre em contato com o administrador.', 'Desculpe, mas você não tem permissão para instalar os plugins %s. Entre em contato com o administrador.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'O seguinte plugin obrigatório está inativo: %1$s.', 'Os seguintes plugins obrigatórios estão inativos: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'O seguinte plugin recomendado está inativo: %1$s.', 'Os seguintes plugins recomendados estão inativos: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Desculpe, mas você não tem permissões para ativar o plugin %s. Entre em contato com o adiminstrador.', 'Desculpe, mas você não tem permissões para ativar os plugins %s. Entre em contato com o adiminstrador.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'O seguinte plugin precisa ser atualizado para a última versão: %1$s.', 'Os seguintes plugins precisam ser atualizados para a última versão: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Desculpe, mas você não tem permissão para atualizar o plugin %s.', 'Desculpe, mas você não tem permissão para atualizar os plugins %s.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Iniciar instalação do plugin', 'Iniciar instalação dos plugins' ),
            'activate_link'                   => _n_noop( 'Iniciar ativação do plugin', 'Iniciar ativação dos plugins' ),
            'return'                          => __( 'Retornar para o instalador dos plugins obrigatórios', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin ativado com sucesso.', 'tgmpa' ),
            'complete'                        => __( 'Todos os plugins instalados e ativados com sucesso. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );
}

?>