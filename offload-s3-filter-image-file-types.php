<?php
/*
 * Plugin Name: Offload S3 Filter Image File Types
 * Description: Filters the plugin Offload S3 by stopping images only from uploading to the S3 bucket.
 * Author: Sebastien Dumont
 * Version: 0.0.1
 * Author URI: http://www.sebastiendumont.com
 */

class Offload_S3_File_Type_Filter {

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
			'png', 
			'jpeg', 
			'jpg', 
			'jif', 
			'jfif', 
			'jp2', 
			'jpx', 
			'j2k', 
			'j2c', 
			'gif', 
			'tif', 
			'tiff'
		);

		foreach( $image_formats as $format ) {
			unset( $types[ $format ] );
		}

		return $types;
	}

}

new Offload_S3_File_Type_Filter();