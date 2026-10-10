<?php
/**
 * Form Builder 辅助工具函数。
 *
 * @package Form_Builder
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function form_builder_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
