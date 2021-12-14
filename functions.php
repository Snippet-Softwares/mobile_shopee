<?php
/**
 * Created by PhpStorm.
 * User: clifford
 * Date: 12/14/2021
 * Time: 10:35 AM
 */

/* Require MySQL Connection */
require('database/DBController.php');

/* Require products class */
require('database/product.php');

/* Require cart class */
require('database/Cart.php');

/*DBController object*/
$db = new DBController();

// product object
$product = new product($db);

/*shuffle product display to avoid DB fetch order of display*/
$product_shuffle = $product->getData();

// cart object
$Cart = new Cart($db);
