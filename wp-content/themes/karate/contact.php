<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>


<!-- START SECTION BREADCRUMB -->
<section class="breadcrumb_section page-title-light background_bg overlay_bg_blue_70" data-img-src="<?php echo get_template_directory_uri(); ?>/assets/images/breadcrumb_bg4.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1> <!-- Dynamic Title -->
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION CONTACT -->
<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s2">
                    <span class="sub_heading">Contact Us</span>
                    <h3>Get In touch</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
                <ul class="contact_info contact_info_style2 list_none">
                    <li>
                        <span class="ti-mobile"></span>
                        <p>+123 456 7890</p>
                    </li>
                    <li>
                        <span class="ti-email"></span>
                        <a href="mailto:info@yourmail.com">info@yourmail.com</a>
                    </li>
                    <li>
                        <span class="ti-location-pin"></span>
                        <address>256 Mohra Rd, North London, UK</address>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8 col-md-6 mt-4 mt-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="field_form icon_form">
                    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                        <?php wp_nonce_field('submit_contact_form', 'contact_form_nonce'); ?>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <div class="form-input">
                                    
                                <input type="hidden" name="contact_form_nonce" value="<?php echo wp_create_nonce('submit_contact_form'); ?>">

                                    <span><i class="ti-user"></i></span>
                                    <input required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="form-input">
                                    <span><i class="ti-email"></i></span>
                                    <input required="required" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="form-input">
                                    <span><i class="ti-folder"></i></span>
                                    <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="text">
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <div class="form-input">
                                    <span><i class="ti-comments"></i></span>
                                    <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">  
                                <button type="submit" class="btn btn-secondary" >Submit</button>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->

<!-- START SECTION MAP -->
<div class="map_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="contact_map animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION MAP -->

<?php get_footer(); ?>


