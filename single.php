<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @license GPL 2.0 
 */

get_header(); ?>
<?php wp_print_styles( array( 'smaxpro-single' ) ); ?>
<?php wp_print_styles( array( 'smaxpro-mfp' ) ); ?>

<div class="wrapper-out">
    <div class="wrapper">

        <div id="primary" class="content-area">

            <div class="breadcrumbs">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
            </div>

            <main id="main" class="site-main">

                <article>

                    <div class="entry-content">

                        <div class="prod-wrap">
                            <div class="prod-item">
                                <?php the_post_thumbnail(); ?>
                                <div class="prod-txt">
                                    <h1 class="prod-title"><?php the_title(); ?></h1>
                                    <div class="prof-stars"><img class="stars" src="/wp-content/themes/smaxpro/images/stars.png" alt=""></div>
                                    <div class="prod-descr"><?php if( has_excerpt() ) { the_excerpt(); }  ?>
                                        <a class="popup-with-form fastorder-button wpcf7-submit fancybox-inline" href="#contact_form_pop"><?php if (function_exists('pll_e')) {pll_e('Заказ');} else {echo 'Быстрый заказ';}?></a>
                                    </div>
                                    <div class="fancybox-hidden" style="display:none"><div id="contact_form_pop">
                                            <p class="fastorder-title">Заказ в 1 клик</p>
                                            <h2 class="form-title"><?php the_title(); ?></h2>
                                            <?php echo do_shortcode('[contact-form-7 id="6813" title="Быстрый заказ"]'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-hz">
                                <div class="prod-hz-wrap">
                                    <h3 class="widgettitle">Металлобаза Стилмакс это:</h3>
                                    <p>Гарантия на всю продукцию</p>
                                    <p>Доставка по Киевской области</p>
                                    <p>Наличный или безналичный расчет</p>
                                    <p>Нужный товар всегда в наличии</p>
                                </div>
                            </div>

                        </div>

                        <?php the_content(); ?>

                         <?php get_template_part( "template-parts/same-type" ); ?>

                        <?php get_template_part( "template-parts/rand-prokat" ); ?>


                        <div class="smax-rating"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>

                        <div class="others">

                        </div>

                    </div><!-- .entry-content -->

                </article><!-- #post-<?php the_ID(); ?> -->

            </main><!-- #main -->

        </div><!-- #primary -->

    </div><!-- #wrapper -->
</div>

<?php get_footer();
