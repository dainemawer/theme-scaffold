<?php
/**
 * The template for displaying the header.
 *
 * @package TenUpScaffold
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class( 'container' ); ?>>
		<?php wp_body_open(); ?>
		<h1><?php bloginfo( 'name' ); ?></h1>
		<!-- If this element is present in the DOM then we'll lazy load the Apple component -->
		<div id="apple-is-present">🍏</div>
