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
        <hr style="border-color:orange">
        <div class="col-lg-12">
            <h1 class="text-center">За нас</h1>
        </div>
        </hr>

        <div class="about-us-text">
            <!--            <span style="font-size: 20px;font-family: Arial">"</span>-->
            <p>
                Ние сме екип от коректни и иновативни ценители на доброто обслужване, атрактивните продукти и добрите
                услуги. Вярваме, че е възможно да се постигне високо качество на разумни цени и ключа за това са
                честните и
                прозрачни отношения между клиенти и изпълнители било то в корпоративни (b2b) или частни (b2c)
                сделки.
            </p></br></br>
            <p>
                Нашата цел, както и тази на Карлово Бизнес е да динамизира регионалните продажби. Предлагаме сигурна
                среда,
                в която потребителят намира, не само това което търси, но най-вече цялостна и полезна информация, както
                и оценка на
                предлаганото. Гарантираме повече детайли за всяка Обява, както информация за самата фирма, така и
                коментари
                за качеството на нейните продукти.
            </p>
        </div>

        <div class="team-container col-lg-12">
            <div class="team-content col-lg-4">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2017/04/nachevkbiz.jpg'; ?>" alt="">
                <h3 class="text-center team-name">Николай Начев</h3>
                <h4 class="text-center team-position">Маркетинг консултант</h4>
                <h4 class="text-center team-position"><a href="https://www.linkedin.com/in/nikolaynachev">LinkedIn
                        Профил</a></h4>
            </div>
            <!--<div class="team-content col-lg-4">
                <img class="img-circle" src="<?php /*echo $uploads['baseurl'] . '/2017/04/stef.jpg'; */ ?>" alt="">
                <h3 class="text-center team-name">Стефан Станчев</h3>
                <h4 class="text-center team-position">Мениджър продажби</h4>
            </div>-->
            <div class="team-content col-lg-4">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2017/04/krazykbiz.jpg'; ?>" alt="">
                <h3 class="text-center team-name">Красимир Георгиев</h3>
                <h4 class="text-center team-position">Уеб консултант</h4>
                <h4 class="text-center team-position"><a href="https://www.linkedin.com/in/krasimir-georgiev-25596b44/">LinkedIn
                        Профил</a></h4>
            </div>
            <div class="team-content col-lg-4">
                <img class="img-circle" src="<?php echo $uploads['baseurl'] . '/2017/11/Христиана.jpg'; ?>" alt="">
                <h3 class="text-center team-name">Христиана Людова</h3>
                <h4 class="text-center team-position">Мениджър Проекти</h4>
                <h4 class="text-center team-position"><a target="_blank"
                                                         href="https://www.linkedin.com/in/hristiana-lyudova-57571b150/?trk=uno-choose-ge-no-intent&dl=no">LinkedIn
                        Профил</a></h4>

            </div>
        </div>
        <div class="about-us-text">
            За Карлово Бизнес
            <p>
            Рейтинг системата, която Карлово Бизнес предлага е ключов елемент на проекта. Всеки
            потребител и ценител има своя принос и ние много разчитаме на него. Колкото повече оценки и коментари получи
            една обява, толкова по-привлекателна става тя за посетителите на сайта. Коментирайте и оценявайте, това е
            вашият принос, от който всеки има нужда!</br></br>
            </p>
            <p>
            Предлагаме ви и опцията “Търсене” на обяви по Име на фирмата, по Вид дейност – чрез избор на категория или
            въвеждане
            на ключова дума “бар, ресторант, сервиз, аптека...”. Търсенето включва и полетата:
            Работно време, Кратко описание на дейността, Подробно описание на дейонстта, Уебсайт, Телефонен номер, Факс,
                Физически адрес и Ключови думи.</p></br></br>
            <p>
            Всеки наш клиент има пълен достъп и контрол върху своята Обява, както и
            информацията, която тя съдържа. Съветваме всеки собственик да поддържа своята Обява, като да я попълва,
            обновява и поправя. Ние сме на разположение за да съдействаме и помогнем когато е нужно. Посете рубриката
                “Контакти” за връзка с нас.</p></br></br>
            <p>
            Специална чат секция е на разположение всеки работен ден от 10ч до 18ч за
                улеснение и съвети. Тя се намира долу в дясно на всяка от сайта. Използвайте я!</p></br></br>


            Благодарим ви и от името на
            целия екип, желаем успех на предприемачите и на посетителите.

        </div>
    </div>


<?php
get_footer();





