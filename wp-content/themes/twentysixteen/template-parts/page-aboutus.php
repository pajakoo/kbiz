<?php
/**
 * Template Name: about us
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

    <div class="about-us-container row">
        <div class="col-lg-12">
            <h1 class="text-center">Основатели</h1>
        </div>

        <div class="team-container col-lg-12">
            <div class="team-content col-lg-3">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2016/11/nade.png'; ?>" alt="">
                <h3 class="text-center team-name">Николай Начев</h3>
                <h4 class="text-center team-position">Меринджей</h4>
                <div class="team-info">
                    <strong><abbr title="Phone">Phone:</abbr></strong> <span>(123) 456-7890</span><br>
                    <strong><abbr title="Email">E-mail:</abbr></strong> <span>pajakoo@abv.bg</span>
                </div>
            </div>
            <div class="team-content col-lg-3">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2016/11/nade.png'; ?>" alt="">
                <h3 class="text-center team-name">Стефан Станчев</h3>
                <h4 class="text-center team-position">Меринджей</h4>
                <div class="team-info">
                    <strong><abbr title="Phone">Phone:</abbr></strong> <span>(123) 456-7890</span><br>
                    <strong><abbr title="Email">E-mail:</abbr></strong> <span>pajakoo@abv.bg</span>
                </div>
            </div>
            <div class="team-content col-lg-3">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2016/11/nade.png'; ?>" alt="">
                <h3 class="text-center team-name">Красимир Георгиев</h3>
                <h4 class="text-center team-position">Меринджей</h4>
                <div class="team-info">
                    <strong><abbr title="Phone">Phone:</abbr></strong> <span>(123) 456-7890</span><br>
                    <strong><abbr title="Email">E-mail:</abbr></strong> <span>pajakoo@abv.bg</span>
                </div>
            </div>
            <div class="team-content col-lg-3">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2016/11/nade.png'; ?>" alt="">
                <h3 class="text-center team-name">Атанас Господарски</h3>
                <h4 class="text-center team-position">Меринджей</h4>
                <div class="team-info">
                    <strong><abbr title="Phone">Phone:</abbr></strong> <span>(123) 456-7890</span><br>
                    <strong><abbr title="Email">E-mail:</abbr></strong> <span>pajakoo@abv.bg</span>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();





