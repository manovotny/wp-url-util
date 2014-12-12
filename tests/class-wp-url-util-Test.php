<?php

require_once 'vendor/autoload.php';

class WP_Url_Util_Test extends PHPUnit_Framework_TestCase {

    private $wp_url_util;

    protected function setUp() {

        $this->wp_url_util = WP_Url_Util::get_instance();

    }

    public function test_convert_absolute_path_to_url() {

        $file = '/' . any_string() . '/inc/' . any_string() . '.php';
        $expected_result = plugins_url() . $file;
        $path = WP_PLUGIN_DIR . $file;

        $result = $this->wp_url_util->convert_absolute_path_to_url( $path );

        $this->assertEquals( $expected_result, $result );

    }

    public function test_convert_url_to_absolute_path() {

        $file = '/' . any_string() . '/inc/' . any_string() . '.php';

        $expected_result = WP_PLUGIN_DIR . $file;
        $url = plugins_url() . $file;

        $result = $this->wp_url_util->convert_url_to_absolute_path( $url );

        $this->assertEquals( $expected_result, $result );

    }

    public function test_get_file_extension() {

        $file_name = any_string();
        $file_extension = 'js';
        $url = 'http://google.com/' . $file_name . '.' . $file_extension;

        $result = $this->wp_url_util->get_file_extension( $url );

        $this->assertEquals( $file_extension, $result );

    }

    public function test_get_file_name() {

        $file_name = any_string();
        $file_extension = 'js';
        $url = 'http://google.com/' . $file_name . '.' . $file_extension;

        $result = $this->wp_url_util->get_file_name( $url );

        $this->assertEquals( $file_name, $result );

    }

    public function test_get_file_name_and_extension() {

        $file_name = any_string();
        $file_extension = 'js';
        $url = 'http://google.com/' . $file_name . '.' . $file_extension;

        $result = $this->wp_url_util->get_file_name_and_extension( $url );

        $this->assertEquals( $file_name . '.' . $file_extension, $result );

    }

    public function test_is_external_file_returns_true() {

        $url = 'http://google.com/' . any_string() . '.js';

        $result = $this->wp_url_util->is_external_file( $url );

        $this->assertTrue( $result );

    }

    public function test_is_external_file_returns_false() {

        $url = 'http://example.com/' . any_string() . '.js';

        $result = $this->wp_url_util->is_external_file( $url );

        $this->assertFalse( $result );

    }

    public function test_is_uploaded_file_returns_true() {

        $url = WP_CONTENT_URL . '/uploads/2014/01/' . any_string() . '.jpg';

        $result = $this->wp_url_util->is_uploaded_file( $url );

        $this->assertTrue( $result );

    }

    public function test_is_uploaded_file_returns_false() {

        $url = WP_PLUGIN_URL . '/images/' . any_string() . '.jpg';

        $result = $this->wp_url_util->is_uploaded_file( $url );

        $this->assertFalse( $result );

    }

    public function test_remove_query_string() {

        $url = 'http://google.com';
        $query_string = '?search=' . any_string();

        $result = $this->wp_url_util->remove_query_string( $url . $query_string );

        $this->assertEquals( $url, $result );

    }

}