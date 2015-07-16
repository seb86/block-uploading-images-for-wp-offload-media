<?php
/*
 * Plugin Name: WP Offload S3 Filter Image File Types
 * Description: Filters the plugin WP Offload S3 by stopping images only from uploading to the S3 bucket.
 * Author:      Sebastien Dumont
 * Author URI:  http://www.sebastiendumont.com
 * Version:     0.0.1
 */

class WP_Offload_S3_File_Type_Filter {

	public function __construct() {
		$this->init();
	}

	public function init() {
		add_filter( 'as3cf_allowed_mime_types', array( $this, 'allowed_mime_types' ), 10, 1 );
	}

	/**
	 * This filter allows your limit specific mime types of files that
	 * can be uploaded to S3. They will still be uploaded to the 
	 * WordPress media library but ignored from the S3 upload process.
	 *
	 * @since  0.0.1
	 * @param  array $types
	 * @return array
	 */
	public function allowed_mime_types( $types ) {
		// Disallow image formats
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
	}

}

new WP_Offload_S3_File_Type_Filter();