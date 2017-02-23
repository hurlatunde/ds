<?php
/**
 * Template Name:bad_magic
 *
 * Created by PhpStorm.
 * User: olatundeowokoniran
 * Date: 1/25/17
 * Time: 2:45 PM
 */
get_header(); ?>

    <div id="image_handler">
        <div id="image_handler_holder">
            <div>
                <div class="owl-carousel">
                    <?php
                    $galleryImage = get_field('bad_magic_gallery');
                    foreach ($galleryImage as $item) {
                    ?>
                    <div class="inner_slide_class">
                        <img class="inner_slide_class" src="<?php echo $item['sizes']['large']; ?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.owl-carousel').owlCarousel({
            items: 3,
            loop: true,
            margin: 0,
            control: false,
            autoWidth: true,
            dots: false,
            nav: false,
            center: true,
            responsiveClass: true,
//            responsive: {
//                0: {
//                    items: 1,
//                    nav: true
//                },
//                600: {
//                    items: 3,
//                    nav: false
//                },
//                1000: {
//                    items: 5,
//                    nav: true,
//                    loop: false
//                }
//            }
        })
    </script>

<?php get_footer(); ?>