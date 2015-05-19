<?php
/**
 *  The template for displaying Index.
 *
 *  @package ThemeIsle.
 */

get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<section id="schedule">
			<div class="wrapper">
				<div class="recent-title cf">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="schedule-content"><?php the_content(); ?></div><!-- /.schedule-content -->
				</div> <!-- /.recent-title -->
			</div> <!-- /.wrapper -->
		</section> <!-- /#schdeule -->
	<?php }
} else {
	_e( 'No posts found', 'ti' );
}

get_footer(); ?>