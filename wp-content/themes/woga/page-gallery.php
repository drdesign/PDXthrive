<?php
/**
 *  The template for displaying Page Gallery.
 *
 *  @package ThemeIsle.
 *
 *	Template Name: Gallery
 */

get_header();

while ( have_posts() ) : the_post(); ?>
	<section id="gallery">
		<div class="wrapper">
			<div class="recent-title cf">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
				<ul>
					<?php $args = array (
						'post_type'		 => 'gallery',
						'posts_per_page' => -1
					);
					$gallery = new WP_Query( $args );

					if ( $gallery->have_posts() ):
						while ( $gallery->have_posts() ) : $gallery->the_post();
							$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<?php if ( $featured_image ): ?>
								<li style="background-image: url(<?php echo $featured_image[0]; ?>);">
									<div class="content">
										<div class="tools cf">
											<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
											<div class="cf"></div>
											<a href="<?php echo $featured_image[0]; ?>" class="zoom"></a>
										</div><!-- /.tools -->
									</div><!-- /.content -->
								</li>
							<?php endif;
						endwhile;
					endif;
					wp_reset_postdata();  ?>
				</ul>
			</div> <!-- /.recent-title -->
		</div> <!-- /.wrapper -->
	</section> <!-- /#gallery -->
<?php endwhile;

get_footer(); ?>