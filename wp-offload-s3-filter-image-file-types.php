<?php
/*
 * Plugin Name: Block Uploading Images for WP Offload Media
 * Plugin URI:  https://wordpress.org/plugins/wp-offload-s3-filter-image-file-types/
 * Version:     1.0.0
 * Description: Stops images from uploading directly to your Amazon S3 or DigitalOcean Spaces.
 * Author:      Sébastien Dumont
 * Author URI:  https://sebastiendumont.com
 *
 * Copyright: © 2019 Sébastien Dumont
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

class WP_Offload_S3_File_Type_Filter {

	public function __construct() {
		$this->init();
	}

	public function init() {
		add_filter( 'as3cf_allowed_mime_types', array( $this, 'unallowed_mime_types' ), 10, 1 );
	}

	/**
	 * This filter prevents image types from being uploaded.
	 * They will still be uploaded to the WordPress media library
	 * but ignored from the upload process.
	 *
	 * @since  0.0.2
	 * @access public
	 * @param  array $types
	 * @return array $types
	 */
	public function unallowed_mime_types( $types ) {
		$image_formats = array(
			'bmp',
			'gif',
			'jpg|jpeg|jpe',
			'png',
			'tiff|tif'
		);

		foreach( $image_formats as $format ) {
			unset( $types[ $format ] );
		}

		return $types;
	} // END unallowed_mime_types()

} // END class

new WP_Offload_S3_File_Type_Filter();
