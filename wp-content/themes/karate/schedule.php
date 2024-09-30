<?php
/*
Template Name: Schedule Page
*/
?>

<?php get_header();?>

<style>
    td:hover{
        background-color: #F32B56;
        color: #fff;
    }
    td .classes_title h6:hover{
        background-color: #F32B56;
        color: #fff;
    }
</style>

<!-- START SECTION BREADCRUMB -->
<section class="breadcrumb_section page-title-light background_bg bg_fixed overlay_bg_blue_70" data-img-src="<?php echo get_template_directory_uri(); ?>/assets/images/breadcrumb_bg2.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-12 text-center">
            	<div class="page-title">
            		<h1>schedule</h1>
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

<!-- START SECTION CLASSES TIMETABLE -->
<section>
	<div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-5">
                    Schedule of All Classes
                </h2>
            </div>    
        </div>

        <div class="row">	
                <div class="col-12">	
                    <div class="schedule_table box_shadow1 table-responsive animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <td>Time</td>
                                    <td>Week Days</td>
                                    <td>Class Information</td>
                                </tr>
                            </thead>
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
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="classes_timing">	
                                            <span><?php echo esc_html($class_time); ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="classes_schedule"></div>
                                            <span><?php echo esc_html($class_schedule); ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="classes_title">
                                            <h6>Class - <?php the_title(); ?></h6>
                                        </div>
                                        <div class="cl_trainer">
                                            <span>Teacher - <?php echo esc_html($teacher_name); ?></span>
                                        </div>
                                    </td>                               
                                </tr>
                            </tbody>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>     
                        </table>
                    </div>
                </div>    
        </div>
    </div>
</section>

<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <form method="GET" action="">
                    <ul class="classes_filter animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <li><button type="submit" name="badge" value="all" class="current">All Classes</button></li>
                        <?php
                        // Get unique class badges
                        $badges = $wpdb->get_col("SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = '_class_badge'");
                        foreach ($badges as $badge) {
                            echo '<li><button type="submit" name="badge" value="' . esc_attr($badge) . '">' . esc_html($badge) . '</button></li>';
                        }
                        ?>
                    </ul>
                </form>
            </div>
        </div>

        <div class="row">   
            <div class="col-12">   
                <div class="schedule_table box_shadow1 table-responsive animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <td>Time</td>
                                <td>Monday</td>
                                <td>Tuesday</td>
                                <td>Wednesday</td>
                                <td>Thursday</td>
                                <td>Friday</td>
                                <td>Saturday</td>
                                <td>Sunday</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $badge_filter = isset($_GET['badge']) && $_GET['badge'] !== 'all' ? sanitize_text_field($_GET['badge']) : '';

                            $args = array(
                                'post_type' => 'class', // Custom post type
                                'posts_per_page' => 6, // Number of classes to display
                            );

                            // Modify query if filtering by badge
                            if (!empty($badge_filter)) {
                                $args['meta_query'] = array(
                                    array(
                                        'key' => '_class_badge',
                                        'value' => $badge_filter,
                                        'compare' => '='
                                    )
                                );
                            }

                            $classes_query = new WP_Query($args);
                            if ($classes_query->have_posts()) :
                                while ($classes_query->have_posts()) : $classes_query->the_post();
                                    $teacher_name = get_post_meta(get_the_ID(), '_class_teacher', true);
                                    $class_time = get_post_meta(get_the_ID(), '_class_time', true);
                                    $class_badge = get_post_meta(get_the_ID(), '_class_badge', true);
                            ?>
                            <tr>
                                <td></td>
                                <td>
                                    <div>
                                        <div class="classes_title">
                                            <h6><?php the_title(); ?></h6>
                                        </div>
                                        <div class="classes_timing">   
                                            <span><?php echo esc_html($class_time); ?></span>
                                        </div>
                                        <div class="cl_trainer">
                                            <span><?php echo esc_html($teacher_name); ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<tr><td colspan="8">No classes found.</td></tr>';
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>         
        </div>
    </div>
</section> -->


<!-- END SECTION CLASSES TIMETABLE -->

<?php get_footer();?>