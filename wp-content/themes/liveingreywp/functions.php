<?php

function liveingrey_script_enqueue() {
    // css foundation and custom
	wp_enqueue_style('foundationstyles', get_template_directory_uri().'/css/foundation.min.css', [], '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/custom.css', [], '1.0.0', 'all');

    // js: jquery, foundation and custom
    wp_enqueue_script('jqueryscript', get_template_directory_uri().'/js/jquery.js', [], '1.0.0', true);
    wp_enqueue_script('whatinput', get_template_directory_uri().'/js/what-input.js', [], '1.0.0', true);
    wp_enqueue_script('foundationjs', get_template_directory_uri().'/js/foundation.min.js', [], '1.0.0', true);
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/custom.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'liveingrey_script_enqueue');