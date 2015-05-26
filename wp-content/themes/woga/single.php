<?php
/**
 *  The template for displaying Single.
 *
 *  @package ThemeIsle.
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<section id="content">
			<div class="wide-nav">
				<div class="wrapper">
					<h3>
						<?php the_title(); ?>
					</h3><!--/h3-->
						<ul class="post-meta">
							<li><span class="data"></span>  <?php echo get_the_date("M j, Y"); ?> </li>
							<li><span class="author"></span> <a href="" title="<?php the_author(); ?>"><?php the_author_posts_link(); ?></a> </li>
							<li><span class="category"></span> <?php the_category(', '); ?> </li>
						</ul><!--/ul .post-meta-->
				</div><!--/div .wrapper-->
			</div><!--/div .wide-nav-->	
			<div class="wrapper cf" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="full-posts" class="cf">	
					<?php
					if ( $featured_image ) { ?>
						<img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="featured_image" />
					<?php }
					?>
					<div class="cf"></div>
					<div class="content-full content_page">
						<p><?php the_content(); ?></p>	
					</div><!-- /.content-full -->	
					<?php comments_template(); ?>
				</div><!--/div #full-posts-->	
				<?php get_sidebar(); ?>
				<div class="push"></div><!--push custom by Danniel Rolfe-->
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
	<?php }
} else {
	_e( 'No posts found', 'ti' );
}

get_footer(); ?>