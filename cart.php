<?php
ob_start();
// include navbar from file
include('header.php');

// include cart info from file
include('Template/_cart-template.php');

// include new phones from file
include('Template/_new-phones.php');

// include footer from file
include('footer.php');
?>