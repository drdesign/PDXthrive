		<?php
		/**
		 *  The template for displaying Footer.
		 *
		 *  @package ThemeIsle.
		 */
		?>
		
		<footer id="footer">	
			<div class="wrapper">
				<?php 
				$total_widgets = ti_count_widgets('footer-widgets');
				if ( is_dynamic_sidebar( 'footer-widgets' ) && $total_widgets) {
					if($total_widgets == 2)
						$class_columns = 'col_2';
					elseif($total_widgets == 3)
						$class_columns = 'col_3';
					elseif($total_widgets >= 4)
						$class_columns = 'col_4';
					else
						$class_columns = '';
					?>
					<div class="footer_widgets <?php echo $class_columns; ?> cf">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div><!-- /div .footer_widgets -->
				<?php } ?>
				<div class="copyright-name">
					<?php echo get_theme_mod( 'ti_footer_content',__('Copyright Woga. All rights reserved.','ti') ); ?>	
				</div><!-- /div .copyright-name -->
				<div class="footer-menu">
						<ul>
							<li><a href="http://www.pdxthrive.com/about">About Us</a></li>
							<li><a href="http://www.pdxthrive.com/contact-us">Contact Us</a></li>
							<li><a href="http://www.pdxthrive.com/services">Services</a></li>
							<li><a href="http://www.pdxthrive.com/schedule">Schedule An Appointment</a></li>
						<ul>
				</div>			
				<div class="footer-social">			
						<ul>
							<li id="facebook"><a href=""> </a></li>
							<li id="linkedin"><a href=""> </a></li>	
						</ul>

				</div>	
			</div><!--/div .wrapper-->
			<div class="dr-id-design">
				<p>&#169 PDX Thrive 2015. Site done by <a href="http://www.dannielrolfe.com">Danniel Rolfe</a> </p>
			</div>	
		</footer><!--/footer #footer-->
		<?php wp_footer(); ?>
	</body>
</html>