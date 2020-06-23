<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creativ Musician
 */

/**
 *
 * @hooked creativ_musician_footer_start
 */
do_action( 'creativ_musician_action_before_footer' );

/**
 * Hooked - creativ_musician_footer_top_section -10
 * Hooked - creativ_musician_footer_section -20
 */
?>
<div id="monfooter">
	<div id="footer_g">
		<p>© 2020 L'ATELIER, APPRENDRE & JOUER</p>
		<p>Crédit photos L'ATELIER, APPRENDRE & JOUER</p>
	</div>
	<div id="footer_m">
		<p><a href="https://ateliermusiquebarberaz.live-website.com/contact">Contactez-nous</a></p>
	</div>
	<div id"footer_d">
		<p><a href="https://ateliermusiquebarberaz.live-website.com/privacy-policy">Politique de confidentialité</a></p>
		<p><a href="https://ateliermusiquebarberaz.live-website.com/wp-content/uploads/2020/06/Reglement_Interieur.pdf">Règlement intérieur</a></p>
	</div>
</div>
<?php
/**
 * Hooked - creativ_musician_footer_end. 
 */
do_action( 'creativ_musician_action_after_footer' );

wp_footer(); ?>

</body>  
</html>