<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- Created by Ecoteers - Tom Morskieft - wwww.ecoteers.nl - Copyright <?php bloginfo('name'); ?> -->

<head>

<title><?php wp_title(''); ?></title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <?php 

        do_action('wp_body_open'); 

        get_template_part('templates/header/header');

    ?>