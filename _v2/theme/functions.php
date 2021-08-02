<?php
/**
 * Disneyland
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Core setup
 */

global $jp;

$jp = (object) array(
	'version' => '1.0.0',
	'main'    => require 'classes/JP.php',
);
