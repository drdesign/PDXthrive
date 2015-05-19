<?php
/**
 *  The template for displaying Page.
 *
 *  @package ThemeIsle.
 *
 *	Template Name: Schedule
 */

get_header(); ?>

<section id="schedule">
	<div class="wrapper">
		<?php if ( have_posts() ) {
			while ( have_posts() ) {
			the_post(); ?>
				<div class="recent-title cf">
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
				</div> <!-- /.recent-title -->
			<?php 	}
		} else {
			_e( 'No posts found', 'ti' );
		}
		$dayMap = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
		foreach ($dayMap as $day_id => $day):
			$args = array (
				'post_type'				=> 'schedule',
				'posts_per_page'		=> -1,
				'meta_key'   => 'schedule_start',
				'orderby'    => 'meta_value_num',
				'order'      => 'ASC',
				'meta_query' => array(
					array(
						'key'     => 'schedule_day',
						'value'   => $day_id,
						'compare' => '=',
					),
				),
			);

			$wp_query = new WP_Query( $args );
			if ( $wp_query->have_posts() ) { 
			
				while ( $wp_query->have_posts() ) {
					$wp_query->the_post();
					
					if(has_post_thumbnail()): 
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); 
						if( !empty($url) ):
							echo '<div class="program-schedule program_view cf" style="background:url('.$url.');">';
						endif;	
					else:
						echo '<div class="program-schedule program_view cf" style="background:url('.get_template_directory_uri().'/images/program-schedule.jpg);">';
					endif;	
					?>
					<div id="select-day">
						<span class="day"><?php echo $day; ?></span>
					</div> <!-- /#select-day -->
					<div class="list_carousel content-program-schedule" id="carousel-<?php echo $day_id; ?>">

						<div class="carousel">
							<?php 
								$schedule_start = new DateTime(get_post_meta($post->ID, 'schedule_start', true));
								$schedule_end = new DateTime(get_post_meta($post->ID, 'schedule_end', true)); ?>
								<div class="slide list_carousel_entry info-program">
									<span class="program">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
									</span>
									<span class="hour">
										<?php echo $schedule_start->format('H:i'); ?> - <?php echo $schedule_end->format('H:i'); ?>
									</span>
								</div>
						</div><!--/ul-->
						<div class="clearfix"></div>
						<a class="left arrow" href="#"></a>
						<a class="right arrow" href="#"></a>
					</div> <!-- /.content-program-schedule -->
				</div><!-- /#program-schedule -->
			<?php } 
			} 
			wp_reset_postdata(); 
		endforeach; ?>
	</div> <!-- /.wrapper -->
</section> <!-- /#schdeule -->

<?php get_footer(); ?>