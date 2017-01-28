<?php

get_header();



//http://businessdirectoryplugin.com/docs-old/matching-the-design-to-your-theme/#businessdirectory-listings
//http://docs.businessdirectoryplugin.com/
//http://businessdirectoryplugin.com/video-tutorials/
//http://docs.businessdirectoryplugin.com/themes/customization.html#core-templates-and-variables-reference



if($query->have_posts() ) {
    while($query->have_posts() ) {
        $query->the_post();
        ?>
        <h2><?php the_title(); ?></h2>
        <!--      get_post_custom()-->
        <?php Kint::dump(  get_post_custom() ); ?>
        <?php
    }

}



return; ?>


$args = array(
    'post_type' => 'wpbdp_listing',
    'posts_per_page' => -1
    //'post_type' => 'wpbdp_category'
);
$query = new WP_Query($args);

Kint::dump($query);


/*


post_author
    post_date
    post_date_gmt
    post_content
    post_title
    post_excerpt
    post_status
    post_modified_gmt

    post_name
    post_parent
    guid
    post_content_filtered



*/
?><!--
<div class="kbiz" >

    <ol class="a-set-of-listings">
        <?php /*if ( $query->have_posts() ): */?>
            <?php /*while( $query->have_posts() ): $query->the_post(); */?>
                <?php
/*                // We call wpbdp_render_listing() here...
                //echo wpbdp_render_listing( null, 'excerpt' );

                // ... but we could've just started using the listing directly as in a regular WP loop.
                 echo get_the_title();
                */?>
            <?php /*endwhile; */?>
        <?php /*else: */?>
            <li class="nothing-found">No listings found.</li>
        <?php /*endif; */?>
    </ol>

--><?php

 if($query->have_posts() ) {
  while($query->have_posts() ) {
    $query->the_post();
    ?>
    <h2><?php the_title(); ?></h2>
<!--      get_post_custom()-->
      <?php Kint::dump(  get_post_custom() ); ?>
    <?php
  }
}
?>

</div>
