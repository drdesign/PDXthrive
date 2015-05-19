<?php
/**
 *  The template for displaying Header.
 *
 *  @package ThemeIsle.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="wide-header">
				<div class="wrapper cf">
					<div id="header-top" class="cf">
						<a class="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
							<?php if ( get_theme_mod( 'ti_header_logo' ) ) {
								echo '<img src="'. get_theme_mod( 'ti_header_logo' ) .'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
							} else {
								echo '<img src="'. get_template_directory_uri() .'/images/header-logo.png" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" />';
							} ?>
						</a><!--/a .logo-->
						<a hreff="#" class="icon_responsive_menu" id="dropdown_menu"></a>
						<nav class="navigation">
							<?php
							if ( has_nav_menu( 'header-navigation' ) ) {

								wp_nav_menu( array(
										'theme_location'	=> 'header-navigation',
										'depth'				=>	1,
										'menu_id'			=> 'nav'
									)
								);

							} else {

								echo '<div class="menu-header-container"><ul id="nav">';
									echo '<li><a href="'. home_url() .'" title="'. __( 'Home', 'ti' ) .'">'. __( 'Home', 'ti' ) .'</a></li>';
									wp_list_pages( array(
											'title_li'	=> '',
										)
									);
								echo '</ul></div>';

							}
							?>
						</nav><!--/nav .navigation-->
					</div><!--/div #header-top-->
				</div><!--/div .wrapper-->
			</div><!--/div .wide-header-->
			<?php if ( is_front_page() ) { ?>
				<div id="subheader" <?php if(get_theme_mod( 'ti_subheader_background_image' )){ echo 'style="background-image: url('.get_theme_mod( 'ti_subheader_background_image' ).');"'; } ?>>
					<div class="subheader-color cf">
						<div class="wrapper cf">
							<div class="full-header-content">
								<?php
								if ( get_theme_mod( 'ti_subheader_article_title',__('Start woging right now !','ti') ) ) {
									echo '<h3>'. get_theme_mod( 'ti_subheader_article_title',__('Start woging right now !','ti') ) .'</h3>';
								}

								if ( get_theme_mod( 'ti_subheader_article_content',__('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione','ti') ) ) {
									echo '<p>'. get_theme_mod( 'ti_subheader_article_content',__('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione','ti') ) .'</p>';
								}

								if ( get_theme_mod( 'ti_subheader_article_button_text',__('Learn more','ti') ) ) {
									echo '<a href="'. get_theme_mod( 'ti_subheader_article_button_link' ) .'" title="'. get_theme_mod( 'ti_subheader_article_button_text',__('Learn more','ti') ) .'" id="read-more">'.  get_theme_mod( 'ti_subheader_article_button_text',__('Learn more','ti') ) .'</a>';
								}
								?>
							</div><!--/div .header-content-->
						</div><!--/div .wrapper-->
					</div><!--/div .full-header-color-->
				</div><!--/div #subheader-->
			<?php } ?>
		</header><!--/header-->	