<?php
/**
 *	Require Once
 */
require_once ( 'includes/custom-posts.php' );
require_once ( 'includes/custom-widgets.php' );
require_once ( 'includes/customizer.php' );
require_once ( 'includes/CMB/custom-metaboxes.php' );
require_once ( 'includes/tgm-plugin-activation/tgm-plugin-activation.php' );

function woga_setup() {
	/* text domain */
	load_theme_textdomain( 'ti', get_template_directory() . '/languages' );
}	

add_action( 'after_setup_theme', 'woga_setup' );

/**
 *  Content Width
 */
if ( ! isset( $content_width ) ) $content_width = 634;

/**
 *  Header Navigation
 */
function ti_header_navigation() {
  $locations = array(
    'header-navigation' => __( 'Header Navigation', 'ti' ),
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'ti_header_navigation' );

/**
 *	WP Enqueue Style Medica
 */
function wp_enqueue_style_medica() {
  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0' );
  wp_enqueue_style( 'font-family-Open-Sans', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300', array(), '1.0' );
  wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri() . '/css/nivo-lightbox.css', array(), '1.2.0' );
  wp_enqueue_style( 'nivo-lightbox-default', get_template_directory_uri() . '/css/nivo-lightbox-default.css', array(), '1.2.0' );
  wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.css', array(), '1.11.2' );
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_style_medica' );

/**
 *	WP Enqueue Scripts Medica
 */
function wp_enqueue_scripts_medica() {
  wp_enqueue_script( 'jquerys', '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', array( 'jquery' ), '1.10.1', true );
  wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array( 'jquery' ), '1.11.2', true );
  wp_enqueue_script( 'carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), '6.2.1', true );
  wp_enqueue_script( 'nivo-lightbox', get_template_directory_uri() . '/js/nivo-lightbox.min.js', array( 'jquery' ), '1.2.0', true );
  wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts_medica' );

/**
 *	Add Theme Support
 */
add_theme_support( 'post-thumbnails' ); // Post Thumbnails
add_theme_support( 'automatic-feed-links' ); // Automatic Feed Links

/**
 *  General Sidebar
 */
function ti_general_sidebar() {
  $args = array(
      'id'            => 'general-sidebar',
      'name'          => __( 'General Sidebar', 'ti' ),
      'description'   => __( 'Use this sidebar to display widgets in your website, including posts and pages.', 'ti' ),
      'before_title'  => '<div class="title-widget">',
      'after_title'   => '</div>',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
  );
  register_sidebar( $args );

  $args = array(
      'id'            => 'contact-widgets',
      'name'          => __( 'Contact widgets', 'ti' ),
      'description'   => __( 'Use this area to display widgets in your contact section.', 'ti' ),
      'before_title'  => '<div class="title-widget">',
      'after_title'   => '</div>',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
  );
  register_sidebar( $args );

  $args = array(
      'id'            => 'footer-widgets',
      'name'          => __( 'Footer widgets', 'ti' ),
      'description'   => __( 'Use this area to display widgets in your footer section.', 'ti' ),
      'before_title'  => '<div class="title-widget">',
      'after_title'   => '</div>',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
  );
  register_sidebar( $args );
}
add_action( 'widgets_init', 'ti_general_sidebar' );

/**
 *  Count widgets
 */
function ti_count_widgets( $sidebar_id, $echo = false ) {
    $the_sidebars = wp_get_sidebars_widgets();
    if( !isset( $the_sidebars[$sidebar_id] ) )
        return __( 'Invalid sidebar ID' );
    if( $echo )
        echo count( $the_sidebars[$sidebar_id] );
    else
        return count( $the_sidebars[$sidebar_id] );
}

/**
 * Pagination
 */
function ti_pagination() {
  if( is_singular() )
  return;

  global $wp_query;

  /** Stop execution if there's only 1 page */
  if( $wp_query->max_num_pages <= 1 )
    return;

  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );

  /** Add current page to the array */
  if ( $paged >= 1 )
    $links[] = $paged;

  /** Add the pages around the current page to the array */
  if ( $paged >= 3 ) {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
  }

  if ( ( $paged + 2 ) <= $max ) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo '<p>'.__( 'Page:', 'ti' ).'</p>';

  echo '<ul>' . "\n";

    /** Previous Post Link */
    // if ( get_previous_posts_link() )
    // printf( '<li class="pagination-previous">%s</li>' . "\n", get_previous_posts_link( '' ) );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
      $class = 1 == $paged ? ' class="pagination-active"' : '';

    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if ( ! in_array( 2, $links ) )
      echo '<li><a title="Pagination">&hellip;</a></li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
      $class = $paged == $link ? ' class="pagination-active"' : '';
      printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
      if ( ! in_array( $max - 1, $links ) )
        echo '<li><a title="Pagination">&hellip;</a></li>' . "\n";

      $class = $paged == $max ? ' class="pagination-active"' : '';
      printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    // if ( get_next_posts_link() )
    //  printf( '<li class="pagination-next">%s</li>' . "\n", get_next_posts_link( '' ) );

  echo '</ul>' . "\n";
}

/**
 *  Excerpt Limit
 */
function excerpt_limit($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

/**
 *  Content Limit
 */
function content_limit($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);

  return $content;
}

/**
 *  Retrieve adjacent post.
 */
function ti_get_adjacent_schedule($arg){
  global $wpdb;

  if(isset($arg['day']) && isset($arg['now'])){
    if(isset($arg['prev']) && ($arg['prev'] == true)){
      $query = "SELECT wp_posts.*
        FROM wp_posts, wp_postmeta As time, wp_postmeta As day
        WHERE convert(time.meta_value, time) < time('{$arg['now']}')
        AND day.meta_value = {$arg['day']}
        AND wp_posts.ID =  time.post_id
        AND wp_posts.ID =  day.post_id
        AND wp_posts.post_status = 'publish'
        AND wp_posts.post_type = 'schedule'
        AND time.meta_key = 'schedule_start'
        AND day.meta_key = 'schedule_day'
        Limit 1";
    }else{
      $query = "SELECT wp_posts.*
        FROM wp_posts, wp_postmeta As time, wp_postmeta As day
        WHERE convert(time.meta_value, time) > time('{$arg['now']}')
        AND day.meta_value = {$arg['day']}
        AND wp_posts.ID =  time.post_id
        AND wp_posts.ID =  day.post_id
        AND wp_posts.post_status = 'publish'
        AND wp_posts.post_type = 'schedule'
        AND time.meta_key = 'schedule_start'
        AND day.meta_key = 'schedule_day'
        Limit 1";
    }
  }elseif(isset($arg['day']) && !isset($arg['now'])){
    if(isset($arg['prev']) && ($arg['prev'] == true)){
      $query = "SELECT wp_posts.*
        FROM wp_posts, wp_postmeta As time, wp_postmeta As day
        WHERE day.meta_value < {$arg['day']}
        AND wp_posts.ID =  time.post_id
        AND wp_posts.ID =  day.post_id
        AND wp_posts.post_status = 'publish'
        AND wp_posts.post_type = 'schedule'
        AND time.meta_key = 'schedule_start'
        AND day.meta_key = 'schedule_day'
        ORDER by day.meta_value DESC, time.meta_value ASC
        Limit 1";
    }else{
      $query = "SELECT wp_posts.*
        FROM wp_posts, wp_postmeta As time, wp_postmeta As day
        WHERE day.meta_value > {$arg['day']}
        AND wp_posts.ID =  time.post_id
        AND wp_posts.ID =  day.post_id
        AND wp_posts.post_status = 'publish'
        AND wp_posts.post_type = 'schedule'
        AND time.meta_key = 'schedule_start'
        AND day.meta_key = 'schedule_day'
        ORDER by day.meta_value ASC, time.meta_value ASC
        Limit 1";
    }
  }

  $result = $wpdb->get_results($query);
  if ( $result ){
    foreach ( $result as $post ){
      setup_postdata( $post );

      return array('ID'=>$post->ID, 'title'=>get_the_title(), 'link'=>get_permalink($post->ID));
    }
  }
}


/**
 *  Comments
 */
if ( ! function_exists( 'ti_comments' ) ) :
function ti_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <li class="post pingback">
        <p><?php _e( 'Pingback:', 'ti' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'ti' ), ' ' ); ?></p>
    <?php
            break;
        default :
    ?>
    <li <?php comment_class('cf'); ?> id="li-comment-<?php comment_ID(); ?>">
        <article id="comment-<?php comment_ID(); ?>" class="cf">
            <div class="comment-gravatar">
                <?php echo get_avatar( $comment, 115 ); ?>
            </div><!--/.comment-gravatar-->
            <div class="comment-content">
                <div class="comment-content-top cf">
                    <?php printf( __( '%s', 'ti' ), sprintf( '%s', get_comment_author_link() ) ); ?>
                    <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div><!--/.comment-content-top.cf-->
                <div class="comment-content-meta">
                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                        <time pubdate datetime="<?php comment_time( 'c' ); ?>">
                            <?php printf( __( '%1$s at %2$s', 'ti' ), get_comment_date(), get_comment_time() ); ?><?php edit_comment_link( __( 'Edit comment', 'ti' ), ' - ' ); ?>
                        </time>
                    </a>
                </div><!--/.comment-content-meta-->
                <div class="comment-content-entry content_page">
                    <?php comment_text(); ?>
                    <?php if ( $comment->comment_approved == '0' ) : ?>
                        <em class="content-entry-moderation cf">
                            <?php _e( 'Your comment is awaiting moderation.', 'ti' ); ?>
                        </em><!--/.content-entry-moderation-->
                    <?php endif; ?>
                </div><!--/.comment-content-entry.markup-format-->
            </div><!--/.comment-content-->
        </article><!--/article-->

    <?php
            break;
    endswitch;
}
endif;
/**
 *  Default Comments Off
 */
function ti_default_comments_off( $data ) {
    if( $data['post_type'] == 'page' ) {
        $data['comment_status'] = 0;
    }
    return $data;
}
add_filter( 'wp_insert_post_data', 'ti_default_comments_off' );

 require 'inc/cwp-update.php'; 

