<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <a href="<?= home_url('/'); ?>">
        <img src="<?= get_template_directory_uri(); ?>/img/screenshot.png" alt="logo">
    </a>
</header>
<?php wp_body_open(); ?>