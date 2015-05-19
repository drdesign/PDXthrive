<?php
/**
 *  The template for displaying Archive.
 *
 *  @package ThemeIsle.
 */

get_header(); ?>

<section id="content">
	<div class="wide-nav">
		<div class="wrapper">
			<h3>
				<?php
				$category_archive = get_the_category();
				$author_archive = get_the_author();
				$search_archive = get_search_query();

				if ( is_day() ) {
					printf( __( '%s', 'ti' ), get_the_date() );
				} elseif ( is_month() ) {
					printf( __( '%s', 'ti' ), get_the_date( _x( 'F Y', '', 'ti' ) ) );
				} elseif ( is_year() ) {
					printf( __( '%s.', 'ti' ), get_the_date( _x( 'Y', '', 'ti' ) ) );
				} elseif ( is_category() ) {
					echo single_cat_title();
				} elseif ( is_author() ) {
					echo $author_archive;
				}
				?>
			</h3>
		</div><!--/div .wrapper-->
	</div><!--/div .wide-nav-->
	<div class="wrapper cf">
		<div id="posts" class="cf">
			<?php if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<div class="post cf" id="post-<?php the_ID(); ?>">
						<h3 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a><!--/a-->
						</h3><!--/h3 .post-title-->
						<?php if($featured_image): ?>
							<div class="image"  style="background-image:url(<?php echo $featured_image[0]; ?>);" ></div>
						<?php else: ?>
							<div class="image"><span><?php _e( 'No image', 'ti' ); ?></span></div>
						<?php endif; ?>
						<div class="post-meta">
							<p><span class="data"></span>  <?php echo get_the_date("M j, Y"); ?> </p>
							<p><span class="author"></span> <a href="#" title="<?php the_author(); ?>"><?php the_author_posts_link(); ?></a> </p>
							<p><span class="comments"></span> <a href="#" title="<?php comments_number( __( 'No responses', 'ti' ), __( 'One comment', 'ti' ), __( '% comments', 'ti' ) ); ?>"><?php comments_number( __( 'No responses', 'ti' ), __( 'One comment', 'ti' ), __( '% comments', 'ti' ) ); ?></a></p>
							
						</div><!--/div .post-meta-->
						<div class="post-excerpt">
						<?php echo excerpt_limit(32); ?>
						</div><!--/div .post-excerpt-->
						<a href="<?php the_permalink(); ?>" title="<?php _e( 'Read More', 'ti' ); ?>" class="read-more">
							<?php _e( 'Read More', 'ti' ); ?>
						</a><!--/a .read-more-->
					</div><!--/div .post-->
				<?php }
			} else {
				_e( 'No posts found', 'ti' );
			} ?>
			<div class="cf"></div>
			<div class="posts-navigation">
				<?php echo ti_pagination(); ?>
			</div> <!--.posts-navigation -->
		</div><!--/div #posts-->
		<?php get_sidebar(); ?>
	</div><!--/div .wrapper-->
</section><!--/section #content-->

<?php get_footer(); ?>