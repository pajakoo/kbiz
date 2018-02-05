<?php
/**
 * Template Name: contacts
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();

$uploads = wp_upload_dir();
?>

    <script src="http://localhost:8888/karlovobusiness/wp-content/themes/twentysixteen_original/js/rendro-easy-pie-chart/dist/easypiechart.js"></script>
    <script>

        jQuery(document).ready(function () {


            var chart = window.chart = new EasyPieChart(document.querySelector('div.chart1'), {
                easing: 'easeOutElastic',
                animate: 3000,
                delay: 2000,
                barColor: '#F9A700',
                trackColor: '#ccc',
                scaleColor: false,
                lineWidth: 1,
                trackWidth: 0.5,
                lineCap: 'butt'
            });
            var chart = window.chart = new EasyPieChart(document.querySelector('div.chart2'), {
                easing: 'easeOutElastic',
                animate: 3000,
                delay: 2000,
                barColor: '#F9A700',
                trackColor: '#ccc',
                scaleColor: false,
                lineWidth: 1,
                trackWidth: 0.5,
                lineCap: 'butt'
            });
            var chart = window.chart = new EasyPieChart(document.querySelector('div.chart3'), {
                easing: 'easeOutElastic',
                animate: 3000,
                delay: 3000,
                barColor: '#F9A700',
                trackColor: '#ccc',
                scaleColor: false,
                lineWidth: 1,
                trackWidth: 0.5,
                lineCap: 'butt'/*,
                 onStep: function (from, to, percent) {
                 this.el.children[0].innerHTML = Math.round(percent);
                 }*/
            });

        })

    </script>

    <!--<div class="chart" data-percent="100">73%</div>
    <div class="fa fa-user" aria-hidden="true"></div>
    <div class="chart2" data-percent="100">
        <span class="percent"></span>
    </div>-->

    <div class="custom-page-container">
        <hr style="border-color:orange">
        <div class="col-md-12">
            <h1 class="text-center" style="background:#F8F8F8; width: 250px; margin: -40px auto;">Контакти</h1>
        </div>
        </hr>
            <div class="row">
                <div class="col-md-4 contacts-text">
                    <div class="charts chart1" data-percent="100">
                        <div class="fa fa-user" aria-hidden="true"></div>
                    </div>
                    <div>лице за контакти:</div>
                    <div>Николай Начев - управляващ съдружник</div>
                </div>
                <div class="col-md-4 contacts-text">
                    <div class="charts chart2" data-percent="100">
                        <div class="fa fa-mobile" aria-hidden="true"></div>

                    </div>
                    <div class="">+ 359 887 376 123</div>
                </div>
                <div class="col-md-4 contacts-text">
                    <div class="charts chart3" data-percent="100">
                        <div class="fa fa-map-marker" aria-hidden="true"></div>
                    </div>
                    <div class="">ул. "Граф Игнатиев 9",<br> гр. Карлово</div>
                </div>
            </div>
    </div>
    <!--<div class="col-lg-4">
        <div class="kbiz-contact-form">
            <?php /*echo do_shortcode('[contact-form-7 id="415" title="contact bg"]');  */?>
        </div>
    </div>-->
    <div class="col-lg-8">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.8027455692363!2d24.806275015119287!3d42.644341525094134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a997b3938bace1%3A0x51612bef279179f9!2sul.+%22Graf+Ignatiev%22+9%2C+4300+Karlovo!5e0!3m2!1sen!2sbg!4v1491577771857"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<?php
get_footer();







