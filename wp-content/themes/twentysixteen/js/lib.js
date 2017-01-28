/**
 * Created by KBIZ on 1/13/17.
 */


(function helloWorld(){
    console.log('helloWorld');
    jQuery("#wpbdp-main-box form input").addClass('form-control');
})()


function htmlbodyHeightUpdate(){
    var height3 = jQuery( window ).height()
    var height1 = jQuery('.nav').height()+50
    height2 = jQuery('.main').height()
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
    htmlbodyHeightUpdate()
    jQuery( window ).resize(function() {
        htmlbodyHeightUpdate()
    });
    jQuery( window ).scroll(function() {
        height2 = jQuery('.main').height()
        htmlbodyHeightUpdate();
    });
});