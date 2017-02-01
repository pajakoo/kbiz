<?php
/**
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

function addListings() {

   /* $my_post = array(
        'post_title'    => 'Пицинцата на Коко',
        'post_type'     => 'wpbdp_listing',
        'post_content'  => 'This is my post.',
        'post_status'   => 'publish',
        'post_author'   => 1
    );

    $post_id = wp_insert_post( $my_post );

    wp_set_object_terms( $post_id, 'ресторанти', 'wpbdp_category' );
    $termdata = term_exists(  'ресторанти', 'wpbdp_category' );
    $term_taxonomy_ids = wp_set_object_terms( $post_id,  'ресторанти', 'wpbdp_category' );*/





    //$this->listings = new WPBDP_Listings_API();
    //var_dump(new WPBDP_Listings_API());

    /*$cats = ['Аксесоари - производство и продажба',
        'Алкохолни и безалкохолни напитки - магазини',
        'Антикварни магазини',
        'Бижутерийни магазини',
        'Био магазини',
        'Вестници и списания - продажби',
        'Вино магазини'];


    createProductCat($cats[1], 0);*/

}
add_action( 'init', 'addListings' );

/*add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'wpbdp_listing',
        array(
            'labels' => array(
                'name' => __( 'Пицинца при Коко' ),
                'singular_name' => __( 'Пицинца при Коко' )
            ),
            'public' => true,
            'has_archive' => false,
        )
    );
}*/


$cats = [];


for($i = 0; $i < count($cats); $i++)
{

    $term_name = $cats[$i];
    $slug = $slug = clean(strtolower($term_name));

    // Insert category in wp_terms table
    wp_insert_term(
        $term_name, // the term
        'wpbdp_category', // the taxonomy
        array(
            'description'=> 'none',
            'slug' => $slug,
            'parent'=> 0
        )
    );


}

function clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9.\-]/', '', $string); // Removes special chars.
    return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}


/*
// Insert the post into the wp_posts table
$my_post = array(
    'post_title'    => 'Пицинцата на Коко',
    'post_type'     => 'wpbdp_listing',
    'post_content'  => 'This is my post.',
    'post_status'   => 'publish',
    'post_author'   => 1
);

$post_id = wp_insert_post( $my_post );

wp_set_object_terms( $post_id, 'ресторанти', 'wpbdp_category' );
$term_data = term_exists(  'ресторанти', 'wpbdp_category' );
$term_taxonomy_ids = wp_set_object_terms( $post_id,  'пицарии', 'wpbdp_category' );




$args = array(
    'post_type' => 'wpbdp_listing'
);
$query = new WP_Query($args);
//var_dump($query->posts);


var_dump($post_id);
var_dump($term_data);
var_dump($term_taxonomy_ids);*/