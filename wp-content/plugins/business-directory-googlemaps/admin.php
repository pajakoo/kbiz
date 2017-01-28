<?php

/**
 * @since next-release
 */
class WPBDP__Google_Maps__Admin {

    public function __construct() {
        add_action( 'wpbdp_admin_notices', array( $this, 'admin_notices' ) );
    }

    public function admin_notices() {
        if ( ! wpbdp_get_option( 'googlemaps-on' ) )
            return;

        // TODO: only on new installs?
        if ( ! wpbdp_get_option( 'googlemaps-apikey' ) && ! get_user_meta( get_current_user_id(), 'wpbdp_notice_dismissed[googlemaps-apikey]', true  ) ) {
            $msg  = '<b>' . __( 'Business Directory - Google Maps Module: API key required.', 'wpbdp-googlemaps' ) . '</b><br />';
            $msg .= __( 'As of June 2016, Google is now requiring users to generate a <i>free API key</i> to use their geocoding system. This affects <i>new</i> installs but existing ones can continue working without it. If you have issues, try installing a key using the link below.', 'wpbdp-googlemaps' ) . '<br />';
            $msg .= '<br /><br />';
            $msg .= str_replace( '<a>', '<a class="button button-primary" href="' . esc_url( admin_url( 'admin.php?page=wpbdp_admin_settings&groupid=googlemaps#googlemaps-apikey' ) ) . '">',
                                 __( '<a>Add an API key</a>' ) );

            wpbdp_admin_message( $msg, 'error dismissible', array( 'dismissible-id' => 'googlemaps-apikey' ) );
        }
    }

}
