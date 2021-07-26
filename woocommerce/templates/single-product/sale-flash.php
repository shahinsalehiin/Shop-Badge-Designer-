<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

// if ( $product->is_on_sale() ) : ?>

	<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'wpcsbd' ) . '</span>', $post, $product ); ?>
	<?php
//endif;

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
