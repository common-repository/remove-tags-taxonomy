<?php
/**
 * Remove tags taxonomy
 *
 * This plugin removes/unsets the post_tags taxonomy from the admin panel in case you (or your client) are not using them.
 *
 * @package   Remove tags taxonomy
 * @author    Joan Boluda Name <joan@boluda.com>
 * @license   GPL-2.0+
 * @link      http://boluda.com
 * @copyright 2013 boluda.com
 *
 * @wordpress-plugin
 * Plugin Name: Remove tags taxonomy
 * Plugin URI:  http://boluda.com/
 * Description: This plugin removes/unsets the post_tags taxonomy from the admin panel in case you (or your client) are not using them.
 * Version:     1.6
 * Author:      Joan Boluda
 * Author URI:  http://boluda.com
 * Text Domain: boluda-rtt
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

//Remove tags taxonomy
function unregister_taxonomy(){
    register_taxonomy('post_tag', array());
}
add_action('init', 'unregister_taxonomy');