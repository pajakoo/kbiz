<div id="wpbdp-categories">
    <?php wpbdp_the_directory_categories(); ?>
</div>

<?php if ( $listings ): ?>
    <?php echo $listings; ?>
<?php endif; ?>






<?php

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



