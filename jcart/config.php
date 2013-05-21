<?php
error_reporting(E_ERROR);

// jCart v1.3
// http://conceptlogic.com/jcart/

// Do NOT store any sensitive info in this file!!!
// It's loaded into the browser as plain text via Ajax


////////////////////////////////////////////////////////////////////////////////
// REQUIRED SETTINGS

// Path to your jcart files
$config['jcartPath']              = 'jcart/';

// Path to your checkout page
$config['checkoutPath']           = 'checkout.php';

// The HTML name attributes used in your item forms
$config['item']['id']             = 'item-id';    // Item id
$config['item']['name']           = 'item-name';    // Item name
$config['item']['price']          = 'item-price';    // Item price
$config['item']['qty']            = 'item-qty';    // Item quantity
$config['item']['url']            = 'item-url';    // Item URL (optional)
$config['item']['add']            = 'my-add-button';    // Add to cart button
$config['item']['type']			  = 'item-type';


// Your PayPal secure merchant ID
// Found here: https://www.paypal.com/webapps/customerprofile/summary.view
$config['paypal']['id']           = 'orders@deadwaxrecords.es';

////////////////////////////////////////////////////////////////////////////////
// OPTIONAL SETTINGS

// Three-letter currency code, defaults to USD if empty
// See available options here: http://j.mp/agNsTx
$config['currencyCode']           = 'EUR';

// Add a unique token to form posts to prevent CSRF exploits
// Learn more: http://conceptlogic.com/jcart/security.php
$config['csrfToken']              = false;

// Override default cart text
$config['text']['cartTitle']      = '';    // Shopping Cart
$config['text']['singleItem']     = '';    // Item
$config['text']['multipleItems']  = '';    // Items
$config['text']['subtotal']       = '';    // Subtotal
$config['text']['update']         = '';    // update
$config['text']['checkout']       = '';    // checkout
$config['text']['checkoutPaypal'] = '';    // Checkout with PayPal
$config['text']['removeLink']     = '';    // remove
$config['text']['emptyButton']    = '';    // empty
$config['text']['emptyMessage']   = '';    // Your cart is empty!
$config['text']['itemAdded']      = '';    // Item added!
$config['text']['priceError']     = '';    // Invalid price format!
$config['text']['quantityError']  = '';    // Item quantities must be whole numbers!
$config['text']['checkoutError']  = '';    // Your order could not be processed!

// Override the default buttons by entering paths to your button images
$config['button']['checkout']     = '';
$config['button']['paypal']       = '';
$config['button']['update']       = '';
$config['button']['empty']        = '';

$config['text']['shipping']       = '';    // shipping checkout title
$config['text']['total']          = '';    // total
$config['text']['unreg']          = 'Unregistered shipment';    // unregisterd shipment
$config['text']['reg']            = 'Registered shipment';    // registered shipment
$config['text']['spain']          = 'Spain';    // Spain
$config['text']['europe']         = 'Europe';    // Europe
$config['text']['row']            = 'Rest of The World';    // Rest of The World
$config['text']['zonetitle']      = '';    // title of the zone select
$config['text']['typeshipment']   = '';    // title of the type of shipment


$config['types_weights'] 		  = array ('12p'=>450, '7p'=>175);
//$config['shipping_costs']		  = array ('0-500'=>4.35, '501-1000'=>6.5, '1001-2000'=>7.3, '2001-'=>7.3);
// 0-500 gr
$config['shipping_costs']['reg']['spain']['0-500']=4.35;
$config['shipping_costs']['reg']['europe']['0-500']=8.65;
$config['shipping_costs']['reg']['row']['0-500']=12.15;
$config['shipping_costs']['unreg']['spain']['0-500']=2;
$config['shipping_costs']['unreg']['europe']['0-500']=6.1;
$config['shipping_costs']['unreg']['row']['0-500']=9.6;
// 501-1000
$config['shipping_costs']['reg']['spain']['501-1000']=6.5;
$config['shipping_costs']['reg']['europe']['501-1000']=14.8;
$config['shipping_costs']['reg']['row']['501-1000']=23;
$config['shipping_costs']['unreg']['spain']['501-1000']=5;
$config['shipping_costs']['unreg']['europe']['501-1000']=12.25;
$config['shipping_costs']['unreg']['row']['501-1000']=23;
// 1001-2000
$config['shipping_costs']['reg']['spain']['1001-2000']=7.3;
$config['shipping_costs']['reg']['europe']['1001-2000']=22.35;
$config['shipping_costs']['reg']['row']['1001-2000']=28;
$config['shipping_costs']['unreg']['spain']['1001-2000']=5.1;
$config['shipping_costs']['unreg']['europe']['1001-2000']=19.8;
$config['shipping_costs']['unreg']['row']['1001-2000']=28;
// >= 2001
$config['shipping_costs']['reg']['spain']['2001-']=7.3;
$config['shipping_costs']['reg']['europe']['2001-']=36;
$config['shipping_costs']['reg']['row']['2001-']=33;
$config['shipping_costs']['unreg']['spain']['2001-']=5.1;
$config['shipping_costs']['unreg']['europe']['2001-']=36;
$config['shipping_costs']['unreg']['row']['2001-']=33;

$config['shipping_types']		  = array ('reg'=>$config['text']['reg'], 'unreg'=>$config['text']['unreg']);
$config['shipping_zones']         = array ('spain'=>$config['text']['spain'],'europe'=>$config['text']['europe'],'row'=>$config['text']['row']);


////////////////////////////////////////////////////////////////////////////////
// ADVANCED SETTINGS

// Display tooltip after the visitor adds an item to their cart?
$config['tooltip']                = true;

// Allow decimals in item quantities?
$config['decimalQtys']            = false;

// How many decimal places are allowed?
$config['decimalPlaces']          = 1;

// Number format for prices, see: http://php.net/manual/en/function.number-format.php
$config['priceFormat']            = array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',');

// Send visitor to PayPal via HTTPS?
$config['paypal']['https']        = true;

// Use PayPal sandbox?
$config['paypal']['sandbox']      = false;

// The URL a visitor is returned to after completing their PayPal transaction
$config['paypal']['returnUrl']    = '';

// The URL of your PayPal IPN script
$config['paypal']['notifyUrl']    = '';

?>