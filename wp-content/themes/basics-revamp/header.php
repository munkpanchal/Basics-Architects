<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri("/public/logo-ba.png") ?>" type="favicon">


</head>


<body>
    <header class="header ">
        <div class="header-wrapper">
            <a href="/" class="logo">
                <img src="<?php echo get_theme_file_uri("/public/logo.png") ?>" alt="">
            </a>
            <div class="navigation">
                <?php
                echo wp_nav_menu(array(
                    "theme_location" => "header_nav",
                    "container" => false,
                    "items_wrap" => '<ul class="header-nav-links">%3$s</ul>'
                ))
                ?></div>

            <div class="search">
                <?php
                get_search_form();
                ?>
            </div>


            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </header>
    <div class="dropdown container">
        <?php
        echo wp_nav_menu(array(
            "theme_location" => "header_nav",
            "container" => false,
            "items_wrap" => '<ul class="mobile-nav-links">%3$s</ul>'
        ))
        ?>
        <!-- <div class="jsearch">
            <?php
            // get_search_form();
            ?>
        </div> -->
    </div>