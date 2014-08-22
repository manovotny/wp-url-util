<?php

/* Constants
---------------------------------------------------------------------------------- */

define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://example.com' . '/wp-content' );
define( 'WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins' );
define( 'WP_PLUGIN_URL', 'http://example.com' . '/wp-content/plugins' );

/* Methods
---------------------------------------------------------------------------------- */

function content_url() {

    return site_url() . '/wp-content';

}

function plugins_url() {

    return content_url() . '/plugins';

}

function site_url() {

    return 'http://example.com';

}

function wp_upload_dir() {

    $year = date( 'Y' );
    $month = date( 'm' );

    $year_month_directory = '/' . $year . '/' . $month;

    return array(
        'path' => WP_CONTENT_DIR . '/uploads' . $year_month_directory,
        'url' => WP_CONTENT_URL . '/uploads' . $year_month_directory,
        'subdir' => $year_month_directory,
        'basedir' => WP_CONTENT_DIR . '/uploads',
        'baseurl' => WP_CONTENT_URL . '/uploads',
        'error' => false,
    );

}