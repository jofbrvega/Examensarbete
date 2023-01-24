<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#b4b8a5] text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="flex flex-col min-h-screen">
		<?php get_template_part('template-parts/global/global', 'header'); ?>
		<?php get_template_part('template-parts/global/global', 'fonts'); ?>
		<?php get_template_part('template-parts/global/global', 'color'); ?>


		<div id="content" class="flex-grow site-content">
			<?php do_action('tailpress_content_start'); ?>
			<main>