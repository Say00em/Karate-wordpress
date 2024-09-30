<?php get_header(); ?>


<header class="header_wrap fixed-top dark_skin main_menu_uppercase main_menu_weight_600 transparent_header  ">
    <div class="container">
        <!-- <nav class="navbar navbar-expand-lg"> 
        
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img class="logo_light" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.png" alt="logo" />
                <img class="logo_dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_black.png" height="100px" alt="logo" />
                <img class="logo_default" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_black.png" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link active" href="<?php echo esc_url(home_url('/')); ?>" data-toggle="dropdown">Home</a>  
                    </li>

                    <li>
                        <a class="nav-link" href="<?php echo esc_url(home_url('/about')); ?>">About Us</a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <ul> 
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="<?php echo esc_url(home_url('/pages-schedule')); ?>">Schedule</a></li>

                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="<?php echo esc_url(home_url('/pages-blogs')); ?>">Blogs</a></li>
            
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
                    </li>
                </ul>
            </div>
            
        </nav> -->

        <nav class="navbar navbar-expand-lg"> 
            <!-- Brand Logo -->
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img class="logo_light" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.png" alt="logo" />
                <img class="logo_dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_black.png" height="100px" alt="logo" />
                <img class="logo_default" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_black.png" alt="logo" />
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="ion-android-menu"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',   // The location registered in functions.php
                    'menu_class'     => 'navbar-nav',     // Custom class for UL
                    'container'      => false,            // Avoid wrapping with a div
                    'fallback_cb'    => false,            // Disable fallback to WP pages if no menu is set
                    'depth'          => 2,                // Control the depth of the dropdown (support for multi-level)
                    'walker'         => new WP_Bootstrap_Navwalker(), // Use Bootstrap nav walker for proper dropdown functionality
                ));
                ?>
            </div>
        </nav>


    </div>
</header>
<!-- END HEADER --> 


<!-- START SECTION BANNER -->
<!-- <section class="banner_slider banner_slide_half p-0">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active bg_light_pink">
            	<div class="banner_slide_content">
                    <div class="container">
                        <div class="row justify-content-end align-items-center">
                        	<div class="col-xl-6 col-md-5">
								<div class="banner_img text-center">
                                    <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                        <img data-parallax='{"y": -30, "smoothness": 20}' src="<?php echo get_template_directory_uri(); ?>/assets/images/karate_img1.png" alt="image"/>
                                    </div>
                                    <div class="circle_bg1">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-7">
                                <div class="banner_content animation" data-animation="zoomIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s"> Welcome to Karate Class</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aliquid tenetur ut ipsam sint omnis, et quidem ex aspernatur. </p>
                                    <a class="btn btn-default rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                    <a class="btn btn-white rounded-0 animation" href="<?php echo esc_url(home_url('/contact')); ?>" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                        		</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape1">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider_pattern1.png" alt="image"/>
                        </div>
                    </div>
                    <div class="shape2">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider_pattern2.png" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_yellow">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-5">
                                <div class="banner_img2 text-center">
                                    <div class="animation border_img" data-animation="fadeInRight" data-animation-delay="0.5s">
                                        <img data-parallax='{"y": -30, "smoothness": 20}' src="<?php echo get_template_directory_uri(); ?>/assets/images/karate_img2.png" alt="image"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 order-md-first">
                                <div class="banner_content animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">Find lifestyle to the Karate </h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem minima ex deleniti natus sequi ab expedita commodi in aliquid sit consequatur blanditiis.</p>
                                    <a class="btn btn-default rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                    <a class="btn btn-white rounded-0 animation" href="<?php echo esc_url(home_url('/contact')); ?>" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                        		</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape3">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider_pattern3.png" alt="image"/>
                        </div>
                    </div>
                    <div class="shape4">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider_pattern4.png" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_gold">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-5">
                                <div class="banner_img3 text-center">
                                    <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                                        <img data-parallax='{"y": -30, "smoothness": 20}' src="<?php echo get_template_directory_uri(); ?>/assets/images/karate_img32.png" width="2000px" height="700px"  alt="image"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 order-md-first">
                                <div class="banner_content animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">Karate Classes for Everyone</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium distinctio ipsam quos eveniet, adipisci libero. </p>
                                    <a class="btn btn-default rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                    <a class="btn btn-white rounded-0 animation" href="<?php echo esc_url(home_url('/contact')); ?>" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                       			 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape5">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider_pattern5.png" alt="image"/>
                        </div>
                    </div>
                    <div class="shape6">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img data-parallax='{"y": 30, "smoothness": 20}' src="<?php echo get_template_directory_uri(); ?>/assets/images/slider_pattern6.png" alt="image"/>
                        </div>
                    </div>
                    <div class="shape7">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img data-parallax='{"y": -30, "smoothness": 20}' src="<?php echo get_template_directory_uri(); ?>/assets/images/slider_pattern7.png" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <div class="carousel_nav">
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
    </div>
</section> -->

<section class="banner_slider banner_slide_half p-0">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

            <?php
            $banner_query = new WP_Query(array(
                'post_type' => 'banner',
                'posts_per_page' => -1,
            ));

            if ($banner_query->have_posts()) :
                $first_item = true;
                while ($banner_query->have_posts()) : $banner_query->the_post();
                    // $subtitle = get_post_meta(get_the_ID(), '_banner_subtitle', true);
                    $link = get_post_meta(get_the_ID(), '_banner_link', true);
                    $button_text = get_post_meta(get_the_ID(), '_banner_button_text', true);
                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    ?>

                    <div class="carousel-item <?php if ($first_item) { echo 'active'; $first_item = false; } ?> bg_light_pink">
                        <div class="banner_slide_content">
                            <div class="container">
                                <div class="row justify-content-end align-items-center">
                                    <div class="col-xl-6 col-md-5">
                                        <div class="banner_img text-center">
                                            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                                <img data-parallax='{"y": -30, "smoothness": 20}' src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />
                                            </div>
                                            <div class="circle_bg1">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-7">
                                        <div class="banner_content animation" data-animation="zoomIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                            <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s"><?php the_title(); ?></h2>
                                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><?php the_content(); ?></p>
                                            <?php if ($button_text && $link) : ?>
                                                <a class="btn btn-default rounded-0 animation" href="<?php echo esc_url($link); ?>" data-animation="fadeInUp" data-animation-delay="0.7s"><?php echo esc_html($button_text); ?></a>
                                            <?php endif; ?>
                                            <!-- <a class="btn btn-white rounded-0 animation" href="<?php echo esc_url(home_url('/contact')); ?>" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
        <div class="carousel_nav">
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
        </div>
    </div>
</section>

<!-- END SECTION BANNER -->


<!-- START SECTION BENIFIT -->
<section class="pb_70">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                <div class="heading_s1">	
                    <span class="sub_heading">What we do</span>
                    <h2>Benefits of Karate</h2>
                </div>
                <p>Contrary to popular belief Lorem is not simply random text. It has roots in adipiscing ncididunt piece of classical literature</p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
		<div class="row">
            <?php
            // Query for benefits
            $args = array(
                'post_type' => 'benefit',
                'posts_per_page' => 6, // Adjust as needed
            );
            $benefits_query = new WP_Query($args);

            if ($benefits_query->have_posts()) :
                while ($benefits_query->have_posts()) : $benefits_query->the_post();
                    $icon = get_post_meta(get_the_ID(), '_benefit_icon', true); // Get the custom field for the icon
            ?>
            <div class="col-lg-4 col-sm-6">
                <div class="icon_box box_shadow4 text-center icon_box_style1">
                    <div class="box_icon">
                        <?php if ($icon) : ?>
                            <img src="<?php echo esc_url($icon); ?>" height="50px" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="intro_desc">
                        <h5><?php the_title(); ?></h5>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<!-- END SECTION BENIFIT -->


<!-- START SECTION ABOUT -->
<section class="bg_gray">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Welcome to Karate</span>
                	<h2>Better Life With Perfect Body</h2>
                </div>
                <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                <a href="#" class="btn btn-default rounded-0">Read More</a>
            </div>
            <div class="col-md-6">
            	<div class="about_img animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            		<img data-parallax='{"y": -30, "smoothness": 20}'  src="<?php echo get_template_directory_uri(); ?>/assets/images/shaved_about.png" alt="about_img" />
                </div>
            </div>
        </div>
    </div>
    <div class="shape_img">
    	<div class="ol_shape1">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape1.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape2">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape2.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape3">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape3.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape4">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape4.png" alt="image"/>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->


<!-- START SECTION CLASSES -->
<section class="pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1">
                    <span class="sub_heading">Choose Your Level Best</span>
                    <h2>Some Of Our Classes</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'class', // Custom post type
                'posts_per_page' => 6, // Number of classes to display
            );
            $classes_query = new WP_Query($args);
            if ($classes_query->have_posts()) :
                while ($classes_query->have_posts()) : $classes_query->the_post();
                    $teacher_name = get_post_meta(get_the_ID(), '_class_teacher', true);
                    $class_schedule = get_post_meta(get_the_ID(), '_class_schedule', true);
                    $class_badge = get_post_meta(get_the_ID(), '_class_badge', true);
                    $class_time = get_post_meta(get_the_ID(), '_class_time', true);
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <div class="classes_img">
                                <?php the_content(); // Displays the featured image ?>
                                <div class="link_container">
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                            </div>
                            <div class="classes_info">
                                <div class="classes_teacher">
                                    <span><?php echo esc_html($teacher_name); ?></span>
                                </div>
                                <div class="classes_title">
                                    <span class="badge badge-pill badge-info"><?php echo esc_html($class_badge); ?></span>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                </div>
                                <ul class="classes_schedule">
                                    <li><i class="ion-calendar"></i><?php echo esc_html($class_schedule); ?></li>
                                    <li><i class="ion-android-alarm-clock"></i><?php echo esc_html($class_time); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<!-- END SECTION CLASSES -->


<!-- START SECTION CALL TO ACTION -->
<section class="bg_light_pink">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-8 col-lg-6 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1">
                    <h2>Get <span class="text_default">25%</span> Discount for all Classes</h2>
                </div>
                <p>Lorem ipsum dolor amet consectetur adipiscing elit. Phasellus blandit massa enim.</p>
                <a href="#" class="btn btn-default rounded-0 mt-md-2">Join Now</a>
            </div>
        </div>
    </div>
    <div class="shape_img">
    	<div class="ol_shape5">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape5.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape6">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape6.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape7">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax='{"x": 20, "smoothness": 20}' src="<?php echo get_template_directory_uri(); ?>/assets/images/belt.png" style="opacity: 0.1;" height="200" alt="image"/>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CALL TO ACTION -->


<!-- START SECTION PRICING TABLE -->
<section class="bg_light_yellow pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Choose Our Package</span>
                	<h2>Karate Pricing Plan</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
    	<div class="row">
            <?php
                $args = array(
                    'post_type' => 'price',
                    'posts_per_page' => 3,
                );
                $prices_query = new WP_Query($args);
                if ($prices_query->have_posts()) :
                    while ($prices_query->have_posts()) : $prices_query->the_post();
                        $price_name = get_post_meta(get_the_ID(), '_price_name', true);
                        $price_value = get_post_meta(get_the_ID(), '_price_value', true);
                        $price_tag = get_post_meta(get_the_ID(), '_price_tag', true);
            ?>
            
            <?php 
                if ($price_tag == 'popular'):
            ?>

            <div class="col-lg-4">
                <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="pricing_ribbon"><?php echo esc_html($price_tag); ?></div>
                    <div class="pr_title_wrap bg_default text_white">
                        <h4 class="pr_title"><?php echo esc_html($price_name); ?></h4>
                        <div class="price_tage">
                            <h2><?php echo esc_html($price_value); ?><span>/ Month</span></h2>
                        </div>
                    </div>
                    <div class="pr_content pt-3">
                        <ul class="list_none pr_list">
                            <li><?php the_content(); ?></li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                        <a href="#" class="btn btn-default rounded-0">Buy Now</a>
                    </div>
                </div>
            </div>

            <?php else:?>

            <div class="col-lg-4">
                <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="pr_title_wrap border-bottom">
                        <h4 class="pr_title"><?php echo esc_html($price_name); ?></h4>
                        <div class="price_tage">
                            <h2><?php echo esc_html($price_value); ?><span>/ Month</span></h2>
                        </div>
                    </div>
                    <div class="pr_content pt-3">
                        <ul class="list_none pr_list">
                            <li><?php the_content(); ?></li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                        <a href="#" class="btn btn-dark rounded-0">Buy Now</a>
                    </div>
                </div>
            </div>

            <?php endif;?>
            
            <?php 
                    endwhile;
                wp_reset_postdata();
            endif;
            ?> 
        </div>
    </div>
    <div class="shape_img">
        <div class="ol_shape8">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape8.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape9">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape9.png" alt="image"/>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PRICING TABLE -->


<!-- START SECTION TESTIMONIAL -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1">
                    <span class="sub_heading">Testimonial</span>
                    <h2>Our Clients Say!</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <div class="xs_divider clearfix d-none d-md-block"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme" data-margin="15" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
                    
                    <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => -1
                    );
                    $testimonial_query = new WP_Query($args);

                    if ($testimonial_query->have_posts()) :
                        while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
                            $client_name = get_post_meta(get_the_ID(), '_client_name', true);
                            $client_position = get_post_meta(get_the_ID(), '_client_position', true);
                            $client_image = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                            ?>
                            <div class="testimonial_box">
                                <div class="testi_meta">
                                    <div class="testimonial_img">
                                        <img src="<?php echo esc_url($client_image); ?>" alt="<?php echo esc_attr($client_name); ?>">
                                    </div>
                                    <div class="testi_user">
                                        <h5><?php echo esc_html($client_name); ?></h5>
                                        <span><?php echo esc_html($client_position); ?></span>
                                    </div>
                                </div>
                                <div class="testi_desc">
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No testimonials found.</p>';
                    endif;
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIAL -->


<!-- START SECTION TEACHER -->
<section class="bg_light_pink pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Karate teacher</span>
                	<h2>Our Awesome Team</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">

            <?php
                $args = array(
                    'post_type' => 'teacher',
                    'posts_per_page' => 4,
                );
                $teachers_query = new WP_Query($args);
                if ($teachers_query->have_posts()) :
                    while ($teachers_query->have_posts()) : $teachers_query->the_post();
                        $teacher_name = get_post_meta(get_the_ID(), '_teacher_name', true);
                        $teacher_desig = get_post_meta(get_the_ID(), '_teacher_desig', true);
                        $teacher_image = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
            ?>

        	<div class="col-lg-3 col-sm-6">
            	<div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="team_img">
                    	<img src="<?php echo esc_url($teacher_image); ?>" alt="<?php echo esc_html($teacher_name); ?>">
                        <ul class="list_none social_icons social_style1 rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_info text-center">
                        <div class="team_title">
                            <h5><a href="#"><?php echo esc_html($teacher_name); ?></a></h5>
                            <span><?php echo esc_html($teacher_desig); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php 
                    endwhile;
                wp_reset_postdata();
            endif;
            ?>  
        </div>
    </div>
</section>
<!-- END SECTION TEACHER -->


<!-- START SECTION BLOG -->
<section class="pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Our Letest Articles</span>
                	<h2>From Our Blog & News</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                	<div class="blog_img">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/karate_class_img1.jpg" alt="blog_small_img1">
                        </a>
                    </div>
                    <div class="blog_content">
                    	<h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                        <ul class="list_none blog_meta">
                        	<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl_teacher_img1.jpg" alt="image"><span>Dayna</span></a></li>
                            <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                        </ul>
                        <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use dolor sit enim passage of Lorem Ipsum.</p>
                        <a href="#" class="blog_link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<div class="blog_img">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/karate_class_img2.jpg" alt="blog_small_img2">
                        </a>
                    </div>
                    <div class="blog_content">
                    	<h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                        <ul class="list_none blog_meta">
                        	<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl_teacher_img3.jpg" alt="image"><span>Dayna</span></a></li>
                            <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                        </ul>
                        <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use dolor sit enim passage of Lorem Ipsum.</p>
                        <a href="#" class="blog_link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                	<div class="blog_img">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/karate_class_img3.jpg" alt="blog_small_img3">
                        </a>
                    </div>
                    <div class="blog_content">
                    	<h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                        <ul class="list_none blog_meta">
                        	<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cl_teacher_img4.jpg" alt="image"><span>Dayna</span></a></li>
                            <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                        </ul>
                        <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use dolor sit enim passage of Lorem Ipsum.</p>
                        <a href="#" class="blog_link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->


<?php get_footer(); ?>