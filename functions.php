<?php
/**
 * Generate child theme functions and definitions
 *
 * @package Generate
 */


/*
//Remove Default Copyright
if ( ! function_exists( 'remove_footer_info' ) ) :
add_action('wp','remove_footer_info');
function remove_footer_info()
{
	remove_action( 'generate_credits', 'generate_add_footer_info' );
	remove_action( 'generate_copyright_line','generate_add_login_attribution' );
}
endif;

//Add Custom Copyright
if ( ! function_exists( 'add_footer_info' ) ) :
add_action('generate_credits','add_footer_info');
function add_footer_info()
{
	?>
	<span class="copyright"><?php _e('Copyright','generatepress');?> &copy; <?php echo date('Y'); _e(' Ingenious Solution | Built with <a href="https://elementor.com/" target="_blank">Elementor</a> + <a href="https://generatepress.com/?ref=226" target="_blank">Generate Press</a> | By <a href="http://ingenious-web.com" target="_blank">Ingenious Solution</a>' ,'generatepress'); ?> </span>
	<p class="footer_disclaimer">The website is not affiliated with Elementor - External links on this website may be affiliate links that could result in us receiving compensation (payment) when you purchase a product or service from that link. This helps us to pay the bills and keep maintaining this great service for you. You do not pay any extra fee’s for these items.</p>
	<?php
}
endif;
/*