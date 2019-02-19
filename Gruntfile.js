module.exports = function(grunt) {
	'use strict';

	require('load-grunt-tasks')(grunt);

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// Bump version numbers (replace with version in package.json)
		replace: {
			Version: {
				src: [
					'readme.txt',
					'wp-offload-s3-filter-image-file-types.php'
				],
				overwrite: true,
				replacements: [
					{
						from: /Requires PHP:.*$/m,
						to: "Requires PHP:      <%= pkg.requires_php %>"
					},
					{
						from: /Requires at least:.*$/m,
						to: "Requires at least: <%= pkg.requires %>"
					},
					{
						from: /Tested up to:.*$/m,
						to: "Tested up to:      <%= pkg.tested_up_to %>"
					},
					{
						from: /Stable tag:.*$/m,
						to: "Stable tag:        <%= pkg.version %>"
					},
					{
						from: /Version:.*$/m,
						to: "Version:     <%= pkg.version %>"
					},
				]
			}
		},

		// Copies the plugin to create deployable plugin.
		copy: {
			deploy: {
				src: [
					'**',
					'!.*',
					'!*.md',
					'!.*/**',
					'!.htaccess',
					'!Gruntfile.js',
					'!releases/**',
					'!node_modules/**',
					'!.DS_Store',
					'!npm-debug.log',
					'!*.json',
					'!*.sh',
					'!*.zip',
					'!*.jpg',
					'!*.jpeg',
					'!*.gif',
					'!*.png'
				],
				dest: '<%= pkg.name %>',
				expand: true,
				dot: true
			}
		},

		// Compresses the deployable plugin folder.
		compress: {
			zip: {
				options: {
					archive: './releases/<%= pkg.name %>-v<%= pkg.version %>.zip',
					mode: 'zip'
				},
				files: [
					{
						expand: true,
						cwd: './<%= pkg.name %>/',
						src: '**',
						dest: '<%= pkg.name %>'
					}
				]
			}
		},

		// Deletes the deployable plugin folder once zipped up.
		clean: [ '<%= pkg.name %>' ]
	});

	// Updates version and runs i18n tasks.
	grunt.registerTask( 'dev', [ 'replace' ]);

	/**
	 * Creates a deployable plugin zipped up ready to upload
	 * and install on a WordPress installation.
	 */
	grunt.registerTask( 'zip', [ 'copy', 'compress', 'clean' ]);
};
