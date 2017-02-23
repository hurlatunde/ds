<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$footerMenu = inits_get_main_menu(1);
$footerMenuAbout = inits_get_main_menu(0);
?>

<footer>
	<div>
		<div>
			<ul id="footer_menu" class="nav">
				<?php foreach ($footerMenu as $menuValue) : ?>
				<li role="presentation" class="active"><a href="<?php echo $menuValue->url; ?>"><?php echo $menuValue->title; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<?php foreach ($footerMenuAbout as $item) { ?>
	<a class="footer_away" href="<?php echo $menuValue->url; ?>"><?php echo $menuValue->title; ?></a>
	<?php } ?>

</footer>

</body>
</html>