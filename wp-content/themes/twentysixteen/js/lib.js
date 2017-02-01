/**
 * Created by KBIZ on 1/13/17.
 */


(function helloWorld(){
    console.log('helloWorld');
    jQuery("#wpbdp-main-box form input").addClass('form-control');
    jQuery("form#wpbdp-search-form input").addClass('form-control');

    // added bootstrap input classes for registering company form
    jQuery('form #wpbdp-form-field').addClass('form-control');
    
    // added bootstrap input classes for login form
    jQuery('#user_login').addClass('form-control');
    jQuery('#user_pass').addClass('form-control');
    jQuery('#wpbdp-field-2').select2();
    jQuery('#wpbdp-field-12').select2();


})();


function htmlBodyHeightUpdate(){
    var height3 = jQuery( window ).height();
    var height1 = jQuery('.nav').height()+50;
    height2 = jQuery('.main').height();
    if(height2 > height3){
        jQuery('html').height(Math.max(height1,height3,height2)+10);
        jQuery('body').height(Math.max(height1,height3,height2)+10);
    }
    else
    {
        jQuery('html').height(Math.max(height1,height3,height2));
        jQuery('body').height(Math.max(height1,height3,height2));
    }

}
jQuery(document).ready(function () {
    htmlBodyHeightUpdate();
    jQuery( window ).resize(function() {
        htmlBodyHeightUpdate()
    });
    jQuery( window ).scroll(function() {
        height2 = jQuery('.main').height();
        htmlBodyHeightUpdate();
    });
});