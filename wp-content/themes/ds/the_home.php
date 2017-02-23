<?php
/**
 * Template Name:home
 *
 * Created by PhpStorm.
 * User: olatundeowokoniran
 * Date: 1/25/17
 * Time: 2:45 PM
 */
get_header(); ?>

    <div>
        <div id="image_handler">
            <div>
                <div id="image_handler_holder">
                    <div>
                        <?php
                        $i = 1;
                        if (have_rows('home_image')) :
                            while (have_rows('home_image')) : the_row();
                                $slider_image = get_sub_field('slider_image');
                                $slider_text = get_sub_field('image_text');
                                ?>
                                <div class="image_inner"
                                     style="background: url(<?php echo $slider_image['sizes']['large']; ?>)"></div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>

<?php get_footer(); ?>