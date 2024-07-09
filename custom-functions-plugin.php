<?php
/**
 * Plugin Name: Custom Functions Plugin
 * Description: A plugin to add % and sale price in Woocommerce products.
 * Version: 1.0
 * Author: Your Abraham A.
 * Author URI: https://impactdesign.com.mx
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_filter( 'woocommerce_get_price_html', 'change_displayed_sale_price_html', 10, 2 ); 
function change_displayed_sale_price_html( $price, $product ) 
            { if( $product->is_on_sale() && ! is_admin() && ! $product->is_type('variable')){ $regular_price = (float) $product->get_regular_price(); 
            $sale_price = (float) $product->get_price(); $saving_price = wc_price( $regular_price - $sale_price ); $precision = 1; 
            $saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 1 ) . '%'; 
            $price .= sprintf( __('<br><small><span class="snippet-dto-ahorro">Ahorras:</span> 
            <span class="snippet-dto-precio">%s</span> <span class="snippet-dto-porcentaje">(%s)</span></small>', 'woocommerce' ), $saving_price, $saving_percentage );
             } return $price; }
