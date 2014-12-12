<?php

class WP_Url_Util {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /* Instance
    ---------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Url_Util
     */
    protected static $instance = null;

    /**
     * Get accessor method for instance property.
     *
     * @return WP_Url_Util Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Methods
    ---------------------------------------------------------------------------------- */

    /**
     * Converts an absolute path to a root path.
     *
     * @param string $absolute_path Absolute path.
     * @return string Root path.
     */
    function convert_absolute_path_to_root_path( $absolute_path ) {

        return str_replace( ABSPATH, '/', $absolute_path );

    }

    /**
     * Converts an absolute path to a file into a url to the file.
     *
     * @param string $absolute_path Absolute path to file.
     * @return string Url to file.
     */
    function convert_absolute_path_to_url( $absolute_path ) {

        // Remove WordPress installation path from file path.
        $file_base = str_replace( ABSPATH, '', $absolute_path );

        // Add site url to file base.
        $file_url = trailingslashit( site_url() ) . $file_base;

        return $file_url;

    }

    /**
     * Converts a url to a file into an absolute path to the file.
     *
     * @param string $file_url Url to file.
     * @return string Absolute path to file.
     */
    function convert_url_to_absolute_path( $file_url ) {

        // Remove WordPress site url from file url.
        $file_base = str_replace( trailingslashit( site_url() ), '', $file_url );

        // Add WordPress installation path to file base.
        $absolute_path = ABSPATH . $file_base;

        return $absolute_path;

    }

    /**
     * Extracts file extension from a file, path, or url.
     *
     * @param string $file A file name, path, or url.
     * @return string The file extension.
     */
    public function get_file_extension( $file )  {

        return pathinfo( $file, PATHINFO_EXTENSION );

    }

    /**
     * Extracts file name from a file, path, or url.
     *
     * @param  string $file A file, path, or url.
     * @return string The file name.
     */
    public function get_file_name( $file ) {

        return pathinfo( $file, PATHINFO_FILENAME );

    }

    /**
     * Extracts file name and extension from a file, path, or url.
     *
     * @param string $file A file, path, or url.
     * @return string The file name and extension.
     */
    public function get_file_name_and_extension( $file ) {

        return pathinfo( $file, PATHINFO_BASENAME );

    }

    /**
     * Determines if a file is externally hosted based on url.
     *
     * @param string $file_url File url.
     * @return boolean Whether a file is externally hosted or not.
     */
    public function is_external_file( $file_url ) {

        // Set default return value.
        $is_external_file = false;

        // Parse url.
        $parsed_file_url = parse_url( $file_url );

        // Parse site url.
        $parsed_site_url = parse_url( site_url() );

        // Check if hosts don't match.
        if ( $parsed_file_url[ 'host' ] !== $parsed_site_url[ 'host' ] ) {

            // We now know the file is externally hosted.
            $is_external_file = true;

        }

        return $is_external_file;

    }

    /**
     * Determines if a file is a file that was uploaded to WordPress.
     *
     * @param string $file_url File url.
     * @return string Image path.
     */
    public function is_uploaded_file( $file_url ) {

        // Set default return value.
        $is_uploaded_file = false;

        // Get WordPress upload directory information.
        $wp_upload_directory = wp_upload_dir();

        // Check if the WordPress upload directory url matches the file url.
        if ( false !== strpos( $file_url, $wp_upload_directory[ 'baseurl' ] ) ) {

            // We now know the file is one that was uploaded to WordPress.
            $is_uploaded_file = true;

        }

        return $is_uploaded_file;

    }

    /**
     * Removes the query string from a url.
     *
     * @param string $url A url.
     * @return string Supplied url with the query string removed.
     */
    public function remove_query_string( $url ) {

        // Remove everything after the ? in a url.
        return strtok( $url, '?' );

    }

}
