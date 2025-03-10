<?php
/**
 * Carousel.
 *
 * This template can be overridden by copying it to yourtheme/wp-carousel-free/templates/carousel.php
 *
 * @since   2.3.4
 * @package WP_Carousel_Free
 * @subpackage WP_Carousel_Free/public/templates
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>
<div class="wpcp-carousel-wrapper wpcp-wrapper-<?php echo esc_attr( $post_id ); ?>">
	<?php
	WPCF_Helper::section_title( $post_id, $section_title, $main_section_title );
	WPCF_Helper::preloader( $post_id, $preloader );
	$the_rtl = ( 'ltr' === $carousel_direction ) ? ' dir="rtl"' : ' dir="ltr"';
	?>
	<div class="wpcp-carousel-content-wrapper">
	<div id="sp-wp-carousel-free-id-<?php echo esc_attr( $post_id ); ?>" class="<?php echo esc_attr( $carousel_classes ); ?>" <?php echo wp_kses_post( $wpcp_swiper_options ); ?> <?php echo $the_rtl; ?>>
		<div class="gradient-bg" ></div>
		<div class="swiper-wrapper">
		<?php
		WPCF_Helper::get_item_loops( $upload_data, $shortcode_data, $carousel_type, $post_id );
		?>
		
		</div>
		<?php if ( $wpcp_dots ) { ?>
			<div class="wpcp-swiper-dots swiper-pagination"></div>
		<?php } ?>
		<!-- If we need navigation buttons -->
		<?php if ( $wpcp_arrows ) { ?>

			
			<div class="wpcp-next-button swiper-button-next">
				<img  class="arrow" src="http://localhost/AdWise/wp-content/uploads/2024/03/left.png" alt="">
			</div>
	
			<div class="wpcp-prev-button swiper-button-prev">
				<img class="arrow" src="http://localhost/AdWise/wp-content/uploads/2024/03/right.png" alt="">
			</div>

		
		
			
		<?php } ?>
	</div>
	</div>
</div>
