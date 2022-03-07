<?php
    /*
    Plugin name: Markzmania
    Plugin URI: https://markzmania.com/
    Description: API Customization
    Author: WD Team
    Author URI: https://markzmania.com/
    Text Domain: markzmania.com
    Version: 1.0
    */
    
    defined( 'ABSPATH' ) or die( 'Unauthorized access!' );
    
    add_action( 'cfdb7_before_save', 'techiepress_cf7_data' );
    
    function techiepress_cf7_data( $form_data ) {
    
        $upload_dir = home_url( 'wp-content/uploads/cfdb7_uploads/' );
    
        $data = [
            'name' => $form_data['text-504'],
            'email' => $form_data['email-347'],
            'food' => $form_data['menu-340'][0],
            'upload' => $upload_dir . $form_data['file-337cfdb7_file'],
        ];
    
        $url = 'https://hook.integromat.com/mcmufrx6en3zmf1xltvxwfc6efcnu7ag';
    
        $args = [
            'method' => 'POST',
            'body'   => $data,
        ];
    
        wp_remote_post( $url, $args );
         
    }
