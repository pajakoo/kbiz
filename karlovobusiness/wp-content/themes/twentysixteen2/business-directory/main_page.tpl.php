<div class="col-lg-12 cat-container">
    <?php

//taxonomy=wpbdp_category&post_type=wpbdp_listing&post_type=category

$taxonomy = 'wpbdp_category';
$terms = get_terms($taxonomy, array(
    'parent' => 0,
    'hide_empty' => false
));

//Kint::dump($terms);

if ( $terms && !is_wp_error( $terms ) ) :
        foreach ( $terms as $term ) {  ?>
            <a href="<?php echo esc_url(get_term_link($term)) ?>">
                <div class="cat-icons <?php echo get_field('class', $taxonomy . '_' . $term->term_id) ?>">
                    <div class="fs2">
                        <div class="icon-format icon-<?php echo get_field('class', $taxonomy . '_' . $term->term_id) ?>"></div>
                    </div>
                    <div class="cat_name"><?php echo get_field('short_name', $taxonomy . '_' . $term->term_id); /*$term->name; */ ?></div>
                </div>
            </a>
<!--            <img src="--><?php //echo get_field( 'img', $taxonomy.'_'.$term->term_id) ?><!--" />-->
        <?php } ?>
    </div>
<?php endif;



return;


Kint::dump(get_the_category(1));return;
// load all 'category' terms for the post
$terms = get_the_terms( get_the_ID(), 'category');

Kint::dump($terms );

// we will use the first term to load ACF data from
if( !empty($terms) ) {

    $term = array_pop($terms);

    $custom_field = get_field('vt', $term );

    Kint::dump($custom_field );
}

//return;
$args = array(
    'post_type' => 'wpbdp_listings',
    'posts_per_page' => -1
);
$query = new WP_Query($args);
if($query->have_posts() ) {
    while($query->have_posts() ) {
        $query->the_post();
        ?>
        <h2><?php the_content(); ?></h2>
        <?php
    }
}


return;

$categories = get_categories($args);


foreach($categories as $category) {
   Kint::dump($category);
}




return;


$term_id = 373;
if($query->have_posts() ) {
    while($query->have_posts() ) {
    $query->the_post();
    ?>
        <h2><?php the_title(); ?></h2>
        <!--      get_post_custom()-->
        <?php  Kint::dump( get_cat_name("restorants")); ?>
    <?php
    }
}

return


$directory_categories = wpbdp_categories_list();
foreach ($directory_categories as $dir_category) {
    Kint::dump( get_term_meta($dir_category->term_id));
    echo     '<div class="cat-icons '. $dir_category->slug .'">'. $dir_category->name .'</div>';
}



/*

$html = wpbdp_categories_list();


var_dump($images);



highlight_string("<?php\n\$data =\n" . var_export($html, true) . ";\n?>");

$listing_id: int. The listing ID.
$listing: object. An instance of WPBDP_Listing providing easy access to properties and functionality related to this listing.
$is_sticky: boolean. True if the listing is featured.
$title: title. Title for the page. Usually the listing’s title.
$sticky_tag: string. HTML output for the “Featured” badge. See listing-sticky-tag.tpl.php.
$fields: object. Instance of WPBDP_Field_Display_List providing easy access to the field values (among other things) for this particular listing. You can do a lot of things with this object, but most of the time you just want to call echo $fields->html; to output the list of fields applying to the listing.
$images: object. An object provinding easy access to the listing images.
The $images object itself has properties main and thumbnail for the main listing image (for single views) or the thumbnail (for excerpt views); and extra, an array providing access to additional images available for the listing.
Each image is itself an object with the following properties:
id: int. The image ID.
html: string. HTML (link and <img> tags) to render this image.
url: string. URL to the full version of the image.
width: int. Image width.
height: int. Image height.

*/

/*
public term_id -> integer373
public name -> string UTF-8(9) "Заведения"
public slug -> string(54) "%d0%b7%d0%b0%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f"
public term_group -> integer0
public term_taxonomy_id -> integer373
public taxonomy -> string(14) "wpbdp_category"
public description -> string(0) ""
public parent -> integer0
public count -> integer0
public filter -> string(3) "raw"
public cat_ID -> integer373
public category_count -> integer0
public category_description -> string(0) ""
public cat_name -> string UTF-8(9) "Заведения"
public category_nicename -> string(54) "%d0%b7%d0%b0%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f"
public category_parent -> integer0
*/
