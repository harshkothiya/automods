<?php



/*--- Banner background function for image, color, gradient ---*/

function dactor_banner_background() {
	
	$title = get_theme_mod('banner_sub_title', __('Welcome to medical hospital', 'dactor'));
	//$fornt_img = get_theme_mod('banner_side_img',get_stylesheet_directory_uri() . '/images/banner-img-01.png');
	$subtitle = get_theme_mod('banner_main_title', __('Hospital that you can trust', 'dactor'));
	$subpera = get_theme_mod('banner_para', __('Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor', 'dactor'));
	$button_text1 = get_theme_mod('banner_btn1_txt', __('Ready to start', 'dactor'));
	$button_text2 = get_theme_mod('banner_btn2_txt', __('Know more', 'dactor'));
	$button_url1 = get_theme_mod('banner_btn1_url', '#');
	$button_url2 = get_theme_mod('banner_btn2_url', '#');
	$site_header_type = get_theme_mod('site_header_type', 'image');
	
	?>
	
	<div class="header-background background-type-image">
		<div class="header-content">
			<div class="container">
				<div class="row align-center">
				
					<div class="banner-text-content" >
						<h5 class="bg-maintitle"><?php echo esc_html( $title ); ?></h5>
						<h1 class="bg-subtitle"><?php echo esc_html( $subtitle ); ?></h1>
						<p class="bg-subpera"><?php echo esc_html( $subpera ); ?></p>
						<?php if(!empty($button_text1)){ ?>
						<div class="banner-btn-div">
							<a href="<?php echo esc_url( $button_url1 ); ?>" class="bg-banner-button banner-button mt-5"><?php echo esc_html( $button_text1 ); ?></a>&nbsp;&nbsp;
						<?php }?>
						<?php if(!empty($button_text2)){ ?>
						<a href="<?php echo esc_url( $button_url2 ); ?>" class="bg-banner-button2 banner-button mt-5"><?php echo esc_html( $button_text2 ); ?></a>
						</div>
						<?php }?>
					</div>
					
				</div>	
			</div>	
		</div>
	</div> 
	
	<?php
}


/*--- Banner background function for video ---*/

function dactor_banner_video() {

	if ( !function_exists('the_custom_header_markup') ) {
		return;
	}

	$banner_type 	= get_theme_mod( 'banner_type' );

	if ( get_theme_mod('banner_type') == 'video' && is_front_page() ) {
		the_custom_header_markup();
	}
}