<?php
/**
 * Plugin Name: wp_mail Form Submit
 *
 * @package   wp_mail_form_submit
 * @author    Inge Reck
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: wp_mail Form Submit
 * Description: Enables to send Email via SMTP
 * Plugin URI:  https://gist.github.com/ingereck
 * Version:     0.1.0
 * Author:      Inge Reck
 * Author URI:  https://ingereck.net
 * License:     GNU General Public License v2 (or later)
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace wp_mail_form_submit;


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

/*
 * Submitting a form using wp_mail SMTP
*/

add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host       = SMTP_HOST;
	$phpmailer->SMTPAuth   = SMTP_AUTH;
	$phpmailer->Port       = SMTP_PORT;
	$phpmailer->Username   = SMTP_USER;
	$phpmailer->Password   = SMTP_PASS;
	$phpmailer->SMTPSecure = SMTP_SECURE;
	$phpmailer->From       = SMTP_FROM;
	$phpmailer->FromName   = SMTP_NAME;
}
