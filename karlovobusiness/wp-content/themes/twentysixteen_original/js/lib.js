/**
 * Created by KBIZ on 1/13/17.
 *
 *
 * GOOGLE MAP - on Safari not working! waiting for fix
 * https://businessdirectoryplugin.com/support-forum/support-questions/google-maps-module-stops-working/
 *
 *
 */
jQuery(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
    //alert("document is ready");
});

jQuery(window).load(function() {
    // executes when complete page is fully loaded, including all frames, objects and images
    //alert("window is loaded");

    // moveBackground  --  https://codepen.io/vajkri/pen/grgQmb
    var lFollowX = 0,
        lFollowY = 0,
        x = 0,
        y = 0,
        friction = 1 / 30,

        stop = false,
        menu = document.getElementsByClassName("sidebar")[0];

    htmlBodyHeightUpdate();
    initKBIZTheme();


    //Event Listeners
    jQuery(window).on('mousemove click', function (e) {

        var lMouseX = Math.max(-100, Math.min(100, jQuery(window).width() / 2 - e.clientX));
        var lMouseY = Math.max(-100, Math.min(100, jQuery(window).height() / 2 - e.clientY));
        lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
        lFollowY = (10 * lMouseY) / 100;
    });
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
    jQuery(window).resize(function () {
        htmlBodyHeightUpdate();
        //handleMenu();
    });
    jQuery(window).scroll(function () {
        height2 = jQuery('.main').height();
        htmlBodyHeightUpdate();
    });
    jQuery(".wpbdp-rating-info span > a").click(function (e) {
        var $anchor = jQuery(this);
        var id = $anchor.attr('href');
        jQuery('html, body').stop().animate({
            scrollTop: jQuery('form[action="' + id + '"]').offset().top - 190
        }, 1500);
        e.preventDefault(); //this is the important line.
    });


    function initKBIZTheme() {

        if( WURFL.form_factor == 'Tablet' ){
            jQuery('body').addClass('tablet');
        } else if (WURFL.form_factor == 'Smartphone' ) {
            jQuery('body').addClass('mobile smartphone');
        } else {
            jQuery('body').addClass('desktop');
        }

        if (window.screen.orientation.type == "landscape-primary"){
            jQuery('body').addClass('landsacape-orientation');
        } else {
            jQuery('body').addClass('portrait-primary');
        }

        if (getCookie('seen') == 'true') {
            jQuery('#welcome-screen').css('display', 'none');
            stop = true;
        } else {
            jQuery('#welcome-screen').css('display', 'block');
        }

        jQuery('.cat-container a').css('cursor', 'default');

        if (!jQuery('body').hasClass('wpbdp-view-main') ){
            jQuery(menu).css({left:'0'});
            jQuery(menu).show();
        }

        if (jQuery('body').hasClass('wpbdp-view-main') && jQuery('body').hasClass('desktop')) {
            jQuery('.wrap').css('overflow', 'hidden');
            jQuery('body').css('overflow', 'hidden');
            moveBackground();
        }


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
                if ( jQuery('body').hasClass('desktop') || jQuery('body').hasClass('tablet landsacape-orientation')) {
                    animateMenu()
                } else {
                    jQuery(menu).show();

                }
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

        //jQuery('#wpbdp-field-12').select2();
        jQuery('.primary-menu').addClass('nav navbar-nav');

        if (is_user_logged_in) {
            jQuery('user_icon').addClass('logged');
            console.log('user is logged show user-icon')
        }


        jQuery('.listing-actions a').addClass('btn btn-success');
        // jQuery('#content .wpbdp-page:not(.wpbdp-page-main_page)').addClass('container');

    }

    //transition
    function animate(element) {
        transition.begin(element, ["opacity", "0", "1", "500ms", "linear"], element.style.display = "block");
    }

    function animateMenu() {
        console.log('animateMenu called ')
        jQuery(menu).css('display', 'block');
        transition.begin(menu, [
            ["transform", "translateX(0)", "translateX(200px)", ".s", "ease-in-out"],
        ]);
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

    function handleMenu() {

        var style = window.getComputedStyle(menu);
        var matrix = new WebKitCSSMatrix(style.webkitTransform);
         console.log('translateX: ', matrix.m41);

        if (matrix.m41 != 0) {
            transition.begin(menu, [
                ["transform", "translateX(0)", "translateX(0px)", "1s", "ease-in-out"],
            ]);
        }

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

    function isMobile() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

});
