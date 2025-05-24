<?php
defined( 'ABSPATH' ) || exit;

class Hello_World_Plugin {

    public function __construct() {
        // Constructor logic if needed
    }

    public function run() {
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_assets' ] );
        add_filter( 'the_content', [ $this, 'append_hello_world_message' ] );
    }

    public function enqueue_assets() {
        wp_enqueue_style(
            'hwp-style',
            HWP_PLUGIN_URL . 'assets/css/style.css',
            [],
            '1.0'
        );
    }

    public function append_hello_world_message( $content ) {
        if ( is_singular( 'post' ) && in_the_loop() && is_main_query() ) {
            $message = '<p class="hwp-hello">Thanks for reading! Updated 🙌</p>';
            return $content . $message;
        }
        return $content;
    }
}
