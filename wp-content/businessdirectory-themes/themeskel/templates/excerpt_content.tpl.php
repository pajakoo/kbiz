<div class="wpbdp-custom-theme-notice">
    This is a custom theme.
</div>

<div class="listing-title">
    <?php echo $fields->t_title->value; ?>
</div>

<div class="excerpt-content">
    <?php if ( $images->thumbnail ): ?>
        <?php echo $images->thumbnail->html; ?>
    <?php endif; ?>

    <div class="listing-details">
        <?php
        // Prints the HTML output from all fields in excerpt view except for the title.
        echo $fields->exclude('t_title')->html;
        ?>
    </div>

</div>
