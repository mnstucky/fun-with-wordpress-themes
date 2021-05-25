<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

    <div class="container">

        <header class="site-header">
            <div class="header-wrapper">
                <h1><a href="<?php echo home_url(); ?>" /><?php bloginfo('name'); ?></a></h1>
                <?php wp_nav_menu(array('theme_location' => 'header')) ?>
            </div>
        </header>