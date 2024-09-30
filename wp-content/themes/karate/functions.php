<?php
// Function to enqueue styles and scripts

// Register Nav Walker Class for Bootstrap Navigation
require_once get_template_directory() . '/assets/inc/class-wp-bootstrap-navwalker.php';

function sayem_enqueue_assets() {
    // Enqueue Favicon (Direct echo in the header for favicon)
    echo '<link rel="shortcut icon" type="image/x-icon" href="' . esc_url( get_template_directory_uri() . '/assets/images/favicon.jpg' ) . '">';
 
    // Enqueue CSS files
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/assets/css/all.min.css');
    wp_enqueue_style('flaticon-css', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('themify-icons-css', get_template_directory_uri() . '/assets/css/themify-icons.css');
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/owlcarousel/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-css', get_template_directory_uri() . '/assets/owlcarousel/css/owl.theme.default.min.css');
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('jquery-ui-css', get_template_directory_uri() . '/assets/css/jquery-ui.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('layout-style', get_template_directory_uri() . '/assets/css/theme-default.css');

    // Enqueue Google Fonts
    wp_enqueue_style('google-font-oswald', 'https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap');
    wp_enqueue_style('google-font-poppins', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');
}
add_action('wp_enqueue_scripts', 'sayem_enqueue_assets');

// Function to add StatCounter script
function sayem_enqueue_statcounter() {
    echo "<script>
            var sc_project=11981757; 
            var sc_invisible=1; 
            var sc_security='35d2687e'; 
            var sc_https=1;
          </script>";
    wp_enqueue_script('statcounter', 'https://www.statcounter.com/counter/counter.js', array(), null, true);
}
add_action('wp_header', 'sayem_enqueue_statcounter');


// Function to enqueue JavaScript files
function sayem_enqueue_scripts() {
    // Deregister default jQuery and register your custom version
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), null, true);
    wp_enqueue_script('jquery');

    // jQuery UI
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), null, true);

    // Popper.js
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), null, true);

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery', 'popper-js'), null, true);

    // Owl Carousel
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), null, true);

    // Magnific Popup
    wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), null, true);

    // Waypoints
    wp_enqueue_script('waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), null, true);

    // Parallax
    wp_enqueue_script('parallax-js', get_template_directory_uri() . '/assets/js/parallax.js', array('jquery'), null, true);

    // jQuery dd
    wp_enqueue_script('jquery-dd-js', get_template_directory_uri() . '/assets/js/jquery.dd.min.js', array('jquery'), null, true);

    // Countdown
    wp_enqueue_script('countdown-js', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), null, true);

    // CounterUp
    wp_enqueue_script('counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery', 'waypoints-js'), null, true);

    // Parallax Scroll
    wp_enqueue_script('parallax-scroll-js', get_template_directory_uri() . '/assets/js/jquery.parallax-scroll.js', array('jquery'), null, true);

    // FitVids
    wp_enqueue_script('fitvids-js', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array('jquery'), null, true);

    // ImagesLoaded
    wp_enqueue_script('imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), null, true);

    // Isotope
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), null, true);

    // js.cookie
    wp_enqueue_script('cookie-js', get_template_directory_uri() . '/assets/js/js.cookie.js', array('jquery'), null, true);

    // Main Scripts
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'sayem_enqueue_scripts');


// Register Menus
function sayem_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
    ));
}
add_action('init', 'sayem_register_menus');


function create_banner_post_type(){
    $labels = array(
        'name'                  => _x('Banners', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Banner', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Banners', 'text_domain'),
        'name_admin_bar'        => __('Banner', 'text_domain'),
        'all_items'             => __('All Banners', 'text_domain'),
        'add_new_item'          => __('Add New Banner', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Banner', 'text_domain'),
        'edit_item'             => __('Edit Banner', 'text_domain'),
        'update_item'           => __('Update Banner', 'text_domain'),
        'view_item'             => __('View Banner', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Banner', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'), // Support title, content, and featured image
        'public'                => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-cover-image', // Custom icon in the menu
    );
    register_post_type( 'Banner', $args );
}
add_action( 'init', 'create_banner_post_type' );

// Add Meta Boxes for Class Details
function add_banner_meta_boxes() {
    add_meta_box(
        'banner_details', // Unique ID for the meta box
        'Banner Details', // Box title
        'banner_meta_box_callback', // Callback function to display fields
        'banner', // Post type where the box will appear
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_banner_meta_boxes');


function banner_meta_box_callback($post) {
    // $subtitle = get_post_meta($post->ID, '_banner_subtitle', true);
    $link = get_post_meta($post->ID, '_banner_link', true);
    $button_text = get_post_meta($post->ID, '_banner_button_text', true);

    ?>
    <!-- <p>
        <label for="banner_subtitle">Subtitle:</label>
        <input type="text" name="banner_subtitle" id="banner_subtitle" value="<?php echo esc_attr($subtitle); ?>" class="widefat" />
    </p> -->
    <p>
        <label for="banner_link">Button URL:</label>
        <input type="text" name="banner_link" id="banner_link" value="<?php echo esc_attr($link); ?>" class="widefat" />
    </p>
    <p>
        <label for="banner_button_text">Button Text:</label>
        <input type="text" name="banner_button_text" id="banner_button_text" value="<?php echo esc_attr($button_text); ?>" class="widefat" />
    </p>
    <?php
}

function save_banner_meta($post_id) {
    // if (array_key_exists('banner_subtitle', $_POST)) {
    //     update_post_meta($post_id, '_banner_subtitle', sanitize_text_field($_POST['banner_subtitle']));
    // }
    if (array_key_exists('banner_link', $_POST)) {
        update_post_meta($post_id, '_banner_link', sanitize_text_field($_POST['banner_link']));
    }
    if (array_key_exists('banner_button_text', $_POST)) {
        update_post_meta($post_id, '_banner_button_text', sanitize_text_field($_POST['banner_button_text']));
    }
}
add_action('save_post', 'save_banner_meta');




// Register Custom Post Type for Benefits
function create_benefit_post_type() {
    $labels = array(
        'name'                  => _x('Benefits', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Benefit', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Benefits', 'text_domain'),
        'name_admin_bar'        => __('Benefit', 'text_domain'),
        'archives'              => __('Benefit Archives', 'text_domain'),
        'attributes'            => __('Benefit Attributes', 'text_domain'),
        'all_items'             => __('All Benefits', 'text_domain'),
        'add_new_item'          => __('Add New Benefit', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Benefit', 'text_domain'),
        'edit_item'             => __('Edit Benefit', 'text_domain'),
        'update_item'           => __('Update Benefit', 'text_domain'),
        'view_item'             => __('View Benefit', 'text_domain'),
        'search_items'          => __('Search Benefit', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Benefit', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-awards',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('benefit', $args);
}
add_action('init', 'create_benefit_post_type', 0);


function add_benefit_icon_meta_box() {
    add_meta_box(
        'benefit_icon', // Unique ID
        'Benefit Icon', // Box title
        'benefit_icon_meta_box_html', // Content callback, must be of type callable
        'benefit' // Post type
    );
}
add_action('add_meta_boxes', 'add_benefit_icon_meta_box');

function benefit_icon_meta_box_html($post) {
    $icon_url = get_post_meta($post->ID, '_benefit_icon', true);
    ?>
    <label for="benefit_icon">Icon URL:</label>
    <input type="text" name="benefit_icon" id="benefit_icon" value="<?php echo esc_attr($icon_url); ?>" class="widefat">
    <?php
}

function save_benefit_icon_meta_box($post_id) {
    if (array_key_exists('benefit_icon', $_POST)) {
        update_post_meta(
            $post_id,
            '_benefit_icon',
            $_POST['benefit_icon']
        );
    }
}
add_action('save_post', 'save_benefit_icon_meta_box');



// Register Custom Post Type for Classes
function create_classes_post_type() {
    $labels = array(
        'name'                  => _x('Classes', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Class', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Classes', 'text_domain'),
        'name_admin_bar'        => __('Class', 'text_domain'),
        'all_items'             => __('All Classes', 'text_domain'),
        'add_new_item'          => __('Add New Class', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Class', 'text_domain'),
        'edit_item'             => __('Edit Class', 'text_domain'),
        'update_item'           => __('Update Class', 'text_domain'),
        'view_item'             => __('View Class', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Class', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor'), // Support title, content, and featured image
        'public'                => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-welcome-learn-more', // Custom icon in the menu
    );
    register_post_type('class', $args);
}
add_action('init', 'create_classes_post_type', 0);

// Add Meta Boxes for Class Details
function add_class_meta_boxes() {
    add_meta_box(
        'class_details', // Unique ID for the meta box
        'Class Details', // Box title
        'class_meta_box_callback', // Callback function to display fields
        'class', // Post type where the box will appear
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_class_meta_boxes');


// Callback function to display fields in the meta box
function class_meta_box_callback($post) {
    // Retrieve the current values for each field
    $teacher_name = get_post_meta($post->ID, '_class_teacher', true);
    $class_schedule = get_post_meta($post->ID, '_class_schedule', true);
    $class_badge = get_post_meta($post->ID, '_class_badge', true);
    $class_time = get_post_meta($post->ID, '_class_time', true);
    ?>
    <p>
        <label for="class_teacher">Teacher Name:</label>
        <input type="text" name="class_teacher" id="class_teacher" value="<?php echo esc_attr($teacher_name); ?>" class="widefat">
    </p>
    <p>
        <label for="class_schedule">Schedule:</label>
        <input type="text" name="class_schedule" id="class_schedule" value="<?php echo esc_attr($class_schedule); ?>" class="widefat">
    </p>
    <p>
        <label for="class_badge">Class Tag Badge:</label>
        <input type="text" name="class_badge" id="class_badge" value="<?php echo esc_attr($class_badge); ?>" class="widefat">
    </p>
    <p>
        <label for="class_time">Class Time:</label>
        <input type="text" name="class_time" id="class_time" value="<?php echo esc_attr($class_time); ?>" class="widefat">
    </p>
    <?php
}

// Save the meta box values
function save_class_meta_box($post_id) {
    if (array_key_exists('class_teacher', $_POST)) {
        update_post_meta($post_id, '_class_teacher', sanitize_text_field($_POST['class_teacher']));
    }
    if (array_key_exists('class_schedule', $_POST)) {
        update_post_meta($post_id, '_class_schedule', sanitize_text_field($_POST['class_schedule']));
    }
    if (array_key_exists('class_badge', $_POST)) {
        update_post_meta($post_id, '_class_badge', sanitize_text_field($_POST['class_badge']));
    }
    if (array_key_exists('class_time', $_POST)) {
        update_post_meta($post_id, '_class_time', sanitize_text_field($_POST['class_time']));
    }
}
add_action('save_post', 'save_class_meta_box');




// Add Theme Support for Post Thumbnails
function theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

// Register Custom Post Type for Testimonials
function create_testimonial_post_type() {
    register_post_type('testimonial',
        array(
            'labels' => array(
                'name' => __('Testimonials', 'text_domain'),
                'singular_name' => __('Testimonial', 'text_domain'),
                'add_new_item' => __('Add New Testimonial', 'text_domain'),
                'edit_item' => __('Edit Testimonial'),
                'new_item' => __('New Testimonial', 'text_domain'),
                'view_item' => __('View Testimonial', 'text_domain'),
                'not_found' => __('No Testimonials found'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonial'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-format-quote',
        )
    );
}
add_action('init', 'create_testimonial_post_type');

// Add Meta Boxes for Testimonials
function testimonial_add_meta_boxes() {
    add_meta_box(
        'testimonial_meta_box', // ID
        'Testimonial Details', // Title
        'testimonial_meta_box_callback', // Callback function
        'testimonial', // Post type
        'normal', // Context
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'testimonial_add_meta_boxes');

// Callback function for testimonial meta box
function testimonial_meta_box_callback($post) {
    // Nonce field for security
    wp_nonce_field('save_testimonial_meta', 'testimonial_meta_nonce');

    $client_name = get_post_meta($post->ID, '_client_name', true);
    $client_position = get_post_meta($post->ID, '_client_position', true);

    ?>
    <p>
        <label for="client_name">Client Name:</label>
        <input type="text" name="client_name" id="client_name" value="<?php echo esc_attr($client_name); ?>" class="widefat">
    </p>
    <p>
        <label for="client_position">Client Position:</label>
        <input type="text" name="client_position" id="client_position" value="<?php echo esc_attr($client_position); ?>" class="widefat">
    </p>
    <?php
}

// Save Meta Box Data
function save_testimonial_meta($post_id) {
    // Verify nonce for security
    if (!isset($_POST['testimonial_meta_nonce']) || !wp_verify_nonce($_POST['testimonial_meta_nonce'], 'save_testimonial_meta')) {
        return;
    }

    // Save client name
    if (isset($_POST['client_name'])) {
        update_post_meta($post_id, '_client_name', sanitize_text_field($_POST['client_name']));
    }

    // Save client position
    if (isset($_POST['client_position'])) {
        update_post_meta($post_id, '_client_position', sanitize_text_field($_POST['client_position']));
    }
}
add_action('save_post', 'save_testimonial_meta');



function create_pricing_post_type(){
    $labels = array(
        'name'                  => _x('Prices', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Price', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Prices', 'text_domain'),
        'name_admin_bar'        => __('Price', 'text_domain'),
        'all_items'             => __('All Prices', 'text_domain'),
        'add_new_item'          => __('Add New Price', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Price', 'text_domain'),
        'edit_item'             => __('Edit Price', 'text_domain'),
        'update_item'           => __('Update Price', 'text_domain'),
        'view_item'             => __('View Price', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Price', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor'), // Support title, content, and featured image
        'public'                => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-money-alt', // Custom icon in the menu
    );
    register_post_type( 'Price', $args );
}
add_action('init', 'create_pricing_post_type', 0);


// Add Meta Boxes for Price Details
function add_price_meta_boxes() {
    add_meta_box(
        'price_details', // Unique ID for the meta box
        'Price Details', // Box title
        'price_meta_box_callback', // Callback function to display fields
        'Price', // Post type where the box will appear
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_price_meta_boxes');


// Callback function to display fields in the meta box
function price_meta_box_callback($post) {
    // Retrieve the current values for each field
    $price_name = get_post_meta($post->ID, '_price_name', true);
    $price_value = get_post_meta($post->ID, '_price_value', true);
    $price_tag = get_post_meta($post->ID, '_price_tag', true);
    ?>
    <p>
        <label for="price_name">Pricing Name:</label>
        <input type="text" name="price_name" id="price_name" value="<?php echo esc_attr($price_name); ?>" class="widefat">
    </p>
    <p>
        <label for="price_value">Offer Price:</label>
        <input type="text" name="price_value" id="price_value" value="<?php echo esc_attr($price_value); ?>" class="widefat">
    </p>
    <p>
        <label for="price_tag">Pricing Tag:</label>
        <input type="text" name="price_tag" id="price_tag" value="<?php echo esc_attr($price_tag); ?>" class="widefat">
    </p>
    <?php
}

// Save the meta box values
function save_price_meta_box($post_id) {
    if (array_key_exists('price_name', $_POST)) {
        update_post_meta($post_id, '_price_name', sanitize_text_field($_POST['price_name']));
    }
    if (array_key_exists('price_value', $_POST)) {
        update_post_meta($post_id, '_price_value', sanitize_text_field($_POST['price_value']));
    }
    if (array_key_exists('price_tag', $_POST)) {
        update_post_meta($post_id, '_price_tag', sanitize_text_field($_POST['price_tag']));
    }
}
add_action('save_post', 'save_price_meta_box');


// Add Theme Support for Post Thumbnails
function theme_setup_teacher() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup_teacher');

function create_teachers_post_type(){
    $labels = array(
        'name'                  => _x('Teachers', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Teacher', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Teachers', 'text_domain'),
        'name_admin_bar'        => __('Teacher', 'text_domain'),
        'all_items'             => __('All Teachers', 'text_domain'),
        'add_new_item'          => __('Add New Teacher', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Teacher', 'text_domain'),
        'edit_item'             => __('Edit Teacher', 'text_domain'),
        'update_item'           => __('Update Teacher', 'text_domain'),
        'view_item'             => __('View Teacher', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Teacher', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'), // Support title, content, and featured image
        'public'                => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-businessperson', // Custom icon in the menu
    );
    register_post_type('Teacher', $args);
}
add_action('init', 'create_teachers_post_type', 0);


// Add Meta Boxes for Teacher Details
function add_teacher_meta_boxes() {
    add_meta_box(
        'teacher_details', // Unique ID for the meta box
        'Teacher Details', // Box title
        'teacher_meta_box_callback', // Callback function to display fields
        'Teacher', // Post type where the box will appear
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_teacher_meta_boxes');


function teacher_meta_box_callback($post) {
    // Retrieve the current values for each field
    $teacher_name = get_post_meta($post->ID, '_teacher_name', true);
    $teacher_desig = get_post_meta($post->ID, '_teacher_desig', true);
    ?>
    <p>
        <label for="teacher_name">Teacher Name:</label>
        <input type="text" name="teacher_name" id="teacher_name" value="<?php echo esc_attr($teacher_name); ?>" class="widefat">
    </p>
    <p>
        <label for="teacher_desig">Designation:</label>
        <input type="text" name="teacher_desig" id="teacher_desig" value="<?php echo esc_attr($teacher_desig); ?>" class="widefat">
    </p>
    <?php
}

// Save the meta box values
function save_teacher_meta_box($post_id) {
    if (array_key_exists('teacher_name', $_POST)) {
        update_post_meta($post_id, '_teacher_name', sanitize_text_field($_POST['teacher_name']));
    }
    if (array_key_exists('teacher_desig', $_POST)) {
        update_post_meta($post_id, '_teacher_desig', sanitize_text_field($_POST['teacher_desig']));
    }
}
add_action('save_post', 'save_teacher_meta_box');


// Create the contact table
function create_contact_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_submissions'; // Table name with WordPress prefix

    // SQL to create the table
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        subject varchar(200) NOT NULL,
        message text NOT NULL,
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    // Include the necessary file to execute dbDelta (which creates tables)
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Hook the function to the 'after_switch_theme' action to create the table when the theme is activated
add_action('after_switch_theme', 'create_contact_table');



function handle_contact_form_submission() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contact_form_nonce'])) {
        
        // Verify nonce for security
        if (!wp_verify_nonce($_POST['contact_form_nonce'], 'submit_contact_form')) {
            die('Nonce verification failed');
        }

        // Check if form data exists
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

            global $wpdb;
            $table_name = $wpdb->prefix . 'contact_submissions';

            // Sanitize form inputs
            $name = sanitize_text_field($_POST['name']);
            $email = sanitize_email($_POST['email']);
            $subject = sanitize_text_field($_POST['subject']);
            $message = sanitize_textarea_field($_POST['message']);

            // Insert data into the database
            $wpdb->insert(
                $table_name,
                array(
                    'name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'message' => $message,
                    'submitted_at' => current_time('mysql')
                )
            );

            if ($wpdb->insert_id) {
                // Redirect or show success message
                echo '<div class="alert alert-success">Thank you for your message. We will be in touch soon!</div>';
            } else {
                echo '<div class="alert alert-danger">There was an issue submitting your message. Please try again later.</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Please fill in all required fields.</div>';
        }
    }
}
add_action('wp', 'handle_contact_form_submission');


// Register the Contact Submissions Menu Page
function register_contact_submissions_menu_page() {
    add_menu_page(
        'Contact Submissions',          // Page title
        'Contact Submissions',          // Menu title
        'manage_options',               // Capability (Only admins can view)
        'contact-submissions',          // Menu slug
        'display_contact_submissions',  // Callback function to show the content
        'dashicons-email-alt',          // Icon
        6                               // Position
    );
}
add_action('admin_menu', 'register_contact_submissions_menu_page');


// Function to Display Contact Form Submissions
function display_contact_submissions() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_submissions';  // Your contact form table

    // Fetching data from the table
    $results = $wpdb->get_results("SELECT * FROM $table_name");

    // Admin page content
    echo '<div class="wrap">';
    echo '<h1>Contact Form Submissions</h1>';

    if ($results) {
        echo '<table class="widefat fixed" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>';

        // Loop through each result and display in table rows
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->id) . '</td>';
            echo '<td>' . esc_html($row->name) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->subject) . '</td>';
            echo '<td>' . esc_html($row->message) . '</td>';
            echo '<td>' . esc_html($row->submitted_at) . '</td>';
            echo '</tr>';
        }

        echo '</tbody></table>';
    } else {
        echo '<p>No submissions found.</p>';
    }

    echo '</div>';
}














