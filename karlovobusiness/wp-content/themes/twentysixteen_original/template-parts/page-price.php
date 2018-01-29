<?php
/**
 * Template Name: prices
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


?>


    <script src="http://localhost:8888/karlovobusiness/wp-content/themes/twentysixteen_original/js/rendro-easy-pie-chart/dist/easypiechart.js"></script>
    <script>

            jQuery(document).ready(function () {
                setTimeout(function(){
                    var element = document.querySelector('.chart');
                    new EasyPieChart(element, {
                        // your options goes here
                    });
                }, 2000);



                var chart = window.chart = new EasyPieChart(document.querySelector('div.chart2'), {
                    easing: 'easeOutElastic',
                    delay: 1000,
                    barColor: '#69c',
                    trackColor: '#ace',
                    scaleColor: false,
                    lineWidth: 20,
                    trackWidth: 16,
                    lineCap: 'butt',
                    onStep: function(from, to, percent) {
                        this.el.children[0].innerHTML = Math.round(percent);
                    }
                });

            })

    </script>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!--<div class="chart" data-percent="100">73%</div>
            <div class="chart2" data-percent="86">
                <span class="percent"></span>
            </div>-->


            <h3>

                Всеки от избраните пакети дава достъп до безплатен 4 месесечен тестов период.
                Ще ви предложим платен абонамент след изтичането им.
                Ако Карлово Бизнес ви харесва и ви носи желания брой допънителни клиенти, платете абонамента си
                преди изтичането на гратисният период. Така печелите 2 допълнителни месеца и гратисният период
                става
                цели 6 месеца.
                Заповядайте !
            </h3>

            <div class="col-md-4 panel panel-default wpbdp-plan-info-box">
                <div class="panel-body wpbdp-plan-label">Безплатна регистрация</div>
                <div class="panel-footer">
                    <div class="wpbdp-plan-description">
                        <p>4 месечен гратисен период WEB + MOBILE</p>
                        <p>(След изтичането му, ще ви предложим платен абонамент. По ваше желание, при сключване на
                            платен годишен абонамент направен преди да са изтекли първите 4 месеца, гратисният период,
                            се удължава на 6 месеца (+2).</p>
                    </div>
                    <ul class="wpbdp-plan-feature-list">
                        <li>3 images</li>
                    </ul>
                    <div>
                        <label>
                            <input type="radio" id="wpbdp-plan-select-radio-1" name="fees[460]" value="1"
                                   checked="checked">
                            <span class="wpbdp-plan-price-amount">Безплатно</span>
                        </label>
                    </div>

                </div>
            </div>

            <div class="col-md-4 panel panel-default wpbdp-plan-info-box">
                <div class="panel-body wpbdp-plan-label">Web + Mobile</div>
                <div class="panel-footer">
                    <div class="wpbdp-plan-details">
                        <div class="wpbdp-plan-description"><p>On-Line (Web + Mobile) включва:<br>
                                <br></p>
                            <ul>
                                <li>12 месеца платен абонамент</li>
                                <li>+ 6 месеца безплатнен абонамент</li>
                                <li>10 дневна рекламна кампания</li>
                                <li>Основно редактиране на снимков и текстов материал</li>
                                <li>Отстъпка при ползване на услугите на Карлово Бизнес</li>
                            </ul>
                            <p><br></p>
                            <li>цената е без ДДС</li>
                        </div>

                        <ul class="wpbdp-plan-feature-list">
                            <li>10 images</li>
                        </ul>
                    </div>
                    <div class="wpbdp-plan-price">
                        <label>
                            <input type="radio" id="wpbdp-plan-select-radio-3" name="fees[460]" value="3">
                            <span class="wpbdp-plan-price-amount">50,00 лв</span>
                        </label>
                    </div>

                </div>
            </div>


            <div class="col-md-4 panel panel-default wpbdp-plan-info-box">
                <div class="panel-body wpbdp-plan-label">Рекламна кампания</div>
                <div class="panel-footer">
                    <div class="wpbdp-plan-details">


                        <div class="wpbdp-plan-description"><p>Гарантирано позициониране в челните 3 oбяви в
                                категорията за 10 дни.<br>
                                <br></p>
                            <p>Подхожда идеално за :<br>
                                <br></p>
                            <p>Съобщаване на промоция<br>
                                Лансиране на нов продукт<br>
                                Откриване на нова витрина<br>
                                Стимулиране на продажбите<br>
                                Доминиране на конкурентите<br>
                                <br></p>
                            <li>цената е без ДДС</li>
                        </div>

                        <ul class="wpbdp-plan-feature-list">
                            <li>10 images</li>
                        </ul>
                    </div>
                    <div class="wpbdp-plan-price">
                        <label>
                            <input type="radio" id="wpbdp-plan-select-radio-9" name="fees[460]" value="9">
                            <span class="wpbdp-plan-price-amount">10,00 лв</span>
                        </label>
                    </div>

                </div>
            </div>


            <!-- <p>фонда за подпомагане на Карлово Бизнес</p>



             <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                 <input type="hidden" name="cmd" value="_s-xclick">
                 <input type="hidden" name="hosted_button_id" value="J739RDCEA8PZ2">
                 <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                 <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
             </form>-->



        </main>
    </div>


<?php
get_footer();