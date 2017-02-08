<a name="ratings"></a>
<div class="wpbdp-ratings-reviews">
    <h3><?php _e('Ratings', 'wpbdp-ratings'); ?></h3>

    <p class="no-reviews-message" style="<?php echo $ratings ? 'display: none;' : ''?>"><?php _e('There are no reviews yet.', 'wpbdp-ratings'); ?></p>
    <?php if ($ratings): ?>
    <div class="listing-ratings">
        <?php foreach ($ratings as $i => $rating): ?>
        <div class="rating <?php echo $i % 2 == 0 ? 'odd' : 'even'; ?>" data-id="<?php echo $rating->id; ?>" data-listing-id="<?php echo get_the_ID(); ?>">
            <div class="edit-actions">
                <?php if ( ($rating->user_id > 0 && $rating->user_id == get_current_user_id() ) || current_user_can('administrator')): ?>
                <a href="#" class="edit">Edit</a> <a href="#" class="delete">Delete</a>
                <?php endif; ?>
            </div>

            <span>
                <meta content="0" />
                <meta content="<?php echo $rating->rating; ?>" />
                <meta content="5" />
                <span class="wpbdp-ratings-stars" data-readonly="readonly" data-value="<?php echo $rating->rating; ?>"></span>
            </span>

            <?php
            $rating_comment = wpbdp_get_option( 'ratings-allow-html' ) ? wp_kses_post( $rating->comment ) : wp_filter_nohtml_kses( $rating->comment );
            $rating_comment = stripslashes( $rating_comment );
            ?>
            <div class="rating-comment">
                <?php echo wpautop( $rating_comment ); ?>
            </div>
            <?php if (($rating->user_id > 0 && $rating->user_id == get_current_user_id() ) || current_user_can('administrator')): ?>
            <div class="rating-comment-edit" style="display: none;">
                <textarea><?php echo esc_textarea( $rating_comment ); ?></textarea>
                <input type="button" value="<?php _e('Cancel', 'wpbdp-ratings'); ?>" class="button cancel-button" />
                <input type="button" value="<?php _e('Save', 'wpbdp-ratings'); ?>" class="submit save-button" />
            </div>
            <?php endif; ?>

            <?php
            $author = ( $rating->user_id == 0 ) ? trim( $rating->user_name ) : trim( get_the_author_meta( 'display_name', $rating->user_id ) );
            ?>
            <div class="rating-authoring-info">
                <span class="author">
                    <?php if ( $author ): ?>
                        <?php echo esc_attr( $author ); ?>
                    <?php else: ?>
                        <?php _e( 'Anonymous', 'wpbdp-ratings' ); ?>
                    <?php endif; ?>
                </span>
                |
                <span class="date" content="<?php echo $rating->created_on; ?>">
                    <?php echo date_i18n(get_option('date_format'), strtotime($rating->created_on)); ?>
                </span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if ($review_form): ?>
        <?php echo $review_form; ?>
    <?php else: ?>
        <?php if ($success): ?>
        <div class="wpbdp-msg">
            <?php if (wpbdp_get_option('ratings-require-approval')): ?>
                <?php _e('Your review has been saved and is waiting for approval.', 'wpbdp-ratings'); ?>
            <?php else: ?>
                <?php _e('Your review has been saved.', 'wpbdp-ratings'); ?>
            <?php endif; ?>
        </div>
        <?php else: ?>
            <div class="wpbdp-msg">
            <?php if ($reason == 'already-rated'): ?>
                <?php _e('You have already rated this listing.', 'wpbdp-ratings'); ?>
            <?php else: ?>
                <?php
                    echo str_replace( '<a>',
                                      '<a href="' . wp_login_url( site_url( $_SERVER['REQUEST_URI'] ) ) . '">',
                                      __( 'Please <a>login</a> to rate this listing.', 'wpbdp-ratings' ) );
                ?>
            <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

</div>
