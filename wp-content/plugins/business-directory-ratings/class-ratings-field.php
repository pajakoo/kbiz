<?php
class WPBDP_Ratings_Field extends WPBDP_FormFieldType {

    public function __construct() {
        parent::__construct( 'Ratings Field' );
    }

    public function get_id() {
        return 'ratings';
    }

    public function get_supported_associations() {
        return array( 'custom' );
    }

    public function get_behavior_flags( &$field ) {
        return array( 'no-submit', 'no-delete', 'no-validation' );
    }

    public function display_field( &$field, $post_id, $display_context ) {
        global $wpbdp_ratings;

        $html = $field->html_value( $post_id );

        if ( 'listing' == $display_context ) {
            if ( $wpbdp_ratings->can_post_review( $post_id ) ) {
                $html .= '<br/>' . sprintf('<a href="#rate-listing-form" class="rate-listing-link">%s</a>', __('Rate this listing', 'wpbdp-ratings'));
            }
        }

        return parent::standard_display_wrapper( $field,
                                                 $html,
                                                 'wpbdp-rating-info'
                                                );
    }

    public function get_field_value( &$field, $post_id ) {
        global $wpbdp_ratings;
        return $wpbdp_ratings->get_rating_info( $post_id );
    }

    public function get_field_html_value( &$field, $post_id, $context = '' ) {
        global $wpbdp_ratings;

        $rating = $field->value( $post_id );

        if ( ! $rating || ! $wpbdp_ratings->enabled() )
            return '';

        $html = '';
        $threshold = intval(wpbdp_get_option('ratings-min-ratings'));

        if ($rating->count >= $threshold) {
            $html .= sprintf('<span class="wpbdp-ratings-stars" data-readonly="readonly" data-value="%s" content="%s"></span>', $rating->count > 0 ? $rating->average : 0.0, $rating->count > 0 ? $rating->average : 0.0);
            $html .= sprintf('<span class="count">(<span class="val">%s</span>)</span>', $rating->count);
        } else {
            $html .= '<span>' . __('(More feedback needed)', 'wpbdp-ratings') . '</span>';
        }

        return $html;
    }

    public function get_field_plain_value( &$field, $post_id ) {
        $value = $field->value( $post_id );

        if ( ! $value )
            return '';

        return $value->average;
    }

    public function render_field_inner( &$field, $value, $context, &$extra=null, $field_settings = array() ) {
        global $wpbdp_ratings;

        if ( ! $wpbdp_ratings->enabled() || 'search' !== $context )
            return '';

        $html  = '';
        $html .= __( 'at least ', 'wpbdp-ratings' );
        $html .= sprintf( '<select id="%s" name="%s">', 'wpbdp-field-' . $field->get_id(), 'listingfields[' . $field->get_id() . ']' );

        for ( $i = 0; $i <= 5; $i++ ) {
            $html .= sprintf( '<option value="%s" %s>%s</option>',
                               $i,
                               $value == $i ? 'selected="selected"' : '',
                               $i );
        }

        $html .= '</select>';

        return $html;
    }

    public function get_schema_org( $field, $post_id ) {
        $rating = $field->value( $post_id );

        $schema = array();
        $schema['aggregateRating'] = array(
            '@type' => 'AggregateRating',
            'ratingValue' => $rating->count > 0 ? $rating->average : 0.0,
            'reviewCount' => $rating->count,
            'ratingCount' => $rating->count );
        $schema['review'] = array();

        foreach ( wpbdp_ratings()->get_reviews( $post_id ) as $review ) {
            $author = ( $rating->user_id == 0 ) ? trim( $rating->user_name ) : trim( get_the_author_meta( 'display_name', $rating->user_id ) );

            $schema['review'][] = array(
                '@type' => 'Review',
                'author' => $author ? $author : __( 'Anonymous', 'wpbdp-ratings' ),
                'datePublished' => $review->created_on,
                'reviewBody' => $review->comment,
                'reviewRating' => array(
                    '@type' => 'Rating',
                    'ratingValue' => $review->rating,
                    'bestRating' => 5,
                    'worstRating' => 0
                )
            );
        }

        return $schema;
    }

}

