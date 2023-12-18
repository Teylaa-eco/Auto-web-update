<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			
			<?php 

				if (!isset($_GET['step'])) {

					echo'<div class="steps__content">';

						do_action( 'woocommerce_checkout_billing' ); 

						echo'<a class="btn alignright" href="'. esc_url(get_the_permalink() . '?step=shipping') .'">';

							_e('Volgende');

						echo'</a>';

					echo'</div>';

				}

				if (isset($_GET['step']) && $_GET['step'] == 'shipping') {

					echo'<div class="steps__content">';

						do_action( 'woocommerce_checkout_shipping' );

						echo'<div class="display-block">';

							echo'<a class="btn " href="'. esc_url(get_the_permalink()) .'">';

								_e('Vorige');

							echo'</a>';

							echo'<a class="btn alignright" href="'. esc_url(get_the_permalink() . '?step=checkout') .'">';

								_e('Volgende');

							echo'</a>';

						echo'</div>';

					echo'</div>';

				}

			?>

		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php 

		if (isset($_GET['step']) && $_GET['step'] == 'checkout') {

			echo'<div class="steps__content">';

				do_action( 'woocommerce_checkout_before_order_review_heading' );
			
				echo'<h3 id="order_review_heading">';

					echo esc_html_e( 'Your order', 'woocommerce' );

				echo'</h3>';
			
				do_action( 'woocommerce_checkout_before_order_review' );

				echo'<div id="order_review" class="woocommerce-checkout-review-order">';

					do_action( 'woocommerce_checkout_order_review' );

				echo'</div>';

				do_action( 'woocommerce_checkout_after_order_review' ); 

			echo'</div>';

		}

	?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
