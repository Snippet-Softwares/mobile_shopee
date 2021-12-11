<?php
/**
 * Created by PhpStorm.
 * User: clifford
 * Date: 12/11/2021
 * Time: 12:01 PM
 */
    /* Require MySQL Connection */
    require('database/DBController.php');

    /* Require products fetcher */
    require('database/product.php');

    /*DBController object*/
    $db = new DBController();

    // product object
    $product = new product($db);
