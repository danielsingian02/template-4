<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template-4
 */

?>
<footer id="colophon" class="site-footer flex-display-column">
	<?php $footericon = get_field('footer_icon') ?>
	<?php
	if (function_exists('the_custom_logo') && (!empty(get_custom_logo()))) :
		the_custom_logo(); ?>
	<?php
	else :
	?>
		<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
	<?php
	endif;
	?>
	<?php
	$sitetitle = get_field('site_title');
	if (empty($sitetitle)) { ?>
		<h2 class="footer__title"><?php echo acf_get_field('site_title')['default_value']; ?></h2>
	<?php } else { ?>
		<h2 class="footer__title"><?php the_field('site_title') ?></h2>
	<?php } ?>
	<p class="footer__credits">© Copyright 2021 HOA Management</p>
</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>

</html>