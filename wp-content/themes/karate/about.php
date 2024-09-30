<?php
/*
Template Name: About Page
*/
?>


<?php get_header();?>


<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-12 text-center">
            	<div class="page-title">
            		<h1>About Us</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?> Us</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="shape_img">
    	<div class="ol_shape11">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape11.png" alt="image">
            </div>
        </div>
        <div class="ol_shape12">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape12.png" alt="image">
            </div>
        </div>
        <div class="ol_shape13">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax='{"x": 20, "smoothness": 20}' src="<?php echo get_template_directory_uri(); ?>/assets/images/belt.png" style="opacity: 0.1;" height="250" alt="image"/>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION ABOUT -->
<section>
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="video_box overlay_bg_30 mb-3 mb-sm-4 mb-md-0">
                	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_video.jpg" alt="about_img11">
                    <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup video_play"><span class="ripple"><i class="ion-play"></i></span></a>
                </div>
            </div>
            <div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	<div class="heading_s1">
                	<span class="sub_heading">Welcome to Dhyana</span>
                	<h2>Better Life With Perfect Body</h2>
                </div>
                <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                <a href="#" class="btn btn-default rounded-0">Read More</a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

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

<!-- START SECTION COUNTER -->
<section class="overlay_bg_70 parallax_bg" data-parallax-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/counter_bg.jpg">
    <div class="container">
        <div class="row">
        	<div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="box_counter counter_white text-center">
                    <i class="flaticon-trainers"></i>
                    <h3 class="counter_text"><span class="counter">18</span>+</h3>
                    <p>Our Trainers</p>
                </div>
            </div>
            <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	<div class="box_counter counter_white text-center">
                    <i class="flaticon-trophy"></i>
                    <h3 class="counter_text"><span class="counter">15</span>+</h3>
                    <p>Win Awards</p>
                </div>
            </div>
            <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            	<div class="box_counter counter_white text-center">
                    <i class="flaticon-users"></i>
                    <h3 class="counter_text"><span class="counter">1800</span>+</h3>
                    <p>Happy Member</p>
                </div>
            </div>
            <div class="col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
            	<div class="box_counter counter_white text-center">
                    <i class="flaticon-classes"></i>
                    <h3 class="counter_text"><span class="counter">45</span>+</h3>
                    <p>Monthly Classes</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER -->

<!-- START SECTION TEACHER -->
<section class=" pb_70">
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

<?php get_footer();?>