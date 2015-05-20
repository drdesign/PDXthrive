<?php
/**
 *  The template for displaying Front Page.
 *
 *  @package ThemeIsle.
 */

get_header();

if(get_theme_mod( 'ti_features_article_title',__('Featured Area','ti') )): ?>
	<section id="features" class="cf">
		<div class="wrapper cf">
			<h3><?php echo get_theme_mod( 'ti_features_article_title',__('Featured Area','ti') ); ?></h3>
			<p><?php echo get_theme_mod( 'ti_features_article_content',__('Lorem ipsum dolor sit amet, consectetur adipiscing elit','ti') ); ?></p>
			<ul class="cf">
				<?php if(get_theme_mod( 'ti_features_box1_title',__('Meet The Master','ti') )): ?>
					<li>
						<div class="item_feature cf">
								<div class="featured-image-transp"></div><!--/featured-image-transp-->	
								<div class="featured-image">
								<!-- custom code adding image to the featured section -->	
									<?php if ( get_theme_mod( 'ti_header_logo' ) ) {
									echo '<img src="'. get_theme_mod( 'ti_header_logo' ) .'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
										} else {
									echo '<img class="featured-image-img" src="'. get_template_directory_uri() .'/images/featured-image-1.jpg" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
								} ?>
								</div>	


							<?php if(get_theme_mod( 'ti_features_box1_image' )): ?>


								<div class="icon-div">
									<a href="<?php echo get_theme_mod( 'ti_features_box1_titlelink','#' ); ?>" style="background-image: url(<?php echo get_theme_mod( 'ti_features_box1_image'); ?>);" title="<?php echo get_theme_mod( 'ti_features_box1_title',__('Meet The Master','ti') ); ?>"></a>
								</div> <!-- s/div .icon-div -->
							<?php endif; ?>
							<div class="info-div">
								<h3><?php echo get_theme_mod( 'ti_features_box1_title',__('Meet The Master','ti') ); ?></h3>
								<?php if(get_theme_mod( 'ti_features_box1_content', __('Customize this from Appearance -> Customizer','ti') )): ?>
									<p><?php echo get_theme_mod( 'ti_features_box1_content', __('Customize this from Appearance -> Customizer','ti') ); ?></p>
								<?php endif;
								if(get_theme_mod( 'ti_features_box1_titlelink','#' )): ?>
									<a href="<?php echo get_theme_mod( 'ti_features_box1_titlelink','#' ); ?>"><?php _e( 'Read more', 'ti' ); ?></a>
								<?php endif; ?>
							</div><!-- /div .info-div -->
						</div><!-- /div .item_feature -->
					</li>
				<?php endif;
				if(get_theme_mod( 'ti_features_box2_title',__('Prepare Yourself','ti') )): ?>
					<li>
						<div class="item_feature cf">
							<div class="featured-image">
							<!-- custom code adding image to the featured section -->	
								<?php if ( get_theme_mod( 'ti_header_logo' ) ) {
								echo '<img src="'. get_theme_mod( 'ti_header_logo' ) .'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
									} else {
								echo '<img class="featured-image-img" src="'. get_template_directory_uri() .'/images/featured-image-1.jpg" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
							} ?>
							</div>
							<?php if(get_theme_mod( 'ti_features_box2_image' )): ?>
								<div class="icon-div">
									<a href="<?php echo get_theme_mod( 'ti_features_box2_titlelink','#' ); ?>" style="background-image: url(<?php echo get_theme_mod( 'ti_features_box2_image'); ?>);" title="<?php echo get_theme_mod( 'ti_features_box2_title',__('Prepare Yourself','ti') ); ?>"></a>
								</div> <!-- s/div .icon-div -->
							<?php endif; ?>
							<div class="info-div">
								<h3><?php echo get_theme_mod( 'ti_features_box2_title',__('Prepare Yourself','ti') ); ?></h3>
								<?php if(get_theme_mod( 'ti_features_box2_content', __('Customize this from Appearance -> Customizer','ti') )): ?>
									<p><?php echo get_theme_mod( 'ti_features_box2_content', __('Customize this from Appearance -> Customizer','ti') ); ?></p>
								<?php endif;
								if(get_theme_mod( 'ti_features_box2_titlelink','#' )): ?>
									<a href="<?php echo get_theme_mod( 'ti_features_box2_titlelink','#' ); ?>"><?php _e( 'Read more', 'ti' ); ?></a>
								<?php endif; ?>
							</div><!-- /div .info-div -->
						</div><!-- /div .item_feature -->
					</li>
				<?php endif;
				if(get_theme_mod( 'ti_features_box3_title',__('Relax Excercising','ti') )): ?>
					<li>
						<div class="item_feature cf">
							<div class="featured-image">
							<!-- custom code adding image to the featured section -->	
								<?php if ( get_theme_mod( 'ti_header_logo' ) ) {
								echo '<img src="'. get_theme_mod( 'ti_header_logo' ) .'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
									} else {
								echo '<img class="featured-image-img" src="'. get_template_directory_uri() .'/images/featured-image-1.jpg" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
							} ?>
							</div>
							<?php if(get_theme_mod( 'ti_features_box3_image' )): ?>
								<div class="icon-div">
									<a href="<?php echo get_theme_mod( 'ti_features_box3_titlelink','#' ); ?>" style="background-image: url(<?php echo get_theme_mod( 'ti_features_box3_image'); ?>);" title="<?php echo get_theme_mod( 'ti_features_box3_title',__('Relax Excercising','ti') ); ?>"></a>
								</div> <!-- s/div .icon-div -->
							<?php endif; ?>
							<div class="info-div">
								<h3><?php echo get_theme_mod( 'ti_features_box3_title',__('Relax Excercising','ti') ); ?></h3>
								<?php if(get_theme_mod( 'ti_features_box3_content', __('Customize this from Appearance -> Customizer','ti') )): ?>
									<p><?php echo get_theme_mod( 'ti_features_box3_content', __('Customize this from Appearance -> Customizer','ti') ); ?></p>
								<?php endif;
								if(get_theme_mod( 'ti_features_box3_titlelink','#' )): ?>
									<a href="<?php echo get_theme_mod( 'ti_features_box3_titlelink','#' ); ?>"><?php _e( 'Read more', 'ti' ); ?></a>
								<?php endif; ?>
							</div><!-- /div .info-div -->
						</div><!-- /div .item_feature -->
					</li>
				<?php endif; ?>
			</ul> <!-- /ul -->
		</div><!--/div .wrapper-->
	</section><!--/section #features-->
<?php endif;

//<-- Custom Section by Danniel Rolfe -->
if(get_theme_mod( 'ti_features_article_title',__('Featured Area','ti') )): ?>
	<section id="features" class="feature-custom cf">
		<div class="wrapper cf">
			<ul class="cf">
				<!--Featured section number 4-->
				<?php if(get_theme_mod( 'ti_features_box4_title',__('Meet The Master','ti') )): ?>
					<li>
						<div class="item_feature cf">
							<div class="featured-image">
							<!-- custom code adding image to the featured section -->	
								<?php if ( get_theme_mod( 'ti_header_logo' ) ) {
								echo '<img src="'. get_theme_mod( 'ti_header_logo' ) .'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
									} else {
								echo '<img class="featured-image-img" src="'. get_template_directory_uri() .'/images/featured-image-1.jpg" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
							} ?>
							</div>
							<?php if(get_theme_mod( 'ti_features_box4_image' )): ?>


								<div class="icon-div">
									<a href="<?php echo get_theme_mod( 'ti_features_box4_titlelink','#' ); ?>" style="background-image: url(<?php echo get_theme_mod( 'ti_features_box4_image'); ?>);" title="<?php echo get_theme_mod( 'ti_features_box4_title',__('Meet The Master','ti') ); ?>"></a>
								</div> <!-- s/div .icon-div -->
							<?php endif; ?>
							<div class="info-div">
								<h3><?php echo get_theme_mod( 'ti_features_box4_title',__('Meet The Master','ti') ); ?></h3>
								<?php if(get_theme_mod( 'ti_features_box4_content', __('Customize this from Appearance -> Customizer','ti') )): ?>
									<p><?php echo get_theme_mod( 'ti_features_box4_content', __('Customize this from Appearance -> Customizer','ti') ); ?></p>
								<?php endif;
								if(get_theme_mod( 'ti_features_box4_titlelink','#' )): ?>
									<a href="<?php echo get_theme_mod( 'ti_features_box4_titlelink','#' ); ?>"><?php _e( 'Read more', 'ti' ); ?></a>
								<?php endif; ?>
							</div><!-- /div .info-div -->
						</div><!-- /div .item_feature -->
					</li><!-- Featured section number 6-->
				<?php endif;
				
				// Featured section number 5 
				if(get_theme_mod( 'ti_features_box5_title',__('Prepare Yourself','ti') )): ?>
					<li>
						<div class="item_feature cf">
							<div class="featured-image">
							<!-- custom code adding image to the featured section -->	
								<?php if ( get_theme_mod( 'ti_header_logo' ) ) {
								echo '<img src="'. get_theme_mod( 'ti_header_logo' ) .'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
									} else {
								echo '<img class="featured-image-img" src="'. get_template_directory_uri() .'/images/featured-image-1.jpg" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
							} ?>
							</div>
							<?php if(get_theme_mod( 'ti_features_box5_image' )): ?>
								<div class="icon-div">
									<a href="<?php echo get_theme_mod( 'ti_features_box5_titlelink','#' ); ?>" style="background-image: url(<?php echo get_theme_mod( 'ti_features_box5_image'); ?>);" title="<?php echo get_theme_mod( 'ti_features_box5_title',__('Prepare Yourself','ti') ); ?>"></a>
								</div> <!-- s/div .icon-div -->
							<?php endif; ?>
							<div class="info-div">
								<h3><?php echo get_theme_mod( 'ti_features_box5_title',__('Prepare Yourself','ti') ); ?></h3>
								<?php if(get_theme_mod( 'ti_features_box5_content', __('Customize this from Appearance -> Customizer','ti') )): ?>
									<p><?php echo get_theme_mod( 'ti_features_box5_content', __('Customize this from Appearance -> Customizer','ti') ); ?></p>
								<?php endif;
								if(get_theme_mod( 'ti_features_box5_titlelink','#' )): ?>
									<a href="<?php echo get_theme_mod( 'ti_features_box5_titlelink','#' ); ?>"><?php _e( 'Read more', 'ti' ); ?></a>
								<?php endif; ?>
							</div><!-- /div .info-div -->
						</div><!-- /div .item_feature -->
					</li>
				<?php endif;
				// Featured section number 6
				if(get_theme_mod( 'ti_features_box6_title',__('Relax Excercising','ti') )): ?>
					<li>
						<div class="item_feature cf">
							<div class="featured-image">
							<!-- custom code adding image to the featured section -->	
								<?php if ( get_theme_mod( 'ti_header_logo' ) ) {
								echo '<img src="'. get_theme_mod( 'ti_header_logo' ) .'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
									} else {
								echo '<img class="featured-image-img" src="'. get_template_directory_uri() .'/images/featured-image-1.jpg" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
							} ?>
							</div>
							<?php if(get_theme_mod( 'ti_features_box6_image' )): ?>
								<div class="icon-div">
									<a href="<?php echo get_theme_mod( 'ti_features_box6_titlelink','#' ); ?>" style="background-image: url(<?php echo get_theme_mod( 'ti_features_box6_image'); ?>);" title="<?php echo get_theme_mod( 'ti_features_box6_title',__('Relax Excercising','ti') ); ?>"></a>
								</div> <!-- s/div .icon-div -->
							<?php endif; ?>
							<div class="info-div">
								<h3><?php echo get_theme_mod( 'ti_features_box6_title',__('Relax Excercising','ti') ); ?></h3>
								<?php if(get_theme_mod( 'ti_features_box6_content', __('Customize this from Appearance -> Customizer','ti') )): ?>
									<p><?php echo get_theme_mod( 'ti_features_box6_content', __('Customize this from Appearance -> Customizer','ti') ); ?></p>
								<?php endif;
								if(get_theme_mod( 'ti_features_box6_titlelink','#' )): ?>
									<a href="<?php echo get_theme_mod( 'ti_features_box6_titlelink','#' ); ?>"><?php _e( 'Read more', 'ti' ); ?></a>
								<?php endif; ?>
							</div><!-- /div .info-div -->
						</div><!-- /div .item_feature -->
					</li>
				<?php endif; ?>
			</ul> <!-- /ul -->
		</div><!--/div .wrapper-->
	</section><!--/section #features-->
<?php endif;
//<!--/custom section by Danniel Rolfe -->



if(get_theme_mod( 'ti_calculate_bmi_status','true' )): ?>
<section id="calculate-bmi" class="cf" <?php if(get_theme_mod( 'ti_calculate_bmi_background_image' )){ echo 'style="background-image: url('.get_theme_mod( 'ti_calculate_bmi_background_image' ).');"'; } ?>>
	<div class="wrapper cf">
	    <h3><?php _e( 'Calculate BMI', 'ti' ); ?></h3>
		<p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'ti' ); ?></p>
		<div class="calculate-bmi">
			<div class="size-sliders">
				<h3><?php _e( 'Your weight:', 'ti' ); ?> <span id="val-weight">95kg</span></h3>
				<div class="weight-slider cf">
					<div id="weight-slider"></div>
					<div class="cf"></div>
					<ul class="cf">
						<li><span><?php _e( 'kg:', 'ti' ); ?></span></li>
						<?php for ($kg = 40; $kg <= 180; $kg += 10): ?>
							<li><?php echo $kg; ?></li>
						<?php endfor; ?>
					</ul>
					<ul  class="cf">
						<li><span><?php _e( 'lbs:', 'ti' ); ?></span></li>
						<?php for ($lbs = 88; $lbs <= 396; $lbs += 22): ?>
							<li><?php echo $lbs; ?></li>
						<?php endfor; ?>
					</ul>
				</div><!-- /.weight-slider.cf -->
				<h3><?php _e( 'Your height:', 'ti' ); ?> <span id="val-height">185cm</span></h3>
				<div class="height-slider">
					<div id="height-slider"></div>
					<div class="cf"></div>
					<ul class="cf">
						<li><span>cm:</span></li>
						<?php $cm = array('1.4','1.5','1.6','1.7','1.8','1.9','2','2.1');
						foreach ($cm as $value): ?>
							<li><?php echo $value; ?></li>
						<?php endforeach; ?>
					</ul>
					<ul  class="cf">
						<li><span><?php _e( 'inch:', 'ti' ); ?></span></li>
						<?php $inch = array('55','59','62','66','70','74','78','82');
						foreach ($inch as $value): ?>
							<li><?php echo $value; ?></li>
						<?php endforeach; ?>
					</ul>
				</div><!-- /.weight-slider -->
			</div><!-- /.size-sliders -->
			<div class="size-responsive">
				<input type="text" placeholder="<?php _e( 'kg or lbs...', 'ti' ); ?>" name="weight_bmi">
				<input type="text" placeholder="<?php _e( 'cm or inch...', 'ti' ); ?>" name="height_bmi">
			</div><!-- /.weight-responsive -->
			<form>
				<input type="submit" value="Calculate BMi (metric)" id="calc_bmi_m">
				<input type="submit" value="Calculate BMi (imperial)" id="calc_bmi_i">
			</form>

		</div> <!-- /.calculate-bmi -->
		<div class="result-bmi cf">
		 	<h2><b>Your BMI:</b> <span id="result-bmi">24</span> <span id="close-result">(calculate again)</span></h2>

		 	<div class="whatnumber cf">
		 		<p>What the Numbers Mean</p>
		 		<span></span>
		 	</div> <!-- /.whatnumber -->
		 	<div class="cf"></div>
		 	<ul class="list-bmi cf">
		 		<li><span>BMI:</span></li>
		 		<li>Below 18.5</li>
		 		<li>18.5-24.9     </li>
		 		<li> 25-29.9 </li>
		 		<li>30 and higher</li>
		 	</ul>

		 	<ul class="list-bmi cf">
		 		<li><span>Condition :</span></li>
		 		<li>Underweight</li>
		 		<li>Normal weight  </li>
		 		<li>Overweight</li>
		 		<li>Obese</li>
		 	</ul>
		 </div><!-- /.result-bmi -->
	</div><!--/div .wrapper-->
</section><!--/section #calculate-bmi-->
<?php endif; ?>

	<section id="testimonials-program" class="cf">
		<div class="wrapper cf">
			<?php if(get_theme_mod( 'ti_testimonials_title' )):

			$testimonials__numberofarticles =  get_theme_mod( 'ti_testimonials_number_of_articles', 5 );

			$args = array (
				'post_type'				=> 'testimonials',
				'posts_per_page'		=> $testimonials__numberofarticles
			);

			$wp_query = new WP_Query( $args );
			?>
			<div class="testimonials-awesome cf">
				<h2><?php echo get_theme_mod( 'ti_testimonials_title' ); ?></h2>
				<p><?php echo get_theme_mod( 'ti_testimonials_content' ); ?></p>
				<div class="content-testimonials">
				<div class="list_carousel">
					<ul id="foo2">
						<?php
						if ( $wp_query->have_posts() ) {
							while ( $wp_query->have_posts() ) {
								$wp_query->the_post();
								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
								?>
								<li>
									<div class="list_carousel_entry">
										<?php if($featured_image): ?>
											<figure style="background-image: url(<?php echo $featured_image[0]; ?>);"></figure>
										<?php endif; ?>
										<div class="name-testimonials">
											<h3><?php the_title(); ?></h3>
											<p><?php echo get_post_meta($post->ID, 'testimonial_info_person', true); ?></p>
										</div> <!-- /.name-testimonials -->
										<span class="line"></span>
										<div class="test-content-costumer">
											<span class="quote">"</span><?php echo excerpt_limit(40); ?><span class="quote">"</span>
										</div>	<!-- /.test-content-costumer -->
									</div><!--/div .list_carousel_entry-->
								</li>
							<?php }
						} ?>
					</ul><!--/ul-->
					<div class="clearfix"></div>
					<a id="prev2" class="prev" href="#"></a>
					<a id="next2" class="next" href="#"></a>
				</div><!--/div .list_carousel-->
			</div><!--/div .content-testimonials-->
		</div> <!-- /.testimonials-awesome -->


		<?php wp_reset_postdata();
		endif;
		if(get_theme_mod( 'ti_program_title' )):

			$args = array (
				'post_type'				=> 'schedule',
				'posts_per_page'		=> -1,
				'meta_key'   => 'schedule_start',
				'orderby'    => 'meta_value_num',
				'order'      => 'ASC',
				'meta_query' => array(
					array(
						'key'     => 'schedule_day',
						'value'   => date('w'),
						'compare' => '=',
					),
				),
			);

			$wp_query = new WP_Query( $args );
			?>
			<div class="todays-program cf">
				<h2><?php echo get_theme_mod( 'ti_program_title' ); ?></h2>
				<p><?php echo get_theme_mod( 'ti_program_content' ); ?></p>
				<ul>
					<?php
					if ( $wp_query->have_posts() ) {
						while ( $wp_query->have_posts() ) {
							$wp_query->the_post();
							$schedule_start = new DateTime(get_post_meta($post->ID, 'schedule_start', true));
							$schedule_end = new DateTime(get_post_meta($post->ID, 'schedule_end', true));
							?>
							<li>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<span><?php echo $schedule_start->format('H:i'); ?> - <?php echo $schedule_end->format('H:i'); ?></span>
									<p><?php the_title(); ?></p>
								</a>
							</li>
						<?php }
					} ?>
				</ul>
			</div> <!-- /.testimonials-awesome -->
			<?php endif; ?>
		</div> <!-- /.wrapper -->
	</section> <!-- /#testimonials-program -->
<?php if(get_theme_mod( 'ti_latest_news_title', __('Latest News','ti') )):

	$latestnews_numberofarticles =  get_theme_mod( 'ti_latest_news_number_of_articles', '3' );

	$args = array (
		'post_type'				=> 'post',
		'posts_per_page'		=> ($latestnews_numberofarticles?$latestnews_numberofarticles:3),
	);

	$wp_query = new WP_Query( $args );
	?>
		<section id="recent-blog">
			<div class="wrapper">
				<div class="recent-title cf">
					<h2><?php echo get_theme_mod( 'ti_latest_news_title', __('Latest News','ti') ); ?></h2>
					<p><?php echo get_theme_mod( 'ti_latest_news_content' ); ?></p>
					<ul>
						<?php
						if ( $wp_query->have_posts() ) {
							while ( $wp_query->have_posts() ) {
								$wp_query->the_post();
								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
								?>
								<li>
									<div class="content">
										<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
										<p><?php echo excerpt_limit(25); ?></p>
										<a href="<?php the_permalink(); ?>" title="<?php _e( 'View post', 'ti' ); ?>" class="view-post">
											<?php _e( 'View post','ti' ); ?>
										</a><!--/.view-post-->
									</div><!-- /.content -->
									<div class="image"  <?php echo ($featured_image)?'style="background-image:url('.$featured_image[0].');"':''; ?> ></div>
								</li>
							<?php }
						} ?>
					</ul>
				</div> <!-- /.recent-title -->
			</div> <!-- /.wrapper -->
		</section> <!-- /#recent-blog -->
<?php wp_reset_postdata();
endif;
if(get_theme_mod( 'ti_contact_panel_title',__('Get in Touch with Us','ti') )): ?>
	<section id="contact-map">
		<div class="info_contact">
			<div class="wrapper">
				<h2><?php echo get_theme_mod( 'ti_contact_panel_title',__('Get in Touch with Us','ti') ); ?></h2>
				<p><?php echo get_theme_mod( 'ti_contact_panel_content',__('You have a question or only want to contact us? Please use the form below.','ti') ); ?></p>
				<?php echo do_shortcode(get_theme_mod( 'ti_contact_contactform7_shortcode')); ?>
				<div class="right-side">
					 <div id="information">
						<ul class="cf">
							<li>
						 		<span class="icon phone"></span>
						 		<p><?php echo get_theme_mod( 'ti_telephone_title',__('Phone','ti') ); ?></p>
						 		<span class="extra"><?php echo get_theme_mod( 'ti_telephone_number',__('342-546-777','ti') ); ?></span>
							 </li>
							 <li>
						 		<span class="icon mail"></span>
						 		<p><?php echo get_theme_mod( 'ti_mail_title',__('Email','ti') ); ?></p>
						 		<span class="extra"><?php echo get_theme_mod( 'ti_mail_content',__('contact@themeisle.com','ti') ); ?></span>
							 </li>
							 <li>
						 		<span class="icon location"></span>
						 		<p><?php echo get_theme_mod( 'ti_contact_address_title',__('Address','ti') ); ?></p>
						 		<span class="extras"><?php echo get_theme_mod( 'ti_contact_address_content',__('7th Avenue, New York City','ti') ); ?></span>
							 </li>
						</ul>
					 </div> <!-- /#information -->

					<div id="social-icons-map">
						<?php
							if ( is_dynamic_sidebar( 'contact-widgets' ) )
								dynamic_sidebar( 'contact-widgets' );
						?>
					</div><!-- /#social-icons-map -->
				</div> <!-- /.right-side -->

			</div> <!-- /.wrapper -->
		</div> <!-- /.info_contact -->
		<div class="map"><?php echo get_theme_mod( 'ti_contact_map_code','<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5525199.9705362385!2d11.573861450784019!3d47.453833152541606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sro!4v1422450164656" width="600" height="450" frameborder="0" style="border:0"></iframe>' ); ?></div>
	</section> <!-- /#contact -->
<?php endif;
get_footer(); ?>