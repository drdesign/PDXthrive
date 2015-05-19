<?php
/**
 *  The template for displaying Page Blog.
 *
 *  @package ThemeIsle.
 *
 *	Template Name: Blog
 */

get_header(); ?>

<section id="content">
	<div class="wide-nav">
		<div class="wrapper">
			<?php if ( have_posts() ) {
		    	while ( have_posts() ) {
		   		the_post();  ?>
					<h3>
						<?php the_title(); ?>
					</h3><!--/h3-->
					<p>
						<?php echo excerpt_limit(25); ?>
					</p>
				<?php }
			} ?>
		</div><!--/div .wrapper-->
	</div><!--/div .wide-nav-->
	<div class="wrapper cf">
		<div id="posts" class="cf">
			<?php $args = array (
				'post_type'		=> 'post',
				'pagination'	=> true,
				'paged'			=> $paged
			);

			$wp_query = new WP_Query( $args );

			if ( $wp_query->have_posts() ) {
				while ( $wp_query->have_posts() ) {
					$wp_query->the_post();
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class( 'post cf' ); ?>>
						<h3 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><!--/a-->
						</h3><!--/h3 .post-title-->
						<?php if($featured_image): ?>
							<div class="image"  style="background-image:url(<?php echo $featured_image[0]; ?>);" ></div>
						<?php endif; ?>
						<div class="post-meta">
							<p><span class="data"></span>  <?php echo get_the_date("M j, Y"); ?> </p>
							<p class="author_link"><span class="author"></span> <a href="#" title="<?php the_author(); ?>"><?php the_author_posts_link(); ?></a> </p>
							<p><span class="comments"></span> <a href="#" title="<?php comments_number( __( 'No responses', 'ti' ), __( 'One comment', 'ti' ), __( '% comments', 'ti' ) ); ?>"><?php comments_number( __( 'No responses', 'ti' ), __( 'One comment', 'ti' ), __( '% comments', 'ti' ) ); ?></a></p>
						</div><!--/div .post-meta-->
						<div class="post-excerpt">
							<?php echo excerpt_limit(25); ?>
						</div><!--/div .post-excerpt-->
						<a href="<?php the_permalink(); ?>" title="<?php _e( 'Read More', 'ti' ); ?>" class="read-more"><?php _e( 'Read More', 'ti' ); ?></a><!--/a .read-more-->
					</div><!--/div .post-->
				<?php }
			} else {
				_e( 'No posts found', 'ti' );
			} ?>
			<div class="cf"></div>
			<div class="posts-navigation">
				<?php echo ti_pagination(); ?>
			</div> <!--.posts-navigation -->
			<?php wp_reset_postdata(); ?>
		</div><!--/div #posts-->
		<?php get_sidebar(); ?>
	</div><!--/div .wrapper-->
</section><!--/section #content-->

<?php get_footer(); ?>