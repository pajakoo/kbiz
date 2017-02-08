<?php

/**
 * Created by kbiz on 1/13/17.
 */

function load_script_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/kbiz_style.css', array(), '1.0','all');
    wp_enqueue_script('customscript', get_template_directory_uri() . '/js/lib.js', array('jquery'), '1.0', false);
}


add_action('wp_enqueue_scripts',load_script_enqueue);



require get_template_directory() . '/inc/Kint/Kint.class.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
