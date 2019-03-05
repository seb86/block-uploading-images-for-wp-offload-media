=== Block Uploading Images for WP Offload Media ===
Contributors:      sebd86
Donate link:       https://sebdumont.xyz/donate/
Tags:              uploads, amazon, s3, amazon s3, digitalocean, google cloud storage, gcs, mirror, admin, media, cdn, cloudfront, images, file formats
Requires PHP:      5.6
Requires at least: 4.4
Tested up to:      5.1
Stable tag:        1.0.1
License:           GPLv2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Stops images from uploading directly to your choice of CDN storage service.

== Description ==

> Originally called "WP Offload S3 – Filter Image File Types" but had to be changed for trademark reasons.

This plugin stops only images from uploading directly to your [Amazon S3](http://aws.amazon.com/s3/), [DigitalOcean Spaces](https://www.digitalocean.com/products/spaces/) or [Google Cloud Storage](https://cloud.google.com/storage/) by filtering [WP Offload Media](https://deliciousbrains.com/wp-offload-media/). All other media file types continue to upload.

This is great for those who are wanting better SEO Image search results as the images will be loading from your site and not from your CDN of choice.

= Contribute and Report Bugs =
You can [contribute code](https://github.com/seb86/block-uploading-images-for-wp-offload-media/blob/master/.github/CONTRIBUTING.md) to this plugin via the [GitHub](https://github.com/seb86/block-uploading-images-for-wp-offload-media/blob/master/.github/CONTRIBUTING.md) repository.

= Support =
Use the WordPress.org forums for [community support](https://wordpress.org/support/plugin/wp-offload-s3-filter-image-file-types). If you spot a bug, you can of course log it on [Github](https://github.com/seb86/block-uploading-images-for-wp-offload-media/issues) instead where I can act upon it more efficiently.

= Please Leave a Review =
Your ratings make a big difference. If you like Block Uploading Images for WP Offload Media, please consider spending a minute or two [leaving a review](https://wordpress.org/support/view/plugin-reviews/wp-offload-s3-filter-image-file-types?rate=5#postform) and tell me what you think about the plugin.

**More information**

- Other [WordPress plugins](http://profiles.wordpress.org/sebd86/) by [Sébastien Dumont](https://sebastiendumont.com/)
- Contact Sebastien on Twitter: [@sebd86](http://twitter.com/sebd86)
- If you're a developer yourself, follow or contribute to the [Block Uploading Images for WP Offload Media plugin on GitHub](https://github.com/seb86/block-uploading-images-for-wp-offload-media)

== Installation ==

Installing "Block Uploading Images for WP Offload Media" can be done either by searching for "Block Uploading Images for WP Offload Media" via the "Plugins > Add New" screen in your WordPress dashboard, or by using the following steps:

1. Download the plugin via WordPress.org
2. Upload the ZIP file through the 'Plugins > Add New > Upload' screen in your WordPress dashboard.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Done

== Frequently Asked Questions ==

= What image file formats does it stop from uploading? =

The following formats have been filtered:
 * .bmp
 * .gif
 * .jpg
 * .jpeg
 * .jpe
 * .png
 * .tiff
 * .tif

= Does it work with WP Offload Media Pro? =

Yes it does.

== Changelog ==

= 1.0.1 =
* Changed: Class name to _WP_Offload_Media_Block_Upload_Images_
* Tweaked: Tags used for filtering WP.org plugin directory search results.
* Updated readme.txt to mention Google Cloud Storage for WP Offload Media v2.1

= 1.0.0 =
* Changed: Renamed plugin name due to WP Offload S3 changed to WP Offload Media and trademark guidelines.

= 0.0.2 =
* Updated plugin header.
* Improved inline documentation.
* Tested with WP Offload S3 Pro.
* Tested with WordPress 4.9
* Updated the F.A.Q.

= 0.0.1 =
* Initial version
