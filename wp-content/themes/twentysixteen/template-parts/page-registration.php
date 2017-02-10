<?php
/**
 * Template Name: registration
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if (get_locale() == 'en_US') {
    //Kint::dump(get_locale(), get_page_by_title('Business Directory'));
    wp_redirect( get_post_permalink( get_page_by_title('Business Catalog')->ID ) .'?wpbdp_view=submit_listing' );
} elseif (get_locale() == 'bg_BG') {
    wp_redirect( get_post_permalink( get_page_by_title('Бизнес Каталог')->ID ) .'?wpbdp_view=submit_listing' );
}

