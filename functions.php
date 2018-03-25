<?php
/**
 * Futbalové trávniky functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Futbalové_trávniky
 */

if (!function_exists('futbalove_travniky_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function futbalove_travniky_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Futbalové trávniky, use a find and replace
         * to change 'futbalove_travniky' to the name of your theme in all the template files.
         */
        load_theme_textdomain('futbalove_travniky', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'futbalove_travniky'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('futbalove_travniky_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'futbalove_travniky_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function futbalove_travniky_content_width()
{
    $GLOBALS['content_width'] = apply_filters('futbalove_travniky_content_width', 640);
}

add_action('after_setup_theme', 'futbalove_travniky_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function futbalove_travniky_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'futbalove_travniky'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'futbalove_travniky'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'futbalove_travniky_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function futbalove_travniky_scripts()
{
    wp_enqueue_style('futbalove_travniky-style', get_stylesheet_uri());

    wp_enqueue_script('futbalove_travniky-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('futbalove_travniky-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'futbalove_travniky_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

// Function for create my custom db tables

function naradie_create_tables()
{
    global $wpdb;

    $table_name = $wpdb->prefix . "calendar";
    $charset_collate = $wpdb->get_charset_collate();

      $sql = "CREATE TABLE $table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      product_id bigint(20) UNSIGNED NOT NULL,
      start_date date NOT NULL,
      end_date date NOT NULL,
      name VARCHAR(255),
      email VARCHAR(255),
      phone VARCHAR(20),
      note MEDIUMTEXT,
      PRIMARY KEY  (id),
      FOREIGN KEY (product_id) REFERENCES wp_posts(id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

add_action("after_switch_theme", "naradie_create_tables");


/**
 * Register a custom menu page.
 */
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{
    add_menu_page('Rezervácie', 'Rezervácie', 'manage_options', 'rezervacie', 'rezervacie', 'dashicons-calendar', 6);
}

function rezervacie()
{
    global $wpdb;

    if($_GET['rezervacia']) {
        $wpdb->query(
            'DELETE  FROM '.$wpdb->prefix.'calendar
               WHERE id = "'.$_GET['rezervacia'].'"'
        );
    }
    ?>
    <script>

        jQuery( document ).ready(function() {
            jQuery('.remove_link').click(function (e) {
                var answer=confirm('Odstrániť?');
                if(!answer){
                    e.preventDefault();
                }

            });
        });

    </script>
    <style>
        .book-list {
            border-collapse: collapse;
        }

        .book-list, th, td {
            border: 1px solid #ccc;
        }
    </style>
    <div class="wrap">
        <h2>Rezervácie</h2>
    </div>

    <table class="book-list" cellspacing="0" cellpadding="4">
        <tr>
            <th>Produkt</th>
            <th>Dátum</th>
            <th>Meno</th>
            <th>Email</th>
            <th>Telefón</th>
            <th>Poznámka</th>
            <th>Odstrániť</th>

        </tr>

    <?php
    $query = "SELECT * FROM wp_calendar JOIN wp_posts ON wp_calendar.product_id=wp_posts.ID ORDER BY wp_calendar.id DESC";
    $dates = $wpdb->get_results($query);

    foreach ($dates as $d) {

        $delete = add_query_arg(array(
            'rezervacia'=>$d->id,
        ), admin_url('admin.php?page=rezervacie'));

        $datum = date('d.m.Y',strtotime($d->start_date)) . " - " . date('d.m.Y',strtotime($d->end_date));

        echo "<tr><td>$d->post_title</td>";
        echo "<td>$datum</td>";
        echo "<td>$d->name</td>";
        echo "<td>$d->email</td>";
        echo "<td>$d->phone</td>";
        echo "<td>$d->note</td>";
        echo "<td align='center'><a class='remove_link' href='".$delete."'><span style='color: red;text-decoration: none' class=\"dashicons dashicons-trash\"></span></a></td></tr>";
    }

    echo "</table>";
}