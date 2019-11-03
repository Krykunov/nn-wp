<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wtpro
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Code snippet to speed up Google Fonts rendering: googlefonts.3perf.com -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700|Roboto+Slab:300,400,700&display=swap&subset=cyrillic" as="fetch" crossorigin="anonymous">
    <script type="text/javascript">
        !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700|Roboto+Slab:300,400,700&display=swap&subset=cyrillic",r="__3perf_googleFonts_672e1";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
    </script>
    <!-- End of code snippet for Google Fonts -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

    <header class="cd-header">
        <div class="top-menu-wrapper">
            <div class="top-menu top-head header-wrapper">

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top',
                        'menu_id'        => 'top-menu',
                        'container'      => false,
                        'menu_class'     => 'nav__list',
                    )
                );

                ?>
            </div>
        </div>
        <div class="top-wrapper">
            <div class="top-head">

                <div class="left-header header-part">
                    <div class="logo-wrap">
                        <a href="#" class="hover-target"><?php the_custom_logo(); ?></a>
                    </div>
                </div>

                <div class="right-header header-part">
                    <div class="address-wrap">
                        <div class="address">
                            <div class="addr-item">
                                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 96c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm0-256C85.961 0 0 85.961 0 192c0 77.413 26.97 99.031 172.268 309.67 9.534 13.772 29.929 13.774 39.465 0C357.03 291.031 384 269.413 384 192 384 85.961 298.039 0 192 0zm0 473.931C52.705 272.488 32 256.494 32 192c0-42.738 16.643-82.917 46.863-113.137S149.262 32 192 32s82.917 16.643 113.137 46.863S352 149.262 352 192c0 64.49-20.692 80.47-160 281.931z"/></svg>
                                <span class="contacts-item"><?php
                                    if($currentlang=="ru-RU"): echo get_option('true_options')['office_address_ru'];
                                    elseif($currentlang=="uk"): echo get_option('true_options')['office_address_ua']; endif; ?></span>
                            </div>
                            <div class="addr-item">
                                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 96c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm0-256C85.961 0 0 85.961 0 192c0 77.413 26.97 99.031 172.268 309.67 9.534 13.772 29.929 13.774 39.465 0C357.03 291.031 384 269.413 384 192 384 85.961 298.039 0 192 0zm0 473.931C52.705 272.488 32 256.494 32 192c0-42.738 16.643-82.917 46.863-113.137S149.262 32 192 32s82.917 16.643 113.137 46.863S352 149.262 352 192c0 64.49-20.692 80.47-160 281.931z"/></svg>
                                <span class="contacts-item"><?php
                                    if($currentlang=="ru-RU"): echo get_option('true_options')['sklad_address_ru'];
                                    elseif($currentlang=="uk"): echo get_option('true_options')['sklad_address_ua']; endif; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="phones1-wrap">
                        <div class="phones1">
                            <div class="phones1-item">
                                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M487.8 24.1L387 .8c-14.7-3.4-29.8 4.2-35.8 18.1l-46.5 108.5c-5.5 12.7-1.8 27.7 8.9 36.5l53.9 44.1c-34 69.2-90.3 125.6-159.6 159.6l-44.1-53.9c-8.8-10.7-23.8-14.4-36.5-8.9L18.9 351.3C5 357.3-2.6 372.3.8 387L24 487.7C27.3 502 39.9 512 54.5 512 306.7 512 512 307.8 512 54.5c0-14.6-10-27.2-24.2-30.4zM55.1 480l-23-99.6 107.4-46 59.5 72.8c103.6-48.6 159.7-104.9 208.1-208.1l-72.8-59.5 46-107.4 99.6 23C479.7 289.7 289.6 479.7 55.1 480z"/></svg>
                                <span class="contacts-item"><a class="h-phone" href="tel:<?php echo get_option('true_options')['phone1']; ?>"><?php echo get_option('true_options')['phone1']; ?></a></span>
                            </div>

                            <div class="phones1-item">
                                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M487.8 24.1L387 .8c-14.7-3.4-29.8 4.2-35.8 18.1l-46.5 108.5c-5.5 12.7-1.8 27.7 8.9 36.5l53.9 44.1c-34 69.2-90.3 125.6-159.6 159.6l-44.1-53.9c-8.8-10.7-23.8-14.4-36.5-8.9L18.9 351.3C5 357.3-2.6 372.3.8 387L24 487.7C27.3 502 39.9 512 54.5 512 306.7 512 512 307.8 512 54.5c0-14.6-10-27.2-24.2-30.4zM55.1 480l-23-99.6 107.4-46 59.5 72.8c103.6-48.6 159.7-104.9 208.1-208.1l-72.8-59.5 46-107.4 99.6 23C479.7 289.7 289.6 479.7 55.1 480z"/></svg>
                                <span class="contacts-item"><a class="h-phone" href="tel:<?php echo get_option('true_options')['phone2']; ?>"><?php echo get_option('true_options')['phone2']; ?></a></span>
                            </div>

                        </div>
                    </div>

                    <div class="phones2-wrap">
                        <div class="phones2">

                            <div class="phones1-item">
                                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 416c0 17.7-14.3 32-32 32s-32-14.3-32-32 14.3-32 32-32 32 14.3 32 32zM320 48v416c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h224c26.5 0 48 21.5 48 48zm-32 0c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v416c0 8.8 7.2 16 16 16h224c8.8 0 16-7.2 16-16V48z"/></svg>
                                <span class="contacts-item"><a class="h-phone" href="tel:<?php echo get_option('true_options')['phone3']; ?>"><?php echo get_option('true_options')['phone3']; ?></a></span>
                            </div>

                            <div class="phones1-item">
                                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 416c0 17.7-14.3 32-32 32s-32-14.3-32-32 14.3-32 32-32 32 14.3 32 32zM320 48v416c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h224c26.5 0 48 21.5 48 48zm-32 0c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v416c0 8.8 7.2 16 16 16h224c8.8 0 16-7.2 16-16V48z"/></svg>
                                <span class="contacts-item"><a class="h-phone" href="tel:<?php echo get_option('true_options')['phone4']; ?>"><?php echo get_option('true_options')['phone4']; ?></a></span>
                            </div>

                            <div class="phones1-item">
                                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 416c0 17.7-14.3 32-32 32s-32-14.3-32-32 14.3-32 32-32 32 14.3 32 32zM320 48v416c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h224c26.5 0 48 21.5 48 48zm-32 0c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v416c0 8.8 7.2 16 16 16h224c8.8 0 16-7.2 16-16V48z"/></svg>
                                <span class="contacts-item"><a class="h-phone" href="tel:<?php echo get_option('true_options')['phone5']; ?>"><?php echo get_option('true_options')['phone5']; ?></a></span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="nav-wrapper">

            <div class="header-wrapper">

                <div class="navigation">
                    <div class="nav">
                        <div class="nav__content">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_id'        => 'primary-menu',
                                    'container'      => false,
                                    'menu_class'     => 'nav__list',
                                )
                            );

                            ?>
                        </div>

                        <div class="mobile-mnu">

                            <form method="get" class="menu-search-form" action="https://smax.com.ua/">
                                <div class="form-wrap">
                                    <input class="text" type="text" value="<?php if (function_exists('pll_e')) {pll_e('Поиск');} else {echo 'Поиск';} ?>" name="s" id="s" onfocus="if (this.value == 'Поиск') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Поиск';}">
                                    <input type="submit" class="my-wp-search" id="searchsubmit" value="">
                                </div>
                            </form>

                            <div class="pll-wrap"> <?php if (function_exists('pll_the_languages')) { pll_the_languages(array('dropdown'=>1));} else {echo ' ';}  ?></div>

                            <div class="nav-but-wrap">
                                <div class="menu-icon hover-target">
                                    <span class="menu-icon__line menu-icon__line-left"></span>
                                    <span class="menu-icon__line"></span>
                                    <span class="menu-icon__line menu-icon__line-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>




