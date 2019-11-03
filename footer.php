<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

<footer class="site-footer">

    <div class="footer-container">

        <div class="footer-content">
            <div class="footer-block">
                <img class="footer-logo" src="/wp-content/themes/smaxpro/images/logo.jpg" alt="Металлобаза Стилмакс в Киеве">
                <p class="footer-descr"><?php $currentlang = get_bloginfo('language');
                    if($currentlang=="ru-RU"): echo get_option('true_options')['company-descr-ru'];
                    elseif($currentlang=="uk"): echo get_option('true_options')['company-descr-ua']; endif; ?></li></p>
                <form method="get" class="menu-search-form" action="http://smax.com.ua/">
                    <div class="form-wrap">
                        <input class="text" type="text" value="<?php if (function_exists('pll_e')) {pll_e('Поиск');} else {echo 'Поиск';} ?>" name="s" id="s" onfocus="if (this.value == 'Поиск') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Поиск';}">
                        <input type="submit" class="my-wp-search" id="searchsubmit" value="">
                    </div>
                </form>
                <img class="footer-logo" src="/wp-content/themes/smaxpro/images/steelmax-metallobaza-oplata.jpg" alt="Металлобаза Стилмакс в Киеве">
            </div>

            <div class="footer-block">
                <div class="fb-address">
                    <h2 class="f-head"><?php if (function_exists('pll_e')) {pll_e('Контакты');} else {echo 'Контакты';}?></h2>
                    <ul>
                        <li class="fb-t">
                            <?php
                            if($currentlang=="ru-RU"): echo get_option('true_options')['office_address_ru'];
                            elseif($currentlang=="uk"): echo get_option('true_options')['office_address_ua']; endif; ?>
                        </li>
                        <li class="fb-t">
                            <?php
                            if($currentlang=="ru-RU"): echo get_option('true_options')['sklad_address_ru'];
                            elseif($currentlang=="uk"): echo get_option('true_options')['sklad_address_ua']; endif; ?>
                        </li>
                        <li><a class="fb-t" href="#">office@smax.com.ua</a></li>
                    </ul>
                </div>

                <div class="fb-contact">

                    <div class="fb-phones">
                        <h3 class="fb-h"><?php if (function_exists('pll_e')) {pll_e('Телефоны');} else {echo 'Телефоны';}?></h3>
                        <ul>
                            <li><a class="fb-li" href="tel:<?php echo get_option('true_options')['phone1']; ?>"><?php echo get_option('true_options')['phone1']; ?></a></li>
                            <li><a class="fb-li" href="tel:<?php echo get_option('true_options')['phone2']; ?>"><?php echo get_option('true_options')['phone2']; ?></a></li>
                            <li><a class="fb-li" href="tel:<?php echo get_option('true_options')['phone3']; ?>"><?php echo get_option('true_options')['phone3']; ?></a></li>
                            <li><a class="fb-li" href="tel:<?php echo get_option('true_options')['phone4']; ?>"><?php echo get_option('true_options')['phone4']; ?></a></li>
                            <li><a class="fb-li" href="tel:<?php echo get_option('true_options')['phone5']; ?>"><?php echo get_option('true_options')['phone5']; ?></a></li>
                        </ul>
                    </div>

                    <div class="fb-grafik">
                        <h3 class="fb-h"><?php if (function_exists('pll_e')) {pll_e('График');} else {echo 'График';}?></h3>
                        <ul>
                            <li class="fb-t">Пн - Пт: 9:00 - 18:00</li>
                            <li class="fb-t"><?php if (function_exists('pll_e')) {pll_e('Выходной');} else {echo 'Сб, Вс - выходной';}?></li>
                        </ul>

                    </div>



                </div>

            </div>

            <div class="footer-block">
                <h2 class="f-head"><?php if (function_exists('pll_e')) {pll_e('Информация');} else {echo 'Информация';}?></h2>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'info',
                        'menu_id'        => 'info',
                        'container'      => false,
                        'menu_class'     => 'nav__list',
                    )
                );

                ?>
            </div>

            <div class="footer-block">
                <h2 class="f-head"><?php if (function_exists('pll_e')) {pll_e('Услуги');} else {echo 'Услуги';}?></h2>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'uslugi',
                        'menu_id'        => 'uslugi',
                        'container'      => false,
                        'menu_class'     => 'nav__list',
                    )
                ); ?>

                <ul>
                    <br>

                    <li class="of"><?php if (function_exists('pll_e')) {pll_e('Цены');} else {echo 'Цены';}?></li>
                    <br>
                    <li><a class="fb-li" href="/politika-konfidentsialnosti/"><?php if (function_exists('pll_e')) {pll_e('Политика');} else {echo 'Политика конфиденциальности';}?></a></li>
                </ul>

            </div>

        </div>

    </div>


</footer><!-- #colophon -->


<?php wp_footer(); ?>

</div><!-- #page -->
</body>
</html>
