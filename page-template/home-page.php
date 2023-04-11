<?php

/**

 * Template Name: Home Page

 **/
function getAcfValue($key)
{
    echo empty(get_field($key)) ? acf_get_field($key)['default_value'] : get_field($key);
}
get_header();
?>

<!-- hero banner -->
<main id="primary" class="site-main">
    <div class="hero-banner flex-display-column" style="color: #fff">
        <?php $heroicon = get_field('hero_logo'); ?>
        <img src="<?php echo $heroicon; ?>">
        <h1 class="hero-banner__logo-name"><?php getAcfValue("hero_logo_name"); ?></h1>
        <a href="#" class="button button5">Button</a>
    </div>
    <!-- end of hero banner -->

    <!-- container -->
    <div class="wrapper flex-display-column">
        <div class="welcome">
            <h1 class="welcome__heading"><?php getAcfValue("welcome_heading"); ?></h1>
            <p class="welcome__intro"><?php getAcfValue("welcome_introduction"); ?></p>
        </div>

        <!-- gallery section -->
        <div class="collage-section flex-display">
            <?php $collagefirstimg = get_field('collage_image1');
            $collagesecondimg = get_field('collage_image2');
            $collagethirdimg = get_field('collage_image3'); ?>
            <div class="collage__image1"><img src="<?php echo $collagefirstimg ?>" class="collageimg1"></div>
            <div class="collage__image2"><img src="<?php echo $collagesecondimg ?>" class="collageimg2"></div>
            <div class="collage__image3"><img src="<?php echo $collagethirdimg ?>" class="collageimg3"></div>
        </div>
        <!-- end of gallery section -->

        <!-- News section -->
        <div class="news-section flex">
            <div class="news-section__col1">
                <h1 class="news__heading"><?php getAcfValue("news_heading"); ?></h1>
                <p class="news__content"><?php getAcfValue("news_content"); ?></p>
            </div>
            <div class="news-section__col2">
                <p class="news__list"><?php the_field('news_list_one'); ?></p>
                <p class="news__list"><?php the_field('news_list_two'); ?></p>
                <p class="news__list"><?php the_field('news_list_three'); ?></p>
                <p class="news__list"><?php the_field('news_list_four'); ?></p>
                <p class="news__list"><?php the_field('news_list_five'); ?></p>
            </div>
        </div>
        <!-- end of News section -->

        <!-- map section -->
        <div class="map-home">
            <?php
            /** 
             *  Google Map Link
             * 
             * @string Google Map Embed = google_map_embed
             **/
            $googleMapLink = get_field('google_map_embed') ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663169.1803332209!2d-80.55231773090945!3d35.494947564826745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2sph!4v1670919995695!5m2!1sen!2sph';
            ?>
            <iframe src="<?php echo $googleMapLink ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location__iframe">
            </iframe>
            <?php get_footer(); ?>
        </div>
        <!-- end of map section -->
    </div><!-- end of container -->

</main>