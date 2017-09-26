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

    <div class="custom-page-container">
        <hr style="border-color:orange"><div class="col-lg-12">
            <h1 class="text-center">За нас</h1>
        </div></hr>

        <div class="about-us-text">
<!--            <span style="font-size: 20px;font-family: Arial">"</span>-->
            Ние сме екип от динамични и коректни ценители на доброто
            обслужване и качествените продукти. Вярваме, че е възможно да
            се постигне високо качеството на разумни цени и ключа за това са
            честните и прозрачни отношения между клиенти и изпълнители
            било то в корпоративни (b2b) или частни (b2c) сделки.
        </div>

        <div class="team-container col-lg-12">
            <div class="team-content col-lg-4">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2017/04/nachevkbiz.jpg'; ?>" alt="">
                <h3 class="text-center team-name">Николай Начев</h3>
                <h4 class="text-center team-position">Маркетинг консултант</h4>
            </div>
            <!--<div class="team-content col-lg-4">
                <img class="img-circle" src="<?php /*echo $uploads['baseurl'] . '/2017/04/stef.jpg'; */?>" alt="">
                <h3 class="text-center team-name">Стефан Станчев</h3>
                <h4 class="text-center team-position">Мениджър продажби</h4>
            </div>-->
            <div class="team-content col-lg-4">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2017/04/krazykbiz.jpg'; ?>" alt="">
                <h3 class="text-center team-name">Красимир Георгиев</h3>
                <h4 class="text-center team-position">Уеб консултант</h4>

            </div>
            <div class="team-content col-lg-4">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2017/04/naskokbiz.jpg'; ?>" alt="">
                <h3 class="text-center team-name">Атанас Господарски</h3>
                <h4 class="text-center team-position">Графичен и уеб дизайн</h4>

            </div>
        </div>
    </div>


<?php
get_footer();





