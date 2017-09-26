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

    <div class="custom-page-container">
        <hr style="border-color:orange">
        <div class="col-lg-12">
            <h1 class="text-center" style="background:#F8F8F8; width: 250px; margin: -40px auto;">Контакти</h1>
        </div>
        </hr>
        <div class="col-lg-12">
            <div class="col-lg-12 contacts-text">
                <div class="fa fa-phone" aria-hidden="true"></div><div class="">+ 359 889 123 123</div>
                <div class="fa fa-map-marker" aria-hidden="true"></div><div class="">ул. "Граф Игнатиев 9",<br> гр. Карлово</div>
                <div class="col-lg-12 contacts-content">
            </div>
            </div>
            <div class="col-lg-4">
                <div class="kbiz-contact§-form">
                    <?php echo do_shortcode('[contact-form-7 id="415" title="contact bg"]'); ?>
                </div>
            </div>
            <div class="col-lg-8">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.8027455692363!2d24.806275015119287!3d42.644341525094134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a997b3938bace1%3A0x51612bef279179f9!2sul.+%22Graf+Ignatiev%22+9%2C+4300+Karlovo!5e0!3m2!1sen!2sbg!4v1491577771857"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php
get_footer();







