<?php
$months = array(
    '01' => _x( 'Jan', 'months', 'wpbdp-stripe' ),
    '02' => _x( 'Feb', 'months', 'wpbdp-stripe' ),
    '03' => _x( 'Mar', 'months', 'wpbdp-stripe' ),
    '04' => _x( 'Apr', 'months', 'wpbdp-stripe' ),
    '05' => _x( 'May', 'months', 'wpbdp-stripe' ),
    '06' => _x( 'Jun', 'months', 'wpbdp-stripe' ),
    '07' => _x( 'Jul', 'months', 'wpbdp-stripe' ),
    '08' => _x( 'Aug', 'months', 'wpbdp-stripe' ),
    '09' => _x( 'Sep', 'months', 'wpbdp-stripe' ),
    '10' => _x( 'Oct', 'months', 'wpbdp-stripe' ),
    '11' => _x( 'Nov', 'months', 'wpbdp-stripe' ),
    '12' => _x( 'Dec', 'months', 'wpbdp-stripe' ),
);
?>
<form action="<?php echo $url; ?>" method="post" id="wpbdp-stripe-form" class="wpbdp-cc-form">
    <input type="hidden" name="_stripeKey" value="<?php echo $key; ?>" />
    <input type="hidden" name="stripeToken" value="" />

    <h4><?php _ex( 'Credit Card Details', 'checkout form', 'wpbdp-stripe'); ?></h4>
    <p><?php _ex( 'Please enter your credit card details below.', 'checkout form', 'wpbdp-stripe' ); ?></p>

    <div class="wpbdp-msg error stripe-errors" style="display:none;"></div>

    <table class="wpbdp-cc-fields">
        <tr class="wpbdp-cc-field cc-name">
            <td scope="row">
                <label for="wpbdp-billing-field-name"><?php _ex( 'Name on card:', 'checkout form', 'WPBDM' ); ?></label>
            </td>
            <td>
                <input type="text" id="wpbdp-billing-field-name" size="25" data-stripe="name" />
            </td>
        </tr>
        <tr class="wpbdp-cc-field cc-number">
            <td scope="row">
                <label for="wpbdp-cc-field-number"><?php _ex( 'Card Number:', 'checkout form', 'wpbdp-stripe' ); ?></label>
            </td>
            <td>
                <input type="text" id="wpbdp-cc-field-number" size="25" data-stripe="number" />
            </td>
        </tr>
        <tr class="wpbdp-cc-field cc-exp">
            <td scope="row">
                <label for="wpbdp-cc-field-exp"><?php _ex( 'Expiration Date (MM/YYYY):', 'checkout form', 'wpbdp-stripe' ); ?></label>
            </td>
            <td>
                <select id="wpbdp-cc-field-exp" data-stripe="exp-month">
                    <?php foreach ( $months as $month => $name ): ?>
                        <option value="<?php echo $month; ?>"><?php echo $month; ?> - <?php echo $name; ?></option>
                    <?php endforeach; ?>
                </select> /
                <!--<input type="text" size="2" data-stripe="exp-month" /> /-->
                <input type="text" size="8" data-stripe="exp-year" />
            </td>
        </tr>
        <tr class="wpbdp-cc-field cc-cvc">
            <td scope="row">
                <label for="wpbdp-cc-field-cvc"><?php _ex( 'CVC:', 'checkout form', 'wpbdp-stripe' ); ?></label>
            </td>
            <td>
                <input type="text" id="wpbdp-cc-field-cvc" size="8" data-stripe="cvc" />
            </td>
        </tr>
        <?php if ( wpbdp_get_option( 'stripe-billing-address-check' ) ): ?>
        <tr class="wpbdp-cc-field cc-billing-address-info">
            <th colspan="2">
                <?php _ex( 'Billing Address', 'checkout form', 'wpbdp-stripe' ); ?>
            </th>
        </tr>
        <tr class="wpbdp-cc-field customer-country">
            <td scope="row">
                <label for="wpbdp-billing-field-country"><?php _ex( 'Country:', 'checkout form', 'WPBDM' ); ?></label>
            </td>
            <td>
                <input type="text" id="wpbdp-billing-field-country" size="25" data-stripe="address_country" />
            </td>
        </tr>
        <tr class="wpbdp-cc-field customer-state">
            <td scope="row">
                <label for="wpbdp-billing-field-state"><?php _ex( 'State:', 'checkout form', 'WPBDM' ); ?></label>
            </td>
            <td>
                <input type="text" id="wpbdp-billing-field-state" size="25" data-stripe="address_state" />
            </td>
        </tr>
        <tr class="wpbdp-cc-field customer-city">
            <td scope="row">
                <label for="wpbdp-billing-field-city"><?php _ex( 'City:', 'checkout form', 'WPBDM' ); ?></label>
            </td>
            <td>
                <input type="text" id="wpbdp-billing-field-city" size="25" data-stripe="address_city" />
            </td>
        </tr>
        <tr class="wpbdp-cc-field customer-address-1">
            <td scope="row">
                <label for="wpbdp-billing-field-address-1"><?php _ex( 'Address Line 1:', 'checkout form', 'WPBDM' ); ?></label>
            </td>
            <td>
                <input type="text" id="wpbdp-billing-field-address-1" size="25" data-stripe="address_line1" />
            </td>
        </tr>
        <tr class="wpbdp-cc-field customer-address-2">
            <td scope="row">
                <label for="wpbdp-billing-field-address-2"><?php _ex( 'Address Line 2:', 'checkout form', 'WPBDM' ); ?></label>
            </td>
            <td>
                <input type="text" id="wpbdp-billing-field-address-2" size="25" data-stripe="address_line2" />
            </td>
        </tr>
        <tr class="wpbdp-cc-field customer-zip-code">
            <td scope="row">
                <label for="wpbdp-billing-field-zip-code"><?php _ex( 'ZIP Code:', 'checkout form', 'WPBDM' ); ?></label>
            </td>
            <td>
                <input type="text" id="wpbdp-billing-field-zip-code" size="25" data-stripe="address_zip" />
            </td>
        </tr>
        <?php endif; ?>
    </table>


    <input type="submit" value="<?php _ex( 'Submit Payment', 'checkout form', 'wpbdp-stripe' ); ?>" class="button submit" />
</form>
