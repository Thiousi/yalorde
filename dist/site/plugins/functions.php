<?php


/**
 * Format price
 *
 * @var int, float
 * @var int, float
 */

function formatPrice( $price, $priceSale ) {

    if ( $priceSale != '' ) {
        echo '<ins class="price  price--sale" property="price">$' . $priceSale . '</ins>';
        echo '<del class="price  price--crossed" property="price">$' . $price . '</del>';
    } else  {
        echo '<span class="price" property="price">$' . $price . '</span>';
    }

}


?>
