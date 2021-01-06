<?php

/**
 * Fired during plugin activation
 *
 * @link       https://manender.com/
 * @since      1.0.0
 *
 * @package    Html_Shortcode
 * @subpackage Html_Shortcode/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Html_Shortcode
 * @subpackage Html_Shortcode/includes
 * @author     Manender <manender369@gmail.com>
 */
class Html_Shortcode_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$upload_dir = HTML_SHORTCODE_UPLOAD_DIR;
    if (! is_dir($upload_dir)) {
      mkdir( $upload_dir, 0700 );
    }
	}

}
