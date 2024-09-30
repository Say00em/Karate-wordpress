<?php
/*
Template Name: Blogs Page
*/
?>


<?php get_header();?>

<!-- START SECTION BREADCRUMB -->
<section class="breadcrumb_section page-title-light background_bg overlay_bg_70" data-img-src="<?php echo get_template_directory_uri(); ?>/assets/images/breadcrumb_bg2.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-12 text-center">
            	<div class="page-title">
            		<h1>Blogs</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php the_title(); ?>">Blog</a></li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION BLOG -->
<section>
	<div class="container">
        <div class="row">
        	<div class="col-lg-9">
            	<ul class="blog_container grid_container gutter_medium grid_col2 masonry">
                	<li class="grid-sizer"></li>
                    <li class="grid_item">
                    	<div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_small_img1.jpg" alt="blog_small_img1">
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
                    </li>
                    <li class="grid_item">
                        <div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_small_img9.jpg" alt="blog_small_img9">
                                </a>
                            </div>
                            <div class="blog_content">
                                <h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><img src="assets/images/cl_teacher_img3.jpg" alt="image"><span>Dayna</span></a></li>
                                    <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                                </ul>
                                <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use dolor sit enim passage of Lorem Ipsum.</p>
                                <a href="#" class="blog_link">Read More</a>
                            </div>
                        </div>
                    </li>
                    <li class="grid_item">
                        <div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_small_img3.jpg" alt="blog_small_img3">
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
                    </li>
                    <li class="grid_item">
                        <div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <div class="carousel_slider owl-carousel owl-theme" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-autoplay-timeout="3000" data-items="1">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_small_img4.jpg" alt="blog_small_img4">
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_small_img5.jpg" alt="blog_small_img5">
                                    </a>
                                </div>
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
                    </li>
                    <li class="grid_item">
                        <div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <div class="fit-videos">
                                   <iframe src="https://player.vimeo.com/video/34132895?title=0&amp;byline=0&amp;portrait=0" width="540" height="360" allowfullscreen></iframe>
                                </div>
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
                    </li>
                    <li class="grid_item">
                        <div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <div class="fit-videos">
                                    <iframe allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118951274&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" width="540" height="360"></iframe>
                                </div>
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
                    </li>
                    <li class="grid_item">
                        <div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <div class="fit-videos">
                                    <iframe width="540" height="360" src="https://www.youtube.com/embed/7e90gBu4pas" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
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
                    </li>
                    <li class="grid_item">
                        <div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_small_img10.jpg" alt="blog_small_img6">
                                </a>
                            </div>
                            <div class="blog_content">
                                <h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><img src="assets/images/cl_teacher_img3.jpg" alt="image"><span>Dayna</span></a></li>
                                    <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                                </ul>
                                <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use dolor sit enim passage of Lorem Ipsum.</p>
                                <a href="#" class="blog_link">Read More</a>
                            </div>
                        </div>
                    </li>
                    <li class="grid_item">
                        <div class="blog_post box_shadow4">
                            <div class="blog_img">
                                <div class="carousel_slider owl-carousel owl-theme" data-autoplay="true" data-loop="true" data-autoplay-timeout="3000" data-items="1" data-animate-in="fadeIn" data-animate-out="fadeOut">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_small_img7.jpg" alt="blog_small_img7">
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_small_img8.jpg" alt="blog_small_img8">
                                    </a>
                                </div>
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
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 mt-5 mt-lg-0">
            	<div class="sidebar">
                    <div class="widget widget_search">
                        <form class="search_form"> 
                            <input required="" class="form-control" placeholder="Search..." type="text">
                            <button type="submit" title="Search" name="submit" value="Submit">
                                <span class="ti-search"></span>
                            </button>
                        </form>
                    </div>
                    <div class="widget widget_categories">
                    	<h5 class="widget_title">Categories</h5>
                        <ul class="border_bottom_dash">
                            <li><a href="#"><span class="categories_name">Progress</span><span class="categories_num">(9)</span></a></li>
                            <li><a href="#"><span class="categories_name">Yoga &amp; Meditation</span><span class="categories_num">(6)</span></a></li>
                            <li><a href="#"><span class="categories_name">Training</span><span class="categories_num">(4)</span></a></li>
                            <li><a href="#"><span class="categories_name">Challenge</span><span class="categories_num">(7)</span></a></li>
                            <li><a href="#"><span class="categories_name">Fitness Workout</span><span class="categories_num">(12)</span></a></li>
                    	</ul>
                    </div>
                    <div class="widget widget_recent_post">
                    	<h5 class="widget_title">Recent Post</h5>
                        <ul class="recent_post border_bottom_dash list_none">
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/letest_post1.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/letest_post2.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/letest_post3.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_tags">
                    	<h5 class="widget_title">tags</h5>
                        <div class="tags">
                        	<a href="#">Gym</a>
                            <a href="#">Fitness</a>
                            <a href="#">Cardio</a>

                            <a href="#">Cycling</a>
                            <a href="#">Workout</a>
                        </div>
                    </div>
                    <div class="widget widget_archive">
                    	<h5 class="widget_title">Archive</h5>
                        <ul class="list_none border_bottom_dash">
                            <li><a href="#"><span class="archive_year">June 2017</span><span class="archive_num">(12)</span></a></li>
                            <li><a href="#"><span class="archive_year">May 2017</span><span class="archive_num">(5)</span></a></li>
                            <li><a href="#"><span class="archive_year">March 2017</span><span class="archive_num">(6)</span></a></li>
                            <li><a href="#"><span class="archive_year">January 2017</span><span class="archive_num">(7)</span></a></li>
                            <li><a href="#"><span class="archive_year">April 2016</span><span class="archive_num">(10)</span></a></li>
                    	</ul>
                    </div>
                    <!-- <div class="widget widget_instagram">
                    	<h5 class="widget_title">Instagram Feeds</h5>
                        <ul class="list_none instafeed">
                            <li><a href="#"><img src="assets/images/insta_img1.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img2.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img3.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img4.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img5.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img6.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img7.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img8.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12 mt-4">
            	<ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
              	</ul>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->

<?php get_footer();?>