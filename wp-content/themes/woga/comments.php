<?php
/**
 *  The template for displaying Comments.
 *
 *  @package ThemeIsle.
 */
if ( post_password_required() )
     return;
?>

<div id="comments-template" class="comments-area">

    <?php // You can start editing here -- including this comment! ?>

    <?php if ( have_comments() ) : ?>
        <div class="comments_title">
            <h4>
                <?php
                    printf( _n( 'One Comment - ', 'Comments (%1$s) - ', get_comments_number(), 'ti' ),
                        number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
                ?>
                <a href="#respond" title="Leave a Comment">
                    <?php _e( 'Leave a Comment', 'ti' ); ?>
                </a>
            </h4>
        </div><!--/.comments_title-->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>
        <nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation cf">
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'ti' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'ti' ) ); ?></div>
        </nav><!-- #comment-nav-before .site-navigation .comment-navigation -->
        <?php endif; // check for comment navigation ?>

        <ul class="comments-list cf">
            <?php wp_list_comments( array(
                    'callback'  => 'ti_comments',
                    'max_depth' => '3'
                )
            );
            ?>
        </ul><!--/div .comments-list .cf-->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>
        <nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation cf">
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'ti' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'ti' ) ); ?></div>
        </nav><!-- #comment-nav-before .site-navigation .comment-navigation -->
        <?php endif; // check for comment navigation ?>

    <?php endif; // have_comments() ?>

    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="nocomments"><?php _e( 'Comments are closed.', 'ti' ); ?></p>
    <?php endif; ?>

        <?php
            $commenter = wp_get_current_commenter();
            $req = get_option( 'require_name_email' );
            $aria_req = ( $req ? " aria-required='true'" : '' );
            if($commenter['comment_author'] != '')
                $name = esc_attr($commenter['comment_author']);
            else
                $name = '';
            if($commenter['comment_author_email'] != '')
                $email = esc_attr($commenter['comment_author_email']);
            else
                $email = '';
            if($commenter['comment_author_url'] != '')
                $url = esc_attr($commenter['comment_author_url']);
            else
                $url = '';

            $fields =  array(
            'author' => '
                <div class="comment-form-top cf">
                    <input placeholder="Full name (*)" name="author" type="text" value="' . $name . '" ' . $aria_req . ' />',
            'email'  => '
                    <input placeholder="E-mail address (*)" name="email" type="email" value="' . $email . '" ' . $aria_req . ' />',
            'url'    => '
                    <input placeholder="Website URL" name="url" type="url" value="' . $url . '" />
                </div>'
            );

            $comment_textarea = '<textarea placeholder="Your Message... (*)" name="comment" aria-required="true"></textarea>';
            comment_form( array( 'fields' => $fields, 'comment_field' => $comment_textarea, 'id_submit' => 'comment-form-submit', 'label_submit' => esc_attr__( 'Submit', 'ti' ), 'title_reply' => esc_attr__( 'Leave a comment', 'ti' ), 'title_reply_to' => esc_attr__( 'Leave a comment to %s', 'ti' )) );
        ?>

</div><!-- #comments .comments-area -->