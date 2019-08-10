<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/    
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

/*echo "<pre><hr />";
print_r($args);
die();*/

		$str = $product->description;
		$key='[amz_corss_sell asin="';
		$amz_url = substr(strstr($str,$key),strlen($key),10);


echo apply_filters( 'woocommerce_loop_add_to_cart_link',sprintf( '<div style="margin-top:58px">
<a href="%s" data-quantity="%s"><button style="width:140px" type="button" name="add-to-cart" class="alt btn-add-cart">Add to cart</button></a>
</div>

<div style="margin-top:5px">
<a href="https://www.amazon.com/dp/%s?tag=mrstroller-20" target="_blank"><button type="button" name="dealprice" class="alt btn-deal-price" style="background-color:#ffb20d;">AMAZON PRICE</button></a>
</div>',
	 esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
		esc_attr( $amz_url ),
		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
		esc_html( $product->add_to_cart_text() )
	),
$product, $args );



	   