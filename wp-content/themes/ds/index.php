<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div>
    <div  id="image_handler">
        <div>
            <div id="image_handler_holder">
                <div>
                    <?php
                    $i = 1;
                    if( have_rows('i') ) :
                    while ( have_rows('image') ) : the_row();
                    $slider_image = get_sub_field('slider_image');
                    $slider_text = get_sub_field('image_text');
                        dd($slider_image);
                    ?>
                        <?php echo $quidelines['sizes']['large']; ?>
                    <div class="image_inner" style="background: url(<?php bloginfo('template_url'); ?>/we_data/img/vatgbfp7oxa-olu-eletu.jpg)"></div>
                    <div class="image_inner" style="background: url(<?php bloginfo('template_url'); ?>/we_data/img/vatgbfp7oxa-olu-eletu.jpg)"></div>

                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>