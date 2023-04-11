<?php

/**

 * Template Name: About Page

 **/
function getAcfValue($key)
{
    echo empty(get_field($key)) ? acf_get_field($key)['default_value'] : get_field($key);
}

get_header();
?>

<!-- hero banner -->

<main id="primary" class="site-main">
    <div class="hero-banner flex-display-column">
        <?php $heroicon = get_field('hero_logo'); ?>
        <img src="<?php echo $heroicon; ?>">
        <h1 class="hero-banner__logo-name"><?php getAcfValue("hero_logo_name"); ?></h1>
    </div>

    <!-- end of hero banner -->

    <!-- about section -->

    <div class="about-section flex-display-column">
        <h2 class="about__heading"><?php getAcfValue("about_heading"); ?></h2>
        <div class="about-container">
            <div class="about-container__first-row flex">
                <div class="about-container__first-row-col1 flex-display-start">
                    <h3 class="about__first-row-title"><?php getAcfValue("first_row_title"); ?></h3>
                    <p class="about__first-row-description"><?php getAcfValue("first_row_description"); ?></p>
                </div>
                <div class="about-container__first-row-col2">
                    <?php $firstrowimage = get_field('first_row_image'); ?>
                    <img src="<?php echo $firstrowimage ?>" class="about__first-row-image">
                </div>
            </div>

            <div class="about-container__second-column flex">
                <div class="about-container__second-row-col1">
                    <?php $secondrowimage = get_field('second_row_image'); ?>
                    <img src="<?php echo $secondrowimage ?>" class="about__second-row-image">
                </div>
                <div class="about-container__second-row-col2 flex-display-start">
                    <h3 class="about__second-row-title"><?php getAcfValue("second_row_title"); ?></h3>
                    <p class="about__second-row-description"><?php getAcfValue("second_row_description"); ?></p>
                </div>
            </div>

            <div class="about-container__third-column flex">
                <div class="about-container__third-row-col1 flex-display-start">
                    <h3 class="about__third-row-title"><?php getAcfValue("third_row_title"); ?></h3>
                    <p class="about__third-row-description"><?php getAcfValue("third_row_description"); ?></p>
                </div>

                <div class="about-container__third-row-col2">
                    <?php $thirdrowimage = get_field('third_row_image'); ?>
                    <img src="<?php echo $thirdrowimage ?>" class="about__third-row-image">
                </div>
            </div>

        </div>

        <!-- review section -->

        <div class="review">
            <h3 class="review__head"><?php getAcfValue("review_header"); ?></h3>
            <p class="review__sub-head"><?php getAcfValue("review_sub_heading"); ?></p>

            <div class="review__card">
                <div class="review__card-one">
                    <p class="review__comment"><?php getAcfValue("review_comment"); ?></p>
                    <div class="review__container flex">
                        <div class="review__col1 flex-display">
                            <div class="review__picture-container">
                                <?php $reviewimage = get_field('review_image'); ?>
                                <img src="<?php echo $reviewimage ?>" class="review__picture">
                            </div>
                        </div>

                        <div class="review__col2 flex-display-alignstart">
                            <div class="review__name-container">
                                <p class="review-name"><?php getAcfValue("review_name"); ?></p>
                            </div>
                            <div class="review__description-container">
                                <p class="review-description"><?php getAcfValue("review_description"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="review__card-two">
                    <p class="review__comment"><?php getAcfValue("review_comment2"); ?></p>
                    <div class="review__container flex">
                        <div class="review__col1 flex-display">
                            <div class="review__picture-container">
                                <?php $reviewimage = get_field('review_image2'); ?>
                                <img src="<?php echo $reviewimage ?>" class="review__picture">
                            </div>
                        </div>

                        <div class="review__col2 flex-display-alignstart">
                            <div class="review__name-container">
                                <p class="review-name"><?php getAcfValue("review_name2"); ?></p>
                            </div>
                            <div class="review__description-container">
                                <p class="review-description"><?php getAcfValue("review_description2"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of review section -->
    </div>

    <!-- end of about section -->

    <!-- gallery section -->

    <div class="gallery-section">
        <h3 class="gallery__head"><?php getAcfValue("gallery_header"); ?></h3>
        <p class="gallery__description"><?php getAcfValue("gallery_description"); ?></p>
        <div class="gallery__collage flex-display">
            <?php $galleryfirstimg = get_field('gallery_image1');
            $gallerysecondimg = get_field('gallery_image2');
            $gallerythirdimg = get_field('gallery_image3');
            $galleryfourthimg = get_field('gallery_image4');
            $galleryfifthimg = get_field('gallery_image5'); ?>
            <div class="gallery__image1"><img src="<?php echo $galleryfirstimg ?>" class="galleryimg1"></div>
            <div class="gallery__image2"><img src="<?php echo $gallerysecondimg ?>" class="galleryimg2"></div>
            <div class="gallery__image3"><img src="<?php echo $gallerythirdimg ?>" class="galleryimg3"></div>
            <div class="gallery__image4"><img src="<?php echo $galleryfourthimg ?>" class="galleryimg4"></div>
            <div class="gallery__image5"><img src="<?php echo $galleryfifthimg ?>" class="galleryimg5"></div>
        </div>
    </div>

    <!-- end of gallery section -->

    <!-- map section -->
    <div class="map">
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
</main>