<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php

?><h2 class="category-name">
    <?php echo esc_html( $category->name ); ?>
</h2>

<?php do_action( 'wpbdp_before_category_page', $category ); ?>
<?php echo wpbdp_x_render( 'listings', array( 'query' => $query ) ); ?>
<?php do_action( 'wpbdp_after_category_page', $category ); ?>
