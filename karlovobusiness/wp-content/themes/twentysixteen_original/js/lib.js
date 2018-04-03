/**
 * Created by KBIZ on 1/13/17.
 *
 *
 * GOOGLE MAP - on Safari not working! waiting for fix
 * https://businessdirectoryplugin.com/support-forum/support-questions/google-maps-module-stops-working/
 *
 *
 */

jQuery(document).ready(function () {

    stop = false;
    document.cookie = 'payAtOffice=false';
    //document.cookie = 'selectedPlan=free';

    console.log('load LIB:', getCookie('kbiz_url'));
    if (getCookie('kbiz_url') == '' || getCookie('kbiz_url') == siteURL) {
        //document.cookie = 'kbiz_url='+siteURL;
    }

    initKBIZTheme();

    if (getCookie('seen') == 'true') {
        jQuery('#welcome-screen').css('display', 'none');
        stop = true;
    } else {
        jQuery('#welcome-screen').css('display', 'block');
    }

    if (isMobile()) {
        jQuery('body').addClass('mobile');
    } else {
        jQuery('body').addClass('desktop');
    }


    jQuery('.cat-container a').css('cursor', 'default');


    if (jQuery('body').hasClass('wpbdp-view-main') && jQuery('body').hasClass('desktop')) {
        jQuery('.wrap').css('overflow', 'hidden');
        jQuery('body').css('overflow', 'hidden');
        moveBackground();
    }
    jQuery("#btn-enter").on("click", function () {
        stop = true;


        /*Well, how many:
         hours are in a day?
         days are in a year?
         years are in a decade?
         Answer:

         time += 3600 * 1000 * 24 * 365 * 10;*/


        var now = new Date();
        var time = now.getTime();
        time += 3600 * 1000 * 24 * 7;//60 * 5 * 1000;//
        now.setTime(time);
        document.cookie =
            'seen=true' +
            '; expires=' + now.toUTCString() +
            '; path=/';

    });


    jQuery(".cat-container a").click(function (e) {

        if (!stop) {
            e.preventDefault();
            e.stopPropagation();
        }
    });

    if (jQuery('.step-confirmation').length > 0) {
        var imgUrl = templateUrl + '../../../uploads/2017/05/3.jpg';
        jQuery("body").css("background-image", "url('" + imgUrl + "')");
    }

    // if (jQuery('.step-before-save').length > 0) {
    //     var html = '<div id="payment-options"> <label > <input type="radio" id="q128" name="quality[21]" value="1" /> Плащане в офис или банков път </label> ' +
    //         '<label > <input type="radio" id="q129" name="quality[21]" checked="checked" value="2" /> Онлайн плащане с Paypal, Stripe и др. </label>' +
    //         '<p id="payment-info" class="hide">За консумирана електрическа енергия ЕВН България Електроснабдяване ЕАД Ситибанк Н.А. – клон София ВІС: CITIBGSF; IBAN: BG39CITI92501000109001</p></div>' +
    //         '<div class="clearfix"></div> '
    //     jQuery('#wpbdp-listing-form-extra input[type="submit"]').before(html);
    // }

    if (getCookie("selectedPlan") == 'free') {
        jQuery('#payment-options').hide();
        console.log('Free plan so hide payment options!!', jQuery('#payment-options'));
    }


    jQuery('input[name="quality[21]"]').on('change', function () {

        if (jQuery('#payment-info').hasClass('hide')) {
            document.cookie = 'payAtOffice=true';
            jQuery('#payment-info').removeClass('hide');
            jQuery('#payment-info').addClass('show');
        } else {
            jQuery('#payment-info').removeClass('show');
            jQuery('#payment-info').addClass('hide');
            document.cookie = 'payAtOffice=false';
        }

    })


    if (jQuery('#welcome-screen').length == 0) {
        jQuery("nav.sidebar").css('left', '0');
        jQuery('.bg').css('display', 'none');
    }

    //http://codepen.io/agrimsrud/pen/EmCoa


    htmlBodyHeightUpdate();


    //remove
    /*jQuery("#welcome-screen").hide();
     jQuery("#logo2").hide();
     var element = document.getElementsByClassName("cat-container")[0];
     var menu = document.getElementsByClassName("sidebar")[0];
     if( element && menu ){
     animate(element);
     !isMobile() ? animateMenu(menu) : null;
     }*/


    var loader =   document.getElementById('loader')
        , α = 0
        , π = Math.PI
        , t = 1//34

    if (loader) {
        (function draw() {
            α++;
            α %= 360;
            var r = ( α * π / 180 )
                , x = Math.sin(r) * 125
                , y = Math.cos(r) * -125
                , mid = ( α > 180 ) ? 1 : 0
                , anim = 'M 0 0 v -125 A 125 125 1 '
                + mid + ' 1 '
                + x + ' '
                + y + ' z';
            loader.setAttribute('d', anim);
            if (α == 359 || stop) {
                // console.log('-', stop);
                showIcons();
                stop = true;
            } else {
                setTimeout(draw, t); // Redraw
            }
        })();

        function showIcons() {
            jQuery('.cat-container a').css('cursor', 'pointer');
            jQuery(".hi-icon-wrap").css("z-index", "1");

            jQuery("#welcome-screen").hide();
            jQuery("#logo2").hide();
            jQuery(function () {
                jQuery({blurRadius: 0}).animate({blurRadius: 5}, {
                    duration: 500,
                    easing: 'swing', // or "linear"
                                     // use jQuery UI or Easing plugin for more options
                    step: function () {
                        //console.log(this.blurRadius);
                        jQuery('.bg').css({
                            "-webkit-filter": "blur(" + this.blurRadius + "px)",
                            "filter": "blur(" + this.blurRadius + "px)"
                        });
                    }
                });
            });

            var element = document.getElementsByClassName("cat-container")[0];
            animate(element);
            jQuery(window).width() > 767 ? animateMenu() : null;
        }
    }


    //style inputs
    jQuery("#wpbdp-main-box form input[type='text']").addClass('form-control');
    jQuery("form#wpbdp-search-form input[type='text']").addClass('form-control');

    // added bootstrap input classes for registering company form
    jQuery('form #wpbdp-form-field').addClass('form-control');

    // added bootstrap input classes for login form
    jQuery('#user_login').addClass('form-control');
    jQuery('#user_pass').addClass('form-control');

    // jQuery('#wpbdp-field-2').attr("multiple","multiple");
    // jQuery('#wpbdp-field-2').prepend('<option value="-1">Изберете дейност</option>')
    //jQuery('#wpbdp-field-2').select2();
    /*jQuery('#wpbdp-field-2').select2({
        templateResult: function (data) {
            console.log('gg',data)
            // We only really care if there is an element to pull classes from
            if (!data.element) {
                return data.text;
            }

            var $wrapper;
            if (jQuery(data.element).text().indexOf(String.fromCharCode(160)) == 0) {
                $wrapper = jQuery('<span></span>');
                $wrapper.addClass('sub-cat');
                $wrapper.text('-' + data.text);

            } else {
                $wrapper = jQuery('<span></span>');
                $wrapper.addClass('main-cat');
                $wrapper.text(data.text);
            }

            return $wrapper;
        }
    })*/

    //jQuery('#wpbdp-field-12').select2();
    jQuery('.primary-menu').addClass('nav navbar-nav');


    jQuery('.wpbdp-plan-info-box').on('click', function (e) {
        jQuery(e.currentTarget).find('input').prop("checked", true);
        var selectedPlan = jQuery(e.currentTarget).find('input').prop("value");
        if (selectedPlan == 1) {
            document.cookie = 'selectedPlan=free';
        } else {
            document.cookie = 'selectedPlan=notFree';
        }
        jQuery('#wpbdp-listing-form-fees').submit();
    });


    //htmlBodyHeightUpdate();
    jQuery(window).resize(function () {
        htmlBodyHeightUpdate();
        handleMenu();
    });
    jQuery(window).scroll(function () {
        height2 = jQuery('.main').height();
        htmlBodyHeightUpdate();
    });
});


//transition
function animate(element) {
    transition.begin(element, ["opacity", "0", "1", "500ms", "linear"], element.style.display = "block");
}

function animateMenu() {
    var menu = document.getElementsByClassName("sidebar")[0];
    transition.begin(menu, [
        ["transform", "translateX(0)", "translateX(200px)", "1s", "ease-in-out"],
    ]);
}


// moveBackground  --  https://codepen.io/vajkri/pen/grgQmb
var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

function moveBackground() {
    x += (lFollowX - x) * friction;
    y += (lFollowY - y) * friction;

    translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

    jQuery('.bg').css({
        '-webit-transform': translate,
        '-moz-transform': translate,
        'transform': translate
    });

    window.requestAnimationFrame(moveBackground);
}
jQuery(window).on('mousemove click', function (e) {

    var lMouseX = Math.max(-100, Math.min(100, jQuery(window).width() / 2 - e.clientX));
    var lMouseY = Math.max(-100, Math.min(100, jQuery(window).height() / 2 - e.clientY));
    lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
    lFollowY = (10 * lMouseY) / 100;

});


function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}


function htmlBodyHeightUpdate() {
    var height3 = jQuery(window).height();
    var height1 = jQuery('nav.sidebar').height() + 50;
    height2 = jQuery('.main').height();
    if (height2 > height3) {
        jQuery('html').height(Math.max(height1, height3, height2) + 10);
        jQuery('body').height(Math.max(height1, height3, height2) + 10);
    }
    else {
        jQuery('html').height(Math.max(height1, height3, height2));
        jQuery('body').height(Math.max(height1, height3, height2));
    }

}

function handleMenu() {

    var menu = document.getElementsByClassName("sidebar")[0];
    var style = window.getComputedStyle(menu);
    var matrix = new WebKitCSSMatrix(style.webkitTransform);
    // console.log('translateX: ', matrix.m41);

    if (matrix.m41 != 0) {
        transition.begin(menu, [
            ["transform", "translateX(0)", "translateX(0px)", "1s", "ease-in-out"],
        ]);
    }

    if (jQuery(window).width() > 767) {
        jQuery(menu).css('left', 0)
    } else {
        jQuery(menu).css('left', 0)
    }
}


function initKBIZTheme() {
    var REG_PATH = '/karlovobusiness/bg/%d0%b2%d1%81%d0%b8%d1%87%d0%ba%d0%b8-%d0%be%d0%b1%d1%8f%d0%b2%d0%b8/';
    var RATING_PATH = '/karlovobusiness/bg/%d0%b2%d1%81%d0%b8%d1%87%d0%ba%d0%b8-%d0%be%d0%b1%d1%8f%d0%b2%d0%b8/';
    var menu = document.getElementsByClassName("sidebar")[0];

    if (jQuery(window).width() > 767) {
        jQuery(menu).css('left', -200)
    } else {
        jQuery(menu).css('left', 0)
    }



    jQuery('.listing-actions a').addClass('btn btn-success');
    // jQuery('#content .wpbdp-page:not(.wpbdp-page-main_page)').addClass('container');

    jQuery(".wpbdp-rating-info span > a").click(function (e) {
        var $anchor = jQuery(this);
        var id = $anchor.attr('href');
        jQuery('html, body').stop().animate({
            scrollTop: jQuery('form[action="' + id + '"]').offset().top - 190
        }, 1500);
        e.preventDefault(); //this is the important line.
    });


    //https://stackoverflow.com/questions/9847580/how-to-detect-safari-chrome-ie-firefox-and-opera-browser
    /*var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) {
     return p.toString() === "[object SafariRemoteNotification]";
     })(!window['safari'] || safari.pushNotification);*/

    var catsArray = [];

    if (localStorage) {
        catsArray = localStorage.getItem('cats')

    } else {
        catsArray = getCookie('cats').split(',');
    }

    catsArray = catsArray == null ? [] : catsArray;

    if (catsArray.length > 1) {
        window.html = '';
        jQuery.each(JSON.parse(catsArray), function (i, cat) {

            window.html += '<div class="cat-icons2">' +
                '<a href="#" class="' + cat.class + '"></a>' +
                '<div class="cat_name">' + cat.name + '</div></div>'

        })
        jQuery('#wpbdp-listing-form-categories').append('<div id="helper-categories">' + html + '</div>');

    }


    /*if (jQuery('body').hasClass('wpbdp-view-submit_listing')) {
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    }*/

    /*


     jQuery('.wpbdp-listing.wpbdp-excerpt a').click(function(e){
     // e.preventDefault();
     document.cookie = 'kbiz_url=' + window.location.href;
     // window.location.href = e.target.href;
     });


     jQuery('.menu-item.menu-item-type-post_type').click(function(e){
     // e.preventDefault();
     document.cookie = 'kbiz_url='+ registerPage;
     // window.location.href = e.target.href;
     });

     */


}


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}






















