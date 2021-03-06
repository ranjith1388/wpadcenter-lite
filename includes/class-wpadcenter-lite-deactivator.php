<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WPAdcenter_Lite
 * @subpackage WPAdcenter_Lite/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    WPAdcenter_Lite
 * @subpackage WPAdcenter_Lite/includes
 * @author     Ranjith Nair 
 */
class WPAdcenter_Lite_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		/**
 		* On deactivation, remove all functions from the scheduled action hook.
 		*/
		wp_clear_scheduled_hook( 'wpadcenter_daily_event_hook' );
	}

}
