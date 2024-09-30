<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head()?>
    </head>

    <body <?php body_class(); ?>> 

    <!-- LOADER -->
    <div id="preloader">
        <div class="loading_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_black.png" alt="logo" />
        </div>
    </div>
    <!-- END LOADER --> 


