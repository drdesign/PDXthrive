<?php
/**
 *  The template for displaying Single.
 *
 *  @package ThemeIsle.
 */
get_header(); ?>

<section id="schedule">
	<div class="wrapper">
		<div class="recent-title cf">
			<h2>
				<?php
				if ( get_theme_mod( 'ti_404page_title' ) ) {
					echo get_theme_mod( 'ti_404page_title' );
				} else {
					_e( '404 ERROR', 'ti' );
				}
				?>
			</h2>

			<div class="schedule-content">
				<p>
					<?php
					if ( get_theme_mod( 'ti_404page_subtitle' ) ) {
						echo get_theme_mod( 'ti_404page_subtitle' );
					} else {
						_e( 'The page does not exist', 'ti' );
					}
					?>
				</p>
				<p>
					<?php
					if ( get_theme_mod( 'ti_404page_settings_content' ) ) {
						echo get_theme_mod( 'ti_404page_settings_content' );
					} else {
						_e( 'Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try. Can you try this again or maybe visit our <a href="'. home_url() .'" title="Home Page">Home Page</a> to start fresh. We\'ll do better next time.', 'ti' );
					}
					?>
				</p>
			</div><!-- /.schedule-content -->
		</div> <!-- /.recent-title -->
	</div> <!-- /.wrapper -->
</section> <!-- /#schdeule -->

<?php get_footer(); ?>