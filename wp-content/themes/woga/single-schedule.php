<?php
/**
 *  The template for displaying Single Schedule.
 *
 *  @package ThemeIsle.
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$schedule_start = new DateTime(get_post_meta($post->ID, 'schedule_start', true));
		$schedule_end = new DateTime(get_post_meta($post->ID, 'schedule_end', true)); 
		$day = get_post_meta($post->ID, 'schedule_day', true); 
		$dayMap = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'); ?>

		<section id="schedule">
			<div class="wrapper">
				<div class="recent-title cf">
					<?php  
							if(has_post_thumbnail()): 
								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); 
								echo '<div class="program-schedule cf" style="background:url('.$url.');">';
							else:
								echo '<div class="program-schedule cf" style="background:url('.get_template_directory_uri().'/images/program-schedule.jpg);">';
							endif;	
					?>
					
						<div id="select-day">
							<div class="wrap_day">
								<span class="day"><?php echo $dayMap[$day]; ?></span>
								<div id="arrows">
									<?php $prevday = ti_get_adjacent_schedule(array('day'=>$day, 'prev'=>true)); 
									if($prevday): ?>
										<a href="<?php echo $prevday['link']; ?>" title="<?php echo $prevday['title']; ?>" class="left"></a>
									<?php endif; 
									$nextday = ti_get_adjacent_schedule(array('day'=>$day)); 
									if($nextday): ?>
										<a href="<?php echo $nextday['link']; ?>" title="<?php echo $nextday['title']; ?>" class="right"></a>
									<?php endif; ?>
								</div> <!-- /#arrows -->
							</div> <!-- /.wrap_day -->
						</div> <!-- /#select-day -->
						<div class="content-program-schedule">
							<div class="info-program">
								<span class="program">
									<?php the_title(); ?>
								</span>
								<span class="hour">
									<?php echo $schedule_start->format('H:i'); ?> - <?php echo $schedule_end->format('H:i'); ?>
								</span>
							</div>
							<?php $prev = ti_get_adjacent_schedule(array('day'=>$day,'now'=>get_post_meta($post->ID, 'schedule_start', true),'prev'=> true)); 
							if($prev): ?>
								<a href="<?php echo $prev['link']; ?>" title="<?php echo $prev['title']; ?>" class="left arrow"></a>
							<?php endif; 
							$next = ti_get_adjacent_schedule(array('day'=>$day,'now'=>get_post_meta($post->ID, 'schedule_start', true))); 
							if($next): ?>
								<a href="<?php echo $next['link']; ?>" title="<?php echo $next['title']; ?>" class="right arrow"></a>
							<?php endif; ?>
						</div> <!-- /.content-program-schedule -->
					</div><!-- /#program-schedule -->

					<h3><?php echo get_post_meta($post->ID, 'schedule_headline', true); ?></h3>
					<div class="schedule-content">
						<?php the_content(); ?>
					</div>
					<!-- /.schedule-content -->
				</div> <!-- /.recent-title -->
			</div> <!-- /.wrapper -->
		</section> <!-- /#schdeule -->

	<?php }
} else {
	_e( 'No posts found', 'ti' );
}

get_footer(); ?>