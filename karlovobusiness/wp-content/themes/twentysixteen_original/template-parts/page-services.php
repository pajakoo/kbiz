<?php
/**
 * Template Name: services
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
            <h1 class="text-center" style="background:#F8F8F8; width: 250px; margin: -40px auto;">Бизнес услуги</h1>
        </div>
        </hr>
        <div class="col-lg-12 services">
            <div id="services-text">
                <div class="wpdbp-asterisk"><span class="bold-font">Безплатна консултация</span> със специалист</div>
                <div class="wpdbp-asterisk"><span class="bold-font">Точно ценово предложение</span> в рамките на 48 часа
                </div>
                <div class="wpdbp-asterisk">Гарантирано без оскъпяване <span class="bold-font">чрез договор</span></div>
            </div>

            <div id="services-marketing">

                <div class="services-title">Маркетинг</div>
                <div class="btn btn-success" onclick="window.location='<?php echo get_post_permalink( get_page_by_title('Контакти')->ID ) ?>'">Запитване</div>
                <div class="services-description">
                    <span class="bold-font">Маркетингов и стратегически консултинг</span>,
                    позициониране на вашия бранд на пазара.
                </div>
            </div>
            <div id="services-design">
                <div class="services-title">Дизайн и реклама</div>
                <div class="btn btn-success" onclick="window.location='<?php echo get_post_permalink( get_page_by_title('Контакти')->ID ) ?>'">Запитване</div>

                <div  class="services-description">
                    Изготвяне на <span class="bold-font">лого и графичен дизайн</span> на фирмата.
                    Цялостен брандинг на фирмата.
                    Адаптация за <span class="bold-font">социални мрежи и уеб банери.</span>
                    Изработка на <span class="bold-font">рекламни материали и обемни светещи надписи.</span>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();





