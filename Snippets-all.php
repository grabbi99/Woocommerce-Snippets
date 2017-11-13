/*
You can add a filter, checking if the cost of your shipping method is zero (WooCommerce currently is doing nothing else in their function than printing the "flat rate" label, if the cost isn't above zero) and changing your label to whatever you'd like:
*/

add_filter( 'woocommerce_cart_shipping_method_full_label', 'add_free_shipping_label', 10, 2 );
function add_free_shipping_label( $label, $method ) {
    if ( $method->cost == 0 ) {
        $label = 'Free shipping'; //not quite elegant hard coded string
    }
    return $label;
}
