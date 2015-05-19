<?php
/**
 * Recent_Posts widget class
 */
function ti_Widget_Recent_Posts() {
    register_widget( 'ti_Widget_Recent_Posts' );
}
add_action( 'widgets_init', 'ti_Widget_Recent_Posts' );

class ti_Widget_Recent_Posts extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'widget_recent_entries', 'description' => __( "The most recent posts on your site", 'ti') );
        parent::__construct('recent-posts', __('Recent Posts', 'ti'), $widget_ops);
        $this->alt_option_name = 'widget_recent_entries';

        add_action( 'save_post', array($this, 'flush_widget_cache') );
        add_action( 'deleted_post', array($this, 'flush_widget_cache') );
        add_action( 'switch_theme', array($this, 'flush_widget_cache') );
    }

    function widget($args, $instance) {
        global $post;
        $cache = wp_cache_get('widget_recent_posts', 'widget');

        if ( !is_array($cache) )
            $cache = array();

        if ( ! isset( $args['widget_id'] ) )
            $args['widget_id'] = $this->id;

        if ( isset( $cache[ $args['widget_id'] ] ) ) {
            echo $cache[ $args['widget_id'] ];
            return;
        }

        ob_start();
        extract($args);

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' , 'ti');
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 10;
        if ( ! $number )
            $number = 10;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
        if ($r->have_posts()) :
        echo $before_widget;
        if ( $title ) echo $before_title . $title . $after_title; ?>
        <ul class="cf">
        <?php while ( $r->have_posts() ) : $r->the_post(); 
            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
            <li>
                <div class="image"  <?php echo ($featured_image)?'style="background-image:url('.$featured_image[0].');"':''; ?> ></div>
                <div class="content-list">
                    <a href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ? get_the_title() : get_the_ID() ); ?>">
                        <?php if ( get_the_title() ) the_title(); else the_ID(); ?>
                    </a>
                    <a href="<?php the_permalink() ?>" class="readmore-list"><?php _e( 'Read More', 'ti' ); ?></a>
                </div> <!-- /.content-list -->
            </li><!--/li-->
        <?php endwhile; ?>
        </ul>
        <?php echo $after_widget; 
        // Reset the global $the_post as this query will have stomped on it
        wp_reset_postdata();

        endif;

        $cache[$args['widget_id']] = ob_get_flush();
        wp_cache_set('widget_recent_posts', $cache, 'widget');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = (int) $new_instance['number'];
        $instance['show_date'] = (bool) $new_instance['show_date'];
        $this->flush_widget_cache();

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['widget_recent_entries']) )
            delete_option('widget_recent_entries');

        return $instance;
    }

    function flush_widget_cache() {
        wp_cache_delete('widget_recent_posts', 'widget');
    }

    function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
        $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' , 'ti'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' , 'ti'); ?></label>
        <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

        <p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' , 'ti'); ?></label></p>
<?php
    }
}

/**
 *  Social Widget
 */
add_action( 'widgets_init', 'ti_widget_social' );

function ti_widget_social() {
    register_widget( 'ti_widget_social' );
}

class ti_widget_social extends WP_Widget {
    var $social_list =  array(
            array('id' => 'ti_social_facebook',     'title' => 'FaceBook link:',    'icon' => 'facebook'),
            array('id' => 'ti_social_twitter',      'title' => 'Twitter link:',     'icon' => 'twitter'),
            array('id' => 'ti_social_googleplus',   'title' => 'Google+ link:',     'icon' => 'googleplus'),
            array('id' => 'ti_social_flickr',       'title' => 'Flickr link:',      'icon' => 'flickr'),
            array('id' => 'ti_social_linkedin',     'title' => 'LinkedIn link:',    'icon' => 'linkedin'),
            array('id' => 'ti_social_instagram',    'title' => 'Instagram link:',   'icon' => 'instagram'),
            array('id' => 'ti_social_vimeo',        'title' => 'Vimeo link:',       'icon' => 'vimeo'),
            array('id' => 'ti_social_pinterest',    'title' => 'Pinterest link:',   'icon' => 'pinterest'),
            array('id' => 'ti_social_dribble',      'title' => 'Dribble link:',     'icon' => 'dribble'),
            array('id' => 'ti_social_skype',        'title' => 'Skype link:',       'icon' => 'skype')
        );

    function ti_widget_social() {
        $widget_ops = array( 'classname' => 'example', 'description' => __('A widget that displays the social buttons.', 'ti') );

        $control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'ti_widget_social' );

        $this->WP_Widget( 'ti_widget_social', __('Social', 'ti'), $widget_ops, $control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );

        //Our variables from the widget settings.
        $title = apply_filters('widget_title', $instance['title'] );

        echo $before_widget;

        // Display the widget title
        if ( $title )
            echo $before_title . $title . $after_title; ?>

        <ul id="social-list-icons" class="cf">
            <?php foreach ($this->social_list as $item): 
                if($instance[$item['id']]): ?>
                    <li><a href="<?php echo $instance[$item['id']]; ?>" class="<?php echo $item['icon']; ?>"></a></li>
                <?php endif;
            endforeach; ?>
        </ul><!--/ul-->

        <?php echo $after_widget;
    }
    //Update the widget
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        //Strip tags from title and name to remove HTML
        $instance['title'] = strip_tags( $new_instance['title'] );
        foreach ($this->social_list as $item){
            $instance[$item['id']] = strip_tags( $new_instance[$item['id']] );
        }

        return $instance;
    }


    function form( $instance ) {
        //Set up some default widget settings.
        $defaults = array( 'title' => __('Social', 'ti') );
        $instance = wp_parse_args( (array) $instance, $defaults );  
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'ti'); ?></label>
            <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
        </p>
        
        <?php foreach ($this->social_list as $item): ?>
            <p>
                <label for="<?php echo $this->get_field_id( $item['id'] ); ?>"><?php echo $item['title']; ?></label>
                <input id="<?php echo $this->get_field_id( $item['id'] ); ?>" name="<?php echo $this->get_field_name( $item['id'] ); ?>" value="<?php echo (isset($instance[$item['id']])?$instance[$item['id']]:false); ?>" style="width:100%;" />
            </p>
        <?php
        endforeach;
    }
}

?>