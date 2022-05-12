<?php
/**
 * @package CiviCRM ignore SwaggerUI
 * @version 0.0.1
 */
/*
Plugin Name: CiviCRM ignore SwaggerUI
Plugin URI: http://octopus8.com
Description: This Plugins tells CiviCRM ignore SwaggerUI plugin url.
Author: Khindol Madraimov
Version: 0.0.1
Author URI: http://octopus8.com/
*/

function civicrm_ignore_swagger_ui() {
    if (function_exists('civi_wp')) {
        if (get_query_var('swagger_api') == 'docs') {
            $civi = civi_wp();
            $civi::$in_wordpress = TRUE;
            return;
        }
    }
}


add_action( 'wp', 'civicrm_ignore_swagger_ui' );
