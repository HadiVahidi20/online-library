<?php 

function online_library_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'online-library-theme-settings', // Menu slug
        'online_library_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'online_library_add_admin_menu' );

function online_library_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'online-library' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'online_library_settings_group' );
            do_settings_sections( 'online-library-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function online_library_register_settings() {
    register_setting( 'online_library_settings_group', 'online_library_enable_animations' );

    add_settings_section(
        'online_library_settings_section',
        __( 'Animation Settings', 'online-library' ),
        null,
        'online-library-theme-settings'
    );

    add_settings_field(
        'online_library_enable_animations',
        __( 'Enable Animations', 'online-library' ),
        'online_library_enable_animations_callback',
        'online-library-theme-settings',
        'online_library_settings_section'
    );
}
add_action( 'admin_init', 'online_library_register_settings' );

function online_library_enable_animations_callback() {
    $checked = get_option( 'online_library_enable_animations', true );
    ?>
    <input type="checkbox" name="online_library_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

