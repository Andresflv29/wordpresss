<?php

$theme_version = wp_get_theme()->get( 'Version' );

$version_string = is_string( $theme_version ) ? $theme_version : false;

/**
 * Add theme page
 */
function aploblocks_appearance_menu() {
	add_theme_page( esc_html__( 'AploBlocks', 'aploblocks' ), esc_html__( 'AploBlocks', 'aploblocks' ), 'edit_theme_options', 'aploblocks-theme', 'aploblocks_theme_page' );
}
add_action( 'admin_menu', 'aploblocks_appearance_menu' );

/**
 * Display About page
 * 
 * 
 * <?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>
 * <?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'bizboost' ); ?>
 * <?php echo esc_html( $theme->Name ); ?></h2>
 */
function aploblocks_theme_page() {
	$theme = wp_get_theme();
	
    wp_enqueue_style( 'aploblocks-theme-admin', get_template_directory_uri() . '/assets/css/admin.css',array(),$version_string );

	?>

    <div class="aploblocks-theme-page">
        <div class="aploblocks-theme-page-header">

            <svg id="be452e83-5912-4855-80f8-a79ecab91838" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                <path
                    d="M 85.31,17 H 99.6 V 83.59 H 85.31 Z M 57.2,17 h 14.29 v 52.74 h 8.57 V 83.59 H 57.2 Z m -37.94,0 h 11.3 12.29 v 52.49 h 9.56 l 0.27,14.1 H 28.56 V 31.32 h -9.3 z M 0.1929,17 H 14.48 V 83.59 H 0.1929 Z"
                    fill="#7bb9ff"
                />
            </svg>
            <h2><?php esc_html_e( 'Welcome to the AploBlocks theme','aploblocks'); ?></h2>
        </div>

        <div class="aploblocks-theme-page-body">
            
        <div>
        <p><?php esc_html_e( 'Welcome to version ','aploblocks'); ?> <?php echo wp_get_theme()->get( 'Version' ); ?></h2><?php esc_html_e( ' of the AploBlocks theme!  The Aploblocks theme 
            is a multi-purpose theme with a range of settings for individual blocks including entrance animations, filters, transforms & masks.','aploblocks'); ?></p>
            <p><?php esc_html_e( 'This version of the theme contains extra block styling options in the editor plus extra patterns and templates.','aploblocks'); ?></p>
    </div>
        
    <div class=aploblocks-theme-page-section>
    <p><?php esc_html_e( 'For even more features and the new pattern inserter install the AploBlocks plugin available from the WordPress plugin directory.','aploblocks'); ?>
            <a href="https://wordpress.org/plugins/aploblocks/" target="_blank" class="thickbox open-plugin-details-modal" aria-label="More information about AploBlocks" data-title="AploBlocks"><?php esc_html_e( 'View details','aploblocks'); ?></a></p>
    </div>
    <div>
    <p><?php esc_html_e( 'Any questions about the theme or ideas for improvement can be left ','aploblocks'); ?><a href="https://wordpress.org/support/theme/aploblocks/" target="_blank"><?php esc_html_e( 'here','aploblocks'); ?></a></p>
    </div>
    <div>
            <p><?php esc_html_e( 'If you enjoy using the theme then a ','aploblocks'); ?> <a href="https://wordpress.org/support/theme/aploblocks/reviews/" target="_blank"><?php esc_html_e( 'review','aploblocks'); ?></a><?php esc_html_e(' would be great!','aploblocks'); ?></p>
            <p><?php esc_html_e( 'If you use and enjoy the plugin then a review can be left ','aploblocks'); ?> <a href="https://wordpress.org/support/plugin/aploblocks/reviews/" target="_blank"><?php esc_html_e( 'here','aploblocks'); ?></a></p>

        </div>
    </div>

        <div class="aploblocks-theme-page-footer">
            <svg id="be452e83-5912-4855-80f8-a79ecab91838" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
                <path
                    d="M 85.31,17 H 99.6 V 83.59 H 85.31 Z M 57.2,17 h 14.29 v 52.74 h 8.57 V 83.59 H 57.2 Z m -37.94,0 h 11.3 12.29 v 52.49 h 9.56 l 0.27,14.1 H 28.56 V 31.32 h -9.3 z M 0.1929,17 H 14.48 V 83.59 H 0.1929 Z"
                    fill="#7bb9ff"
                />
            </svg>
        </div>

    </div>
	<?php
}


/********************************************************************************
 * 
 * this is for adding the notification for the plugin
 * 
 * 
 */
function aploblocks_admin_plugin_notice() {

    $version_string = wp_get_theme()->get( 'Version' );
	
    // check if we could display the notice bar
    if (!can_display_notice()) {
        return;
    }

    // already checked for 0, get state
    $notice_required = check_plugin_state();

    wp_enqueue_style( 'aploblocks-theme-admin', get_template_directory_uri() . '/assets/css/admin.css',array(),$version_string );

    wp_register_script( 'aploblocks-plugin-notice',get_template_directory_uri() . '/assets/js/admin.js',array('wp-api-fetch'),"0.9.5",true );

    wp_enqueue_script( 'aploblocks-plugin-notice' );

    wp_localize_script(
        'aploblocks-plugin-notice',
        'aploblocks',
        array(
            'nonce'         => wp_create_nonce( 'aploblocks-welcome-notice-nonce' ),
            'ajaxUrl'       => esc_url( admin_url( 'admin-ajax.php' ) ),
            'pluginStatus'  => $notice_required,
            'pluginSlug'    => 'aploblocks',
            'activating'    => __( 'Activating', 'aploblocks' ) . '&hellip;',
            'installing'    => __( 'Installing', 'aploblocks' ) . '&hellip;',
            'respButtonOk'   => __( 'Success', 'aploblocks' ),
            'respButtonFail'   => __( 'Error', 'aploblocks' ),
            'respOk'          => __( 'Aploblocks plugin successfully activated', 'aploblocks' ),
            'respFail'      => __( 'There was a problem setting up the plugin.  Please attempt to setup through the plugin page', 'aploblocks' ),
        )
    );

    ?>
    <div class="notice notice-success is-dismissible aploblocks-admin-notice">
     <button type="button" class="notice-dismiss"></button>
        <div class="aploblocks-admin-notice-wrapper">
            
            <div>
                <svg id="be452e83-5912-4855-80f8-a79ecab91838" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
                    <path
                        d="M 85.31,17 H 99.6 V 83.59 H 85.31 Z M 57.2,17 h 14.29 v 52.74 h 8.57 V 83.59 H 57.2 Z m -37.94,0 h 11.3 12.29 v 52.49 h 9.56 l 0.27,14.1 H 28.56 V 31.32 h -9.3 z M 0.1929,17 H 14.48 V 83.59 H 0.1929 Z"
                        fill="#7bb9ff"
                    />
                </svg>
                <h2><?php esc_html_e( 'Thank you for installing the AploBlocks theme!', 'aploblocks' ); ?></h2>
            </div>
            <p><?php esc_html_e( 'For even more features we recommend using the AploBlocks plugin. ', 'aploblocks' ); ?></p>
        
            <div>
                <button id="aploblocks-action-plugin" >
                    <span class="text">
                        <?php
                        
                        switch ($notice_required) {
                            case 0:
                                // shouldn't get here;
                                break;
                            case "1":
                                esc_html_e( 'Activate AploBlocks Plugin', 'aploblocks' );
                                break;
                            case "2":
                                esc_html_e( 'Install & Activate aploBlocks', 'aploblocks' );
                                break;
                        }
                        ?>
                    </span>
                </button>
                <span class="aploblocks-notice-response"></span>
            </div>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'aploblocks_admin_plugin_notice',0);

// TODO here we want to verify the nonce and update an option that indicates it has been closed
// there are two possible ways below
function aploblocks_hide_theme_welcome_notice() {

	if ( ! isset( $_GET['nonce'] ) ) {
		return;
	}

	if ( ! wp_verify_nonce( sanitize_text_field( $_GET['nonce'] ), 'aploblocks-welcome-notice-nonce' ) ) {
		return;
	}

	update_option( 'aploblocks-welcome-notice', 'dismissed' );
    return ["ok"];

}
add_action( 'wp_ajax_aploblocks_hide_theme_welcome_notice', 'aploblocks_hide_theme_welcome_notice' );




// check conditions for displaying the notice bar
function can_display_notice() {

    if  (!check_plugin_state()) {
        return false;
    }

	if ( get_option( 'aploblocks-welcome-notice', false ) === 'dismissed' ) {   
		return false;
	}

	$screen = get_current_screen();

	if ( !in_array( $screen->id, array( 'dashboard', 'themes','plugins' )) ) {
		return false;
	}

	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return false;
	}

	if ( ! current_user_can( 'install_plugins' ) ) {
		return false;
	}

    return true;
}


// check the current state of the plugin
function check_plugin_state() {

    if ( file_exists( ABSPATH . 'wp-content/plugins/aploblocks/aploblocks.php' ) ) {
        // is_plugin_active
        if (in_array( 'aploblocks/aploblocks.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )) {
            return 0;
        } else {
            return 1;
        }
    }
    return 2;
}



