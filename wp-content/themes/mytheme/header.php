<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

<?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<div id="ttr_header" class="jumbotron">
    <div class="d-flex align-items-center ">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <?php 
                $logo = get_theme_mod('synex_logo'); // Get custom logo URL from the Customizer
                if ($logo): // Check if a logo is set
                ?>
                    <img src="<?php echo esc_url($logo); ?>" alt="Site Logo">
                <?php else: // If no custom logo is set, display the default logo ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/futbol.png" height="200" width="200" alt="Default Site Logo">
                <?php endif; ?>
            </a>
        </div>

        <div class="title m-auto">
            <h1 style="text-align: center; font-style: italic; font-weight: bold">Synex Jersey Shop</h1>
            <img src="wp-content/themes/mytheme/images/fire2.png" height="50" width="1000" alt="">
            <br><br>
        </div>
    </div>
    
</div>

<div class="navbar-view">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Synex Jersey shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


<div class="container">