<div class="wpbdp-custom-theme-notice">
    This is a custom theme.
</div>


<?php if ( $images->main ): ?>
    <?php echo $images->main->html; ?>
<?php endif; ?>

<div class="listing-details cf">
    <?php foreach ( $fields->not( 'social' ) as $field ): ?>
        <?php echo $field->html; ?>
    <?php endforeach; ?>

    <?php $social_fields = $fields->filter( 'social' ); ?>
    <?php if ( $social_fields ): ?>
    <div class="social-fields cf"><?php echo $social_fields->html; ?></div>
    <?php endif; ?>
</div>

<?php if ( $images->extra ): ?>
<div class="extra-images">
    <ul>
        <?php foreach ( $images->extra as $img ): ?>
        <li><?php echo $img->html; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>
